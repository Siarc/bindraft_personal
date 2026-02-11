@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section>
    <div class="hero">
        <div class="clip-container"></div>
        <div class="container">
            <div class="hero-content-wraper-outer">
                <div class="hero-content-wraper">
                    <div class="hero-content">
                        <div class="banner-heading">
                            <h1 class="reveal-lines" id="hero-title">We Create Digital Systems That Drive Business Impact</h1>
                        </div>
                    </div>

                    <div class="trusted-by-section">
                        <div class="row align-items-end">
                            <div class="col-xl-8 col-md-5">
                                <div class="banner-cta-section">
                                    <a href="#" class="banner-cta">Speak With a Digital Advisor</a>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-7">
                                <div class="trusted-by d-flex flex-column">
                                    <span class="text-white mb-3 text-end">Trusted by:</span>
                                    <div class="brands-marquee">
                                        <div class="brands-container scroll">
                                            <!-- Actual Brand SVG Logos (Text-based for accuracy) -->
                                            <div class="brand-logo mb-2">
                                                <svg width="100" height="30" viewBox="0 0 100 30" fill="none" xmlns="http://www.w3.org/2000/svg"><text x="50" y="20" font-family="serif" font-weight="bold" font-size="22" fill="#555" text-anchor="middle">BROWN</text></svg>
                                            </div>
                                            <div class="brand-logo mb-2">
                                                <svg width="120" height="30" viewBox="0 0 120 30" fill="none" xmlns="http://www.w3.org/2000/svg"><text x="60" y="20" font-family="Arial, sans-serif" font-weight="900" font-size="20" fill="#555" text-anchor="middle">McDonald's</text></svg>
                                            </div>
                                            <div class="brand-logo mb-2">
                                                <svg width="100" height="40" viewBox="0 0 100 40" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M40 5 Q50 35 60 5" stroke="#555" stroke-width="3" fill="none"/><text x="50" y="30" font-family="sans-serif" font-weight="bold" font-size="14" fill="#555" text-anchor="middle">Unilever</text></svg>
                                            </div>
                                            <div class="brand-logo">
                                                <svg width="80" height="30" viewBox="0 0 80 30" fill="none" xmlns="http://www.w3.org/2000/svg"><text x="40" y="20" font-family="sans-serif" font-weight="bold" font-size="20" fill="#555" text-anchor="middle">Clear</text></svg>
                                            </div>
                                        </div>
                                        <div class="brands-container scroll">
                                            <div class="brand-logo mb-2">
                                                <svg width="100" height="30" viewBox="0 0 100 30" fill="none" xmlns="http://www.w3.org/2000/svg"><text x="50" y="20" font-family="serif" font-weight="bold" font-size="22" fill="#555" text-anchor="middle">BROWN</text></svg>
                                            </div>
                                            <div class="brand-logo mb-2">
                                                <svg width="120" height="30" viewBox="0 0 120 30" fill="none" xmlns="http://www.w3.org/2000/svg"><text x="60" y="20" font-family="Arial, sans-serif" font-weight="900" font-size="20" fill="#555" text-anchor="middle">McDonald's</text></svg>
                                            </div>
                                            <div class="brand-logo mb-2">
                                                <svg width="100" height="40" viewBox="0 0 100 40" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M40 5 Q50 35 60 5" stroke="#555" stroke-width="3" fill="none"/><text x="50" y="30" font-family="sans-serif" font-weight="bold" font-size="14" fill="#555" text-anchor="middle">Unilever</text></svg>
                                            </div>
                                            <div class="brand-logo">
                                                <svg width="80" height="30" viewBox="0 0 80 30" fill="none" xmlns="http://www.w3.org/2000/svg"><text x="40" y="20" font-family="sans-serif" font-weight="bold" font-size="20" fill="#555" text-anchor="middle">Clear</text></svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- How We Help Section -->
