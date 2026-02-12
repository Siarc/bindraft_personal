// Testimonials Carousel
(function () {
    const testimonialsPerPage = 3;
    let currentIndex = 0;
    const totalTestimonials = 6; // Total number of testimonials
    const totalPages = Math.ceil(totalTestimonials / testimonialsPerPage);

    const testimonialsGrid = document.getElementById('testimonialsGrid');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const paginationDots = document.getElementById('paginationDots');

    if (!testimonialsGrid || !prevBtn || !nextBtn || !paginationDots) {
        return; // Exit if testimonials section doesn't exist on this page
    }

    const allCards = Array.from(testimonialsGrid.querySelectorAll('.testimonial-card'));

    // Create pagination dots
    function createPaginationDots() {
        paginationDots.innerHTML = '';
        for (let i = 0; i < totalPages; i++) {
            const dot = document.createElement('button');
            dot.className = 'pagination-dot' + (i === 0 ? ' active' : '');
            dot.setAttribute('aria-label', `Go to testimonial set ${i + 1}`);
            dot.addEventListener('click', () => goToPage(i));
            paginationDots.appendChild(dot);
        }
    }

    // Update visible testimonials
    function updateTestimonials() {
        const startIndex = currentIndex * testimonialsPerPage;
        const endIndex = startIndex + testimonialsPerPage;

        // Hide all cards first
        allCards.forEach(card => {
            card.classList.add('hidden');
            card.style.animation = 'none';
        });

        // Show current page cards with staggered animation
        allCards.slice(startIndex, endIndex).forEach((card, index) => {
            card.classList.remove('hidden');
            // Force reflow to restart animation
            void card.offsetWidth;
            card.style.animation = `fadeInScale 0.5s ease forwards ${index * 0.1}s`;
        });

        // Update pagination dots
        const dots = paginationDots.querySelectorAll('.pagination-dot');
        dots.forEach((dot, index) => {
            if (index === currentIndex) {
                dot.classList.add('active');
            } else {
                dot.classList.remove('active');
            }
        });
    }

    // Go to specific page
    function goToPage(pageIndex) {
        currentIndex = pageIndex;
        updateTestimonials();
    }

    // Next testimonials
    function nextTestimonials() {
        currentIndex = (currentIndex + 1) % totalPages;
        updateTestimonials();
    }

    // Previous testimonials
    function prevTestimonials() {
        currentIndex = (currentIndex - 1 + totalPages) % totalPages;
        updateTestimonials();
    }

    // Event listeners
    nextBtn.addEventListener('click', nextTestimonials);
    prevBtn.addEventListener('click', prevTestimonials);

    // Keyboard navigation
    document.addEventListener('keydown', (e) => {
        if (e.key === 'ArrowLeft') {
            prevTestimonials();
        } else if (e.key === 'ArrowRight') {
            nextTestimonials();
        }
    });

    // Touch swipe support
    let touchStartX = 0;
    let touchEndX = 0;

    testimonialsGrid.addEventListener('touchstart', (e) => {
        touchStartX = e.changedTouches[0].screenX;
    }, { passive: true });

    testimonialsGrid.addEventListener('touchend', (e) => {
        touchEndX = e.changedTouches[0].screenX;
        handleSwipe();
    }, { passive: true });

    function handleSwipe() {
        const swipeThreshold = 50;
        const diff = touchStartX - touchEndX;

        if (Math.abs(diff) > swipeThreshold) {
            if (diff > 0) {
                // Swipe left - next
                nextTestimonials();
            } else {
                // Swipe right - prev
                prevTestimonials();
            }
        }
    }

    // Auto-advance (optional - uncomment to enable)
    // setInterval(nextTestimonials, 7000);

    // Initialize
    createPaginationDots();
    updateTestimonials();
})();
