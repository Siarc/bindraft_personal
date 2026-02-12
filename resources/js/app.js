import './bootstrap';
import { ParticleWave } from './particles.js';

// Initialize particle effect when DOM is ready
document.addEventListener('DOMContentLoaded', () => {
    const particleContainer = document.getElementById('particle-canvas-container');

    if (particleContainer) {
        const particleWave = new ParticleWave(particleContainer);

        // Update particle animation based on scroll progress
        if (typeof ScrollTrigger !== 'undefined') {
            ScrollTrigger.create({
                trigger: '.recognition-sec',
                start: 'top top',
                end: 'bottom top',
                scrub: true,
                onUpdate: (self) => {
                    particleWave.updateScroll(self.progress);
                }
            });
        }
    }
});