<section aria-labelledby="help-section-title">
    <div class="help-section-wrapper">
        <div class="container">
            <div class="section-title px-4 px-lg-0">
                <h2 id="help-section-title" class="text-start">How We Help</h2>
            </div>

            <div class="help-section">
                <div class="help-cards-list">
                    <!-- Help Card 1 -->
                    <div class="help-card">
                        <div class="help-video-bg">
                            <img src="https://placehold.co/600x800/111827/43C97B?text=Website+%26+Digital+Experience" width="100%" height="100%" alt="Website & Digital Services">
                        </div>
                        <div class="help-card-content">
                            <div class="help-card-icon" aria-hidden="true">
                                <svg xmlns="http://www.w3.org/2000/svg" width="58" height="53" viewBox="0 0 58 53" fill="none">
                                    <path d="M53.1882 0.819763H4.82137C2.16196 0.819763 0 2.98173 0 5.64114V37.3914C0 40.0508 2.16196 42.2128 4.82137 42.2128H53.1786C55.838 42.2128 58 40.0508 58 37.3914V5.6507C58.0095 2.98173 55.8476 0.819763 53.1882 0.819763Z" fill="#43C97B"></path>
                                    <path d="M37.4423 46.0297C37.3275 45.7714 37.0692 45.5992 36.7822 45.5992H21.2276C20.9406 45.5992 20.6823 45.7714 20.5675 46.0297L18.3386 51.0137C18.1281 51.492 18.4725 52.0277 18.9986 52.0277H38.992C39.5182 52.0277 39.8626 51.492 39.6521 51.0137L37.4423 46.0297Z" fill="#43C97B"></path>
                                </svg>
                            </div>
                            <div class="help-card-content-inner">
                                <h3>Designing and developing websites that fuel growth and build lasting customer loyalty.</h3>
                                <a href="#" class="help-cta">
                                    Website and Digital Services
                                    <span aria-hidden="true">
                                        <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 1.69141H11M11 1.69141V11.6914M11 1.69141L1 11.6914" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Help Card 2 -->
                    <div class="help-card">
                        <div class="help-video-bg">
                            <img src="https://placehold.co/600x800/111827/43C97B?text=Technology+Solutions" width="100%" height="100%" alt="Technology Solutions">
                        </div>
                        <div class="help-card-content">
                            <div class="help-card-icon" aria-hidden="true">
                                <svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 52 52" fill="none">
                                    <rect width="24" height="24" rx="6" fill="#43C97B"></rect>
                                    <rect y="28" width="24" height="24" rx="6" fill="#43C97B"></rect>
                                    <rect x="28" width="24" height="24" rx="6" fill="#43C97B"></rect>
                                    <path d="M40 31V49" stroke="#43C97B" stroke-width="5" stroke-linecap="round"></path>
                                    <path d="M49 40H31" stroke="#43C97B" stroke-width="5" stroke-linecap="round"></path>
                                </svg>
                            </div>
                            <div class="help-card-content-inner">
                                <h3>Creating custom solutions to make work frictionless.</h3>
                                <a href="#" class="help-cta">
                                    Technology Solutions
                                    <span aria-hidden="true">
                                        <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 1.69141H11M11 1.69141V11.6914M11 1.69141L1 11.6914" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Help Card 3 -->
                    <div class="help-card">
                        <div class="help-video-bg">
                            <img src="https://placehold.co/600x800/111827/43C97B?text=AI+Agents+%26+Automation" width="100%" height="100%" alt="AI Agents and Automation">
                        </div>
                        <div class="help-card-content">
                            <div class="help-card-icon" aria-hidden="true">
                                <svg xmlns="http://www.w3.org/2000/svg" width="53" height="58" viewBox="0 0 53 58" fill="none">
                                    <path d="M10.7358 34.209C11.1622 33.0432 12.8136 33.0432 13.24 34.209L15.2365 39.6882C15.6407 40.7973 16.5132 41.6698 17.6224 42.074L23.1015 44.0705C24.2673 44.4969 24.2673 46.1483 23.1015 46.5747L17.6224 48.5712C16.5132 48.9754 15.6407 49.8479 15.2365 50.957L13.24 56.4361C12.8136 57.602 11.1622 57.602 10.7358 56.4361L8.73936 50.957C8.33515 49.8479 7.46265 48.9754 6.35352 48.5712L0.874389 46.5747C-0.291463 46.1483 -0.291463 44.4969 0.874389 44.0705L6.35352 42.074C7.46265 41.6698 8.33516 40.7973 8.73936 39.6882L10.7358 34.209Z" fill="#43C97B"></path>
                                    <path d="M34.8814 13.7094C35.4631 12.1123 37.7232 12.1123 38.3074 13.7094L41.0383 21.2073C41.5929 22.7231 42.7883 23.9185 44.3041 24.4707L51.802 27.204C53.3991 27.7882 53.3991 30.0483 51.802 30.63L44.3041 33.361C42.7883 33.9155 41.5929 35.1109 41.0383 36.6268L38.3074 44.1246C37.7257 45.7218 35.4631 45.7218 34.8814 44.1246L32.1505 36.6268C31.5959 35.111 30.4005 33.9155 28.8847 33.361L21.3868 30.63C19.7897 30.0484 19.7897 27.7882 21.3868 27.204L28.8847 24.4707C30.4005 23.9185 31.5959 22.7232 32.1505 21.2073L34.8814 13.7094Z" fill="#43C97B"></path>
                                    <path d="M11.716 1.37606C12.1301 0.2398 13.7371 0.2398 14.1512 1.37606L16.0959 6.70975C16.4902 7.78929 17.3406 8.63965 18.4201 9.03401L23.7538 10.9762C24.8901 11.3928 24.8901 12.9998 23.7538 13.4139L18.4201 15.3585C17.3406 15.7529 16.4902 16.6033 16.0959 17.6828L14.1512 23.0165C13.7371 24.1527 12.1301 24.1527 11.716 23.0165L9.77138 17.6828C9.37702 16.6033 8.52665 15.7529 7.44712 15.3585L2.11343 13.4139C0.977166 12.9998 0.977166 11.3928 2.11343 10.9762L7.44712 9.03401C8.52665 8.63965 9.37702 7.78929 9.77138 6.70975L11.716 1.37606Z" fill="#43C97B"></path>
                                </svg>
                            </div>
                            <div class="help-card-content-inner">
                                <h3>Replacing repetitive processes with smart automation.</h3>
                                <a href="#" class="help-cta">
                                    AI Agents and Automation
                                    <span aria-hidden="true">
                                        <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 1.69141H11M11 1.69141V11.6914M11 1.69141L1 11.6914" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Case Studies / Your Brands Section -->
