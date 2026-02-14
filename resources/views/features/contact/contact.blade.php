@extends('layouts.app')

@section('title', 'Contact Us · BindRaft')

@section('content')

<!-- Hero Section -->
<section class="contact-hero relative">
    <!-- Background Image -->
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/river_2.jpg') }}" alt="Contact Us" class="w-full h-full object-cover" />
        <div class="absolute inset-0 bg-gradient-to-br from-blue-900/90 via-cyan-800/85 to-blue-900/90"></div>
    </div>
    
    <div class="contact-hero-content relative z-10">
        <div data-aos="fade-up" data-aos-duration="1000">
            <h1>Let's Start a Conversation</h1>
            <p>Have a project in mind or just want to say hello? We'd love to hear from you. Reach out to us and let's build something amazing together.</p>
        </div>
    </div>
</section>

<div class="contact-page-wrapper">
    <div class="contact-content-container">

        <!-- Contact Info Grid -->
        <div class="contact-info-grid">
            <!-- Email -->
            <a href="mailto:contact@bindraft.com" class="contact-card" data-aos="fade-up" data-aos-delay="100">
                <div class="contact-icon-wrapper">
                    <i class="fas fa-envelope contact-icon"></i>
                </div>
                <h3>Email Us</h3>
                <p>contact@bindraft.com</p>
                <p class="text-sm mt-2 text-gray-400">Response within 24 hours</p>
            </a>

            <!-- Phone -->
            <a href="tel:+8801558934599" class="contact-card" data-aos="fade-up" data-aos-delay="200">
                <div class="contact-icon-wrapper">
                    <i class="fas fa-phone-alt contact-icon"></i>
                </div>
                <h3>Call Us</h3>
                <p>+880 1558 934599</p>
                <p class="text-sm mt-2 text-gray-400">Sun-Thu from 9am to 6pm</p>
            </a>

            <!-- Location -->
            <div class="contact-card" data-aos="fade-up" data-aos-delay="300">
                <div class="contact-icon-wrapper">
                    <i class="fas fa-map-marker-alt contact-icon"></i>
                </div>
                <h3>Visit Us</h3>
                <p>Road-10, House-31, Sector-9</p>
                <p>Uttara, Dhaka 1230</p>
            </div>

            <!-- Hours -->
             <div class="contact-card" data-aos="fade-up" data-aos-delay="400">
                <div class="contact-icon-wrapper">
                    <i class="fas fa-clock contact-icon"></i>
                </div>
                <h3>Business Hours</h3>
                <p>Sat - Thu: 9:00 AM - 6:00 PM</p>
                <p>Friday: Closed</p>
            </div>
        </div>

        <!-- Contact Form & Map Section -->
        <div class="contact-form-section" data-aos="fade-up">
            
            <!-- Form Side -->
            <div class="form-wrapper">
                <div class="form-header">
                    <h2>Send a Message</h2>
                    <p>Tell us about your project, goals, and timeline.</p>
                </div>

                <form action="#" method="POST" onsubmit="event.preventDefault();">
                    <div class="form-group">
                        <input type="text" id="name" class="form-input" placeholder=" " required>
                        <label for="name" class="form-label">Your Name</label>
                    </div>

                    <div class="form-group">
                        <input type="email" id="email" class="form-input" placeholder=" " required>
                        <label for="email" class="form-label">Email Address</label>
                    </div>

                    <div class="form-group">
                        <input type="text" id="subject" class="form-input" placeholder=" " required>
                        <label for="subject" class="form-label">Subject</label>
                    </div>

                    <div class="form-group">
                        <textarea id="message" class="form-textarea" placeholder=" " required></textarea>
                        <label for="message" class="form-label">How can we help?</label>
                    </div>

                    <button type="submit" class="btn-submit">
                        Send Message <i class="fas fa-paper-plane ms-2"></i>
                    </button>
                </form>
            </div>

            <!-- Image/Map Side -->
            <div class="contact-image-side">
                <!-- Using a visually appealing abstract or office image instead of a static map for now -->
                <img src="{{ asset('images/service_abstract.jpg') }}" alt="Our Office Vibe">
                <div class="contact-overlay">
                    <h3>BindRaft HQ</h3>
                    <p><i class="fas fa-map-pin me-2"></i> Dhaka, Bangladesh</p>
                </div>
            </div>

        </div>

    </div>
</div>

@endsection

@section('scripts')
<script>
    // Optional: Simple form interaction script to show a success message mock
    document.querySelector('form').addEventListener('submit', function(e) {
        const btn = this.querySelector('.btn-submit');
        const originalText = btn.innerHTML;
        
        btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';
        btn.style.opacity = '0.8';
        
        setTimeout(() => {
            btn.innerHTML = '<i class="fas fa-check"></i> Message Sent!';
            btn.style.backgroundColor = '#43C97B';
            
            setTimeout(() => {
                btn.innerHTML = originalText;
                btn.style.backgroundColor = '';
                btn.style.opacity = '1';
                this.reset();
            }, 3000);
        }, 1500);
    });
</script>
@endsection
