import * as THREE from 'three';

/**
 * Particle Flow Effect using Three.js
 * Creates horizontal flowing particles with scroll-based speed and direction
 */
export class ParticleWave {
    constructor(container) {
        this.container = container;
        this.scene = null;
        this.camera = null;
        this.renderer = null;
        this.particles = null;
        this.particleCount = 2000;
        this.baseSpeed = 0.5; // Normal speed when not scrolling
        this.currentSpeed = this.baseSpeed;
        this.scrollVelocity = 0;
        this.lastScrollY = 0;
        this.scrollDirection = 1; // 1 = right, -1 = left
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

        // Add lights
        const ambientLight = new THREE.AmbientLight(0xffffff, 0.5);
        this.scene.add(ambientLight);

        const pointLight = new THREE.PointLight(0x43C97B, 1);
        pointLight.position.set(0, 0, 500);
        this.scene.add(pointLight);

        // Event listeners
        window.addEventListener('resize', () => this.onResize());

        // Start animation
        this.animate();
    }

    setupScrollTracking() {
        let scrollTimeout;

        window.addEventListener('scroll', () => {
            const currentScrollY = window.scrollY;

            // Calculate scroll velocity
            const scrollDelta = currentScrollY - this.lastScrollY;
            this.scrollVelocity = Math.abs(scrollDelta);

            // Determine direction: positive delta = scrolling down = move right
            // negative delta = scrolling up = move left
            this.scrollDirection = scrollDelta >= 0 ? 1 : -1;

            // Update speed based on scroll velocity (max 10x normal speed)
            this.currentSpeed = this.baseSpeed + Math.min(this.scrollVelocity * 0.2, this.baseSpeed * 9);

            this.lastScrollY = currentScrollY;

            // Reset to normal speed when scrolling stops
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
        const velocities = []; // Store individual particle velocities

        // Color palette (green to teal gradient)
        const color1 = new THREE.Color(0x43C97B); // Your brand green
        const color2 = new THREE.Color(0x20B2AA); // Teal
        const color3 = new THREE.Color(0x00CED1); // Dark turquoise

        for (let i = 0; i < this.particleCount; i++) {
            // Spread particles across the screen
            const x = (Math.random() - 0.5) * 2000;
            const y = (Math.random() - 0.5) * 1000;
            const z = (Math.random() - 0.5) * 1500;

            positions.push(x, y, z);

            // Random color from palette
            const colorChoice = Math.floor(Math.random() * 3);
            const color = colorChoice === 0 ? color1 : (colorChoice === 1 ? color2 : color3);
            colors.push(color.r, color.g, color.b);

            // Random sizes for depth effect
            sizes.push(Math.random() * 6 + 3);

            // Random velocity variation for natural flow
            velocities.push(Math.random() * 0.5 + 0.5);
        }

        geometry.setAttribute('position', new THREE.Float32BufferAttribute(positions, 3));
        geometry.setAttribute('color', new THREE.Float32BufferAttribute(colors, 3));
        geometry.setAttribute('size', new THREE.Float32BufferAttribute(sizes, 1));

        // Store velocities for later use
        this.particleVelocities = velocities;

        // Create material with circular particles
        const material = new THREE.PointsMaterial({
            size: 5,
            vertexColors: true,
            transparent: true,
            opacity: 0.8,
            sizeAttenuation: true,
            blending: THREE.AdditiveBlending,
            map: this.createCircleTexture(), // Add circular texture
            depthWrite: false
        });

        this.particles = new THREE.Points(geometry, material);
        this.scene.add(this.particles);
    }

    createCircleTexture() {
        // Create a canvas to draw a circle
        const canvas = document.createElement('canvas');
        canvas.width = 32;
        canvas.height = 32;
        const ctx = canvas.getContext('2d');

        // Draw a radial gradient circle
        const gradient = ctx.createRadialGradient(16, 16, 0, 16, 16, 16);
        gradient.addColorStop(0, 'rgba(255, 255, 255, 1)');
        gradient.addColorStop(0.5, 'rgba(255, 255, 255, 0.5)');
        gradient.addColorStop(1, 'rgba(255, 255, 255, 0)');

        ctx.fillStyle = gradient;
        ctx.fillRect(0, 0, 32, 32);

        const texture = new THREE.Texture(canvas);
        texture.needsUpdate = true;
        return texture;
    }

    onMouseMove(event) {
        this.mouseX = (event.clientX - window.innerWidth / 2) * 0.1;
        this.mouseY = (event.clientY - window.innerHeight / 2) * 0.1;
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

        const positions = this.particles.geometry.attributes.position.array;

        // Move particles horizontally
        for (let i = 0; i < this.particleCount; i++) {
            const i3 = i * 3;

            // Apply movement based on current speed, direction, and particle velocity
            const movement = this.currentSpeed * this.scrollDirection * this.particleVelocities[i];
            positions[i3] += movement; // X position

            // Wrap particles around when they go off screen
            if (positions[i3] > 1000) {
                positions[i3] = -1000;
            } else if (positions[i3] < -1000) {
                positions[i3] = 1000;
            }
        }

        this.particles.geometry.attributes.position.needsUpdate = true;

        // Subtle rotation for depth
        this.particles.rotation.z += 0.0001;

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