<section>
    <div class="bg-color-section custom-case-studies">
        <div class="container">
            <!-- Your Brands Section -->
            <div class="your-brands-wrapper">
                <div class="your-brands-heading">
                    <h2 class="section-title mb-0" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                        20+ Years of Helping <br><span> Businesses Transform</span>
                    </h2>
                    <a href="#" class="see-all-link">View All Case Studies
                        <span>
                            <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1.69141H11M11 1.69141V11.6914M11 1.69141L1 11.6914" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </span>
                    </a>
                </div>
                <div class="your-brands-block">
                    <div class="row">
                        <div class="col-lg-6">
                            <a href="#">
                                <div class="brand-card" data-aos="fade-in" data-aos-duration="3000">
                                    <img src="https://placehold.co/700x500/111827/ffffff?text=McDonald%27s+Digital+Menu+Boards" alt="McDonald's Case Study" class="img-fluid card-img">
                                    <div class="card-overlay-wrapper">
                                        <div class="card-text">
                                            <div class="card-logo">
                                                <svg width="100" height="30" viewBox="0 0 100 30" fill="none" xmlns="http://www.w3.org/2000/svg"><text x="50" y="20" font-family="Arial, sans-serif" font-weight="900" font-size="18" fill="white" text-anchor="middle">McDonald's</text></svg>
                                            </div>
                                            <div class="card-overlay">
                                                <div class="title">
                                                    <h4>Elevating McDonald's Digital Presence in Asia to Highlight Local Menus and Brand Impact</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6">
                            <a href="#">
                                <div class="brand-card" data-aos="fade-in" data-aos-duration="3000">
                                    <img src="https://placehold.co/700x500/111827/ffffff?text=Unilever+Scalp+Care+Science" alt="Unilever Case Study" class="img-fluid card-img">
                                    <div class="card-overlay-wrapper">
                                        <div class="card-text">
                                            <div class="card-logo">
                                                <svg width="80" height="40" viewBox="0 0 80 40" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M40 5 Q50 35 60 5" stroke="white" stroke-width="3" fill="none"/><text x="40" y="35" font-family="sans-serif" font-weight="bold" font-size="12" fill="white" text-anchor="middle">Unilever</text></svg>
                                            </div>
                                            <div class="card-overlay">
                                                <div class="title">
                                                    <h4>Communicating Unilever's Scalp Care Expertise Through Digital Transformation</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Success Stories (Slider) -->
            <div class="great-minds-wrapper">
                <div class="great-minds-heading">
                    <h2 class="section-title mb-0" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                        Recent Success <span>Stories</span>
                    </h2>
                    <a href="#" class="see-all-link">View All Case Studies
                        <span>
                            <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1.69141H11M11 1.69141V11.6914M11 1.69141L1 11.6914" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </span>
                    </a>
                </div>
                <div class="great-minds-section">
                    <div class="row gm-slider">
                        @foreach([
                            ['logo' => 'Microscope Central', 'img' => 'https://placehold.co/400x300/1f2937/ffffff?text=Microscope+Lab', 'title' => 'Transforming Microscopy Sales With Seamless Ecommerce Experience'],
                            ['logo' => 'Lavi Industries', 'img' => 'https://placehold.co/400x300/1f2937/ffffff?text=Crowd+Control', 'title' => 'Transforming Lavi Industries\' Digital Presence to Reflect Market Leadership in Crowd Control and Public Guidance'],
                            ['logo' => 'LSA', 'img' => 'https://placehold.co/400x300/1f2937/ffffff?text=Global+Language', 'title' => 'Scaling Global Language Services with a Modern Digital Experience'],
                            ['logo' => 'Fore', 'img' => 'https://placehold.co/400x300/1f2937/ffffff?text=Modern+Design', 'title' => 'Elevating Brand and Digital Presence Through Modern Design'],
                        ] as $item)
                        <div class="col-md-3">
                            <div class="gm-card">
                                <div class="company-logo">
                                    <div class="company-logo-text" style="font-weight: bold; font-family: serif; color: #111;">{{ $item['logo'] }}</div>
                                </div>
                                <div class="gm-img">
                                    <img src="{{ $item['img'] }}" alt="{{ $item['logo'] }}">
                                    <div class="gm-mask" aria-hidden="true"></div>
                                </div>
                                <div class="gm-content">
                                    <div class="gm-text">
                                        <div class="gm-title">
                                            <p class="gm-watch-podcast">Read Case Study</p>
                                            <p class="gm-episode-title">{{ $item['title'] }}</p>
                                            <a href="#" class="btn-arrow">
                                                <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1 1.69141H11M11 1.69141V11.6914M11 1.69141L1 11.6914" stroke="#212329" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Recognition / Statement Section -->
