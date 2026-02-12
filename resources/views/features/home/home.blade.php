@extends('layouts.app')

@section('content')

    @include('features.home.partials.hero')
    @include('features.home.partials.how-we-help')
    @include('features.home.partials.recognition')
    @include('features.home.partials.testimonials')

@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // GSAP Hero Title Animation
        if (typeof gsap !== 'undefined') {
            // Wave Animations
            gsap.to("#wave1", {
                attr: {
                    d: "M0,128L48,144C96,160,192,192,288,186.7C384,181,480,139,576,128C672,117,768,139,864,154.7C960,171,1056,181,1152,170.7C1248,160,1344,128,1392,112L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
                },
                duration: 4,
                ease: "power1.inOut",
                repeat: -1,
                yoyo: true
            });

            gsap.to("#wave2", {
                attr: {
                    d: "M0,192L48,181.3C96,171,192,149,288,149.3C384,149,480,171,576,186.7C672,203,768,213,864,202.7C960,192,1056,160,1152,149.3C1248,139,1344,149,1392,154.7L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
                },
                duration: 5,
                delay: 0.5,
                ease: "power1.inOut",
                repeat: -1,
                yoyo: true
            });

            const heroTitle = document.getElementById('hero-title');
            if (heroTitle) {
                // Split text into lines
                const text = heroTitle.textContent;
                const words = text.split(/\s+/);
                const line1 = 'We Create Digital Systems That Drive';
                const line2 = 'Business Impact';

                heroTitle.innerHTML = `<span class="line-wrapper"><span class="line">${line1}</span></span><span class="line-wrapper"><span class="line">${line2}</span></span>`;

                gsap.from('#hero-title .line', {
                    duration: 1.2,
                    y: 80,
                    opacity: 0,
                    stagger: 0.15,
                    ease: 'power4.out',
                    delay: 0.3
                });
            }

            // Statement text animation on scroll with pinning
            const statement = document.getElementById('statement');
            const recognitionSec = document.querySelector('.recognition-sec');
            const sectionContent = recognitionSec.querySelector('.section-content');
            
            if (statement && recognitionSec && typeof SplitType !== 'undefined') {
                const split = new SplitType(statement, { types: 'chars' });
                gsap.set(split.chars, { opacity: 0.1 }); // More dimmed start
                gsap.set(statement, { y: 100, scale: 0.95 }); // Start deeper and smaller

                const tl = gsap.timeline({
                    scrollTrigger: {
                        trigger: recognitionSec,
                        start: 'top top',
                        end: '+=200%', // Longer scroll for smoother pacing
                        pin: true,
                        scrub: 1.5, // Silkier scrub
                        anticipatePin: 1,
                    }
                });

                // Smooth entry
                tl.to(statement, {
                    y: 0,
                    scale: 1,
                    duration: 0.5,
                    ease: 'power2.out'
                }, 0);

                // Luxurious text reveal
                tl.to(split.chars, {
                    opacity: 1,
                    stagger: 0.03, // Slightly slower stagger for more impact
                    duration: 1.2,
                    ease: 'none'
                }, 0);
            }
        }

        // Slick: Help Cards (mobile only)
        if (typeof $ !== 'undefined' && $.fn.slick) {
            $('.help-cards-list').slick({
                dots: true,
                arrows: false,
                infinite: false,
                speed: 300,
                slidesToShow: 1.15,
                slidesToScroll: 1,
                mobileFirst: true,
                swipeToSlide: true,
                touchMove: true,
                touchThreshold: 5,
                responsive: [{
                    breakpoint: 767,
                    settings: { slidesToShow: 1.5 }
                }, {
                    breakpoint: 1024,
                    settings: "unslick"
                }]
            });

        }
    });
</script>

<!-- Testimonials Carousel Script -->
<script src="{{ asset('js/testimonials.js') }}"></script>

@endsection
