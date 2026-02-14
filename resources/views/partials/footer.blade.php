<footer>
    <!-- Footer CTA Banner -->
    <div class="hero-image">
        <div class="footer-overlay">
            <div class="container">
                <div class="footer-banner-content">
                    <h2 data-aos="fade-up">Let's Create Real Digital Impact</h2>
                    <p data-aos="fade-up" data-aos-duration="1200">
                        Replace complexity with clarity so your teams move faster, your systems are seamlessly connected, and your growth becomes easier to measure.
                    </p>
                    <a href="#" class="btn-contact" data-aos="fade-up" data-aos-duration="1300">Speak With a Digital Advisor</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Content -->
    <div class="footer-content">
        <div class="container">
            <div class="main-content">
                <div class="company-info">
                    <div class="logo-section">
                        <div class="logo-footer">
                            <a class="homeLink" href="/">
                                <div class="footer-logo-text">bindraft</div>
                            </a>
                        </div>
                        <p class="company-description">We help organizations simplify complex digital systems so their teams can move faster and smarter.</p>
                    </div>
                    <div class="footer-social">
                        <a href="https://github.com/bindraft" target="_blank" rel="noopener noreferrer">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path>
                            </svg>
                            <span>GitHub</span>
                        </a>
                        <a href="https://www.facebook.com/BindRaft/" target="_blank" rel="noopener noreferrer">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                            </svg>
                            <span>Facebook</span>
                        </a>
                    </div>
                </div>

                <div class="footer-links">
                    <div class="nav-column">
                        <h4>Services</h4>
                        <ul>
                            <li><a href="{{ route('services') }}" class="nav-link">Services</a></li>
                        </ul>
                    </div>
                    <div class="nav-column">
                        <h4>Company</h4>
                        <ul>
                            <li><a href="{{ route('about') }}" class="nav-link">About</a></li>
                            <li><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
                        </ul>
                    </div>
                    <div class="nav-column">
                        <h4>Legal</h4>
                        <ul class="nav-list">
                            <li><a href="{{ route('privacy.policy') }}" class="nav-link">Privacy Policy</a></li>
                            <li><a href="{{ route('terms.use') }}" class="nav-link">Terms of Use</a></li>
                            <li><a href="{{ route('cookie.policy') }}" class="nav-link">Cookie Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-bottom-content">
                <p class="copyright">
                    © {{ date('Y') }} BindRaft. All Rights Reserved.
                </p>
                <p class="contact-info">
                    Contact us at
                    <a href="mailto:contact@bindraft.com" class="contact-link" target="_blank" rel="noopener noreferrer">
                        contact@bindraft.com
                    </a>
                </p>
            </div>
        </div>
    </div>
</footer>