<section>
    <div class="recognition-sec">
        <!-- Background -->
        <div class="clip-container2">
            <div class="linear-grad" aria-hidden="true"></div>
            <div class="radial-1" aria-hidden="true"></div>
            <div class="radial-2" aria-hidden="true"></div>
        </div>

        <!-- Foreground Content -->
        <div class="container">
            <div class="section-content">
                <div class="statement split-text-animate" id="statement">
                    We help companies replace outdated systems with frictionless solutions built for today's changing digital landscape. Every effort is focused on measurable impact, helping teams work smarter, faster, and with greater clarity.
                </div>
                <div class="awards" id="awards" aria-labelledby="awards-label">
                    <h4 id="awards-label">Awards & Recognition:</h4>
                    <div class="award-logo-list" role="list" aria-label="Award logos">
                        <div role="listitem" class="award-logo-placeholder">
                            <svg width="100" height="40" viewBox="0 0 100 40" fill="none"><text x="50" y="25" font-family="sans-serif" font-weight="900" font-size="18" fill="#fff" text-anchor="middle">Clutch</text></svg>
                        </div>
                        <div role="listitem" class="award-logo-placeholder">
                            <svg width="120" height="40" viewBox="0 0 120 40" fill="none"><text x="60" y="25" font-family="serif" font-weight="bold" font-size="16" fill="#fff" text-anchor="middle">DesignRush</text></svg>
                        </div>
                        <div role="listitem" class="award-logo-placeholder">
                            <svg width="100" height="40" viewBox="0 0 100 40" fill="none"><text x="50" y="25" font-family="sans-serif" font-weight="bold" font-size="16" fill="#fff" text-anchor="middle">Best Design</text></svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Expert Insights -->
