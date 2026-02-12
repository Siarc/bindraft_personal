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
