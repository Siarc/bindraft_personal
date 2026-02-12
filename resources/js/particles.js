import * as THREE from 'three';

/**
 * Dense Particle Wave Effect using Three.js
 * Creates a flowing wave of particles from left to right with mouse interaction
 */
export class ParticleWave {
    constructor(container) {
        this.container = container;
        this.scene = null;
        this.camera = null;
        this.renderer = null;
        this.particles = null;
        this.particleCount = 8000; // Increased for density
        this.baseSpeed = 0.8;
        this.currentSpeed = this.baseSpeed;
        this.scrollVelocity = 0;
        this.lastScrollY = 0;
        this.scrollDirection = 1;
        this.clock = new THREE.Clock();

        this.init();
        this.setupScrollTracking();
    }

    init() {
        // Create scene
        this.scene = new THREE.Scene();
        this.scene.fog = new THREE.Fog(0x000000, 1, 1000);

        // Create camera
        const aspect = this.container.offsetWidth / this.container.offsetHeight;
        this.camera = new THREE.PerspectiveCamera(75, aspect, 1, 2000);
        this.camera.position.z = 500;

        // Create renderer
        this.renderer = new THREE.WebGLRenderer({
            alpha: true,
            antialias: true
        });
        this.renderer.setSize(this.container.offsetWidth, this.container.offsetHeight);
        this.renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
        this.container.appendChild(this.renderer.domElement);

        // Create particles
        this.createParticles();

        // Add lights for better visibility
        const ambientLight = new THREE.AmbientLight(0xffffff, 0.6);
        this.scene.add(ambientLight);

        // Event listeners
        window.addEventListener('resize', () => this.onResize());

        // Start animation
        this.animate();
    }

    setupScrollTracking() {
        let scrollTimeout;

        window.addEventListener('scroll', () => {
            const currentScrollY = window.scrollY;
            const scrollDelta = currentScrollY - this.lastScrollY;
            this.scrollVelocity = Math.abs(scrollDelta);
            this.scrollDirection = scrollDelta >= 0 ? 1 : -1;
            this.currentSpeed = this.baseSpeed + Math.min(this.scrollVelocity * 0.3, this.baseSpeed * 12);
            this.lastScrollY = currentScrollY;

            clearTimeout(scrollTimeout);
            scrollTimeout = setTimeout(() => {
                this.scrollVelocity = 0;
                this.currentSpeed = this.baseSpeed;
            }, 150);
        });
    }

    createParticles() {
        const geometry = new THREE.BufferGeometry();
        const positions = [];
        const colors = [];
        const sizes = [];
        const velocities = [];
        const originalPositions = []; // Store original positions for wave pattern

        // Color palette (green to teal gradient)
        const color1 = new THREE.Color(0x43C97B);
        const color2 = new THREE.Color(0x20B2AA);
        const color3 = new THREE.Color(0x00CED1);
        const color4 = new THREE.Color(0x3CAEA3);

        // Create particles in a dense wave formation flowing from left to right
        for (let i = 0; i < this.particleCount; i++) {
            // Create wave-like distribution
            const wavePhase = (i / this.particleCount) * Math.PI * 4; // Multiple wave cycles
            const waveAmplitude = 150;

            // Start from left side and flow to right
            const x = (Math.random() - 0.5) * 2000;
            const baseY = Math.sin(wavePhase) * waveAmplitude;
            const y = baseY + (Math.random() - 0.5) * 300; // Add some randomness around the wave
            const z = (Math.random() - 0.5) * 400; // Less depth variation for flatter wave

            positions.push(x, y, z);
            originalPositions.push(x, y, z);

            // Vary colors across the wave
            const colorMix = Math.random();
            let color;
            if (colorMix < 0.25) color = color1;
            else if (colorMix < 0.5) color = color2;
            else if (colorMix < 0.75) color = color3;
            else color = color4;

            colors.push(color.r, color.g, color.b);

            // Smaller, more uniform sizes for dense effect
            sizes.push(Math.random() * 3 + 2);

            // Slight velocity variation
            velocities.push(Math.random() * 0.3 + 0.8);
        }

        geometry.setAttribute('position', new THREE.Float32BufferAttribute(positions, 3));
        geometry.setAttribute('color', new THREE.Float32BufferAttribute(colors, 3));
        geometry.setAttribute('size', new THREE.Float32BufferAttribute(sizes, 1));

        this.particleVelocities = velocities;
        this.originalPositions = originalPositions;

        // Create material with circular particles
        const material = new THREE.PointsMaterial({
            size: 4,
            vertexColors: true,
            transparent: true,
            opacity: 0.85,
            sizeAttenuation: true,
            blending: THREE.AdditiveBlending,
            map: this.createCircleTexture(),
            depthWrite: false
        });

        this.particles = new THREE.Points(geometry, material);
        this.scene.add(this.particles);
    }

    createCircleTexture() {
        const canvas = document.createElement('canvas');
        canvas.width = 32;
        canvas.height = 32;
        const ctx = canvas.getContext('2d');

        // Draw a soft radial gradient circle
        const gradient = ctx.createRadialGradient(16, 16, 0, 16, 16, 16);
        gradient.addColorStop(0, 'rgba(255, 255, 255, 1)');
        gradient.addColorStop(0.4, 'rgba(255, 255, 255, 0.8)');
        gradient.addColorStop(0.7, 'rgba(255, 255, 255, 0.3)');
        gradient.addColorStop(1, 'rgba(255, 255, 255, 0)');

        ctx.fillStyle = gradient;
        ctx.fillRect(0, 0, 32, 32);

        const texture = new THREE.Texture(canvas);
        texture.needsUpdate = true;
        return texture;
    }

    onResize() {
        const width = this.container.offsetWidth;
        const height = this.container.offsetHeight;

        this.camera.aspect = width / height;
        this.camera.updateProjectionMatrix();
        this.renderer.setSize(width, height);
    }

    updateScroll(progress) {
        this.scrollProgress = progress;
    }

    animate() {
        requestAnimationFrame(() => this.animate());

        const time = this.clock.getElapsedTime();
        const positions = this.particles.geometry.attributes.position.array;

        // Animate particles
        for (let i = 0; i < this.particleCount; i++) {
            const i3 = i * 3;

            // Get current position
            let x = positions[i3];
            let y = positions[i3 + 1];
            const z = positions[i3 + 2];

            // Apply horizontal flow movement
            const movement = this.currentSpeed * this.scrollDirection * this.particleVelocities[i];
            x += movement;

            // Add subtle wave motion for organic flow
            const waveOffset = Math.sin(time * 0.5 + x * 0.01) * 0.5;
            y += waveOffset;

            // Wrap particles around horizontally
            if (x > 1000) {
                x = -1000;
                // Reset to wave pattern when wrapping
                y = this.originalPositions[i3 + 1] + (Math.random() - 0.5) * 100;
            } else if (x < -1000) {
                x = 1000;
                y = this.originalPositions[i3 + 1] + (Math.random() - 0.5) * 100;
            }

            // Keep Y within bounds
            if (y > 600) y = -600;
            if (y < -600) y = 600;

            // Update positions
            positions[i3] = x;
            positions[i3 + 1] = y;
            positions[i3 + 2] = z;
        }

        this.particles.geometry.attributes.position.needsUpdate = true;

        // Very subtle rotation for depth
        this.particles.rotation.z += 0.00005;

        this.renderer.render(this.scene, this.camera);
    }

    destroy() {
        window.removeEventListener('resize', () => this.onResize());
        if (this.renderer) {
            this.renderer.dispose();
            this.container.removeChild(this.renderer.domElement);
        }
    }
}