<section>
    <div class="container">
        <div class="resources-wrapper">
            <div class="redirect-header">
                <div class="section-title">
                    <h2 id="resources" data-aos="fade-up" data-aos-anchor-placement="top-bottom">Expert Insights</h2>
                </div>
                <a href="#" class="redirect-link" aria-label="See all available resources">
                    View All Resources
                    <div class="arrow-vector" aria-hidden="true">
                        <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1.70557H11M11 1.70557V11.7056M11 1.70557L1 11.7056" stroke="#212329" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                </a>
            </div>
            <div class="resources-wrapp-inner">
                <div class="row">
                    <div class="col-md-4">
                        <a href="#">
                            <div class="resource-box">
                                <div class="resource-card-content">
                                    <h4>SEO & UX</h4>
                                    <p>SEO and user experience: the powerful pair of online success.</p>
                                </div>
                                <div class="resoure-image">
                                    <img src="https://placehold.co/400x250/111827/43C97B?text=SEO+%26+UX+Flow" alt="SEO & UX" class="img-fluid">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#">
                            <div class="resource-box">
                                <div class="resource-card-content">
                                    <h4>Strategy & Planning</h4>
                                    <p>Understanding gap analysis? Template, Examples, and Tools</p>
                                </div>
                                <div class="resoure-image">
                                    <img src="https://placehold.co/400x250/111827/43C97B?text=Strategic+Gap+Analysis" alt="Strategy & Planning" class="img-fluid">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#">
                            <div class="resource-box">
                                <div class="resource-card-content">
                                    <h4>Commerce & Experience</h4>
                                    <p>Best Practices for Building Unified Commerce Experiences</p>
                                </div>
                                <div class="resoure-image">
                                    <img src="https://placehold.co/400x250/111827/43C97B?text=Unified+Commerce" alt="Commerce & Experience" class="img-fluid">
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // GSAP Hero Title Animation
        if (typeof gsap !== 'undefined') {
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

            // Statement text animation on scroll
            const statement = document.getElementById('statement');
            if (statement && typeof SplitType !== 'undefined') {
                const split = new SplitType(statement, { types: 'chars' });
                gsap.set(split.chars, { opacity: 0.2 });

                gsap.to(split.chars, {
                    opacity: 1,
                    stagger: 0.02,
                    scrollTrigger: {
                        trigger: statement,
                        start: 'top 80%',
                        end: 'bottom 30%',
                        scrub: 1,
                    }
                });
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

            // Slick: GM Success Stories slider (mobile only)
            function initGMSlider() {
                if ($(window).width() <= 991) {
                    if (!$('.gm-slider').hasClass('slick-initialized')) {
                        $('.gm-slider').slick({
                            dots: true,
                            arrows: false,
                            infinite: true,
                            slidesToShow: 2,
                            slidesToScroll: 1,
                            responsive: [{
                                breakpoint: 768,
                                settings: { slidesToShow: 1, slidesToScroll: 1 }
                            }]
                        });
                    }
                } else {
                    if ($('.gm-slider').hasClass('slick-initialized')) {
                        $('.gm-slider').slick('unslick');
                    }
                }
            }
            initGMSlider();
            $(window).on('resize', initGMSlider);
        }
    });
</script>
@endsection
