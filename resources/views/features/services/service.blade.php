@extends('layouts.app')

@section('title', 'Our Services · Digital Solutions')

@section('content')

<!-- Hero Section (Full 1920x1080 style) -->
<section class="service-hero">
    <!-- Animated Background Overlay (Optional particles or waves can be added here) -->
    <div class="service-hero-overlay"></div>
    
    <div class="service-hero-content">
        <div data-aos="fade-up" data-aos-duration="1000">
            <h1>Our Services</h1>
            <p>Comprehensive software solutions designed to drive your business forward. From concept to deployment, we navigate every aspect of your digital journey.</p>
        </div>
    </div>
</section>

<!-- Content Section (Overlapping Header) -->
<div class="services-page-wrapper">
    <div class="services-content-container">
        <!-- grid of cards -->
        <div class="services-grid">
            <!-- ENTERPRISE & BACKEND block -->
            <div class="service-card" data-aos="fade-up" data-aos-delay="100">
                <div class="card-title">Custom Software Development</div>
                <ul class="offer-list">
                    <li>Enterprise application development</li>
                    <li>Legacy system modernization</li>
                    <li>API development and integration</li>
                    <li>Microservices architecture</li>
                    <li>Scalable cloud solutions</li>
                    <li>Custom CRM and ERP systems</li>
                </ul>
                <div class="service-separator">
                    <ul class="offer-list">
                        <li>RESTful & GraphQL APIs</li>
                        <li>Database design & optimization</li>
                        <li>Cloud infrastructure (AWS, Azure, GCP)</li>
                    </ul>
                </div>
            </div>

            <!-- MOBILE apps card -->
            <div class="service-card" data-aos="fade-up" data-aos-delay="200">
                <div class="card-title">Mobile apps</div>
                <ul class="offer-list">
                    <li>iOS and Android native apps</li>
                    <li>Cross-platform (React Native)</li>
                    <li>Mobile UI/UX design</li>
                    <li>App store optimization</li>
                    <li>Push notifications & real-time sync</li>
                    <li>Offline-first capabilities</li>
                </ul>
            </div>

            <!-- AI & INTELLIGENCE card -->
            <div class="service-card" data-aos="fade-up" data-aos-delay="300">
                <div class="card-title">AI Agent Development</div>
                <ul class="offer-list">
                    <li>Custom AI chatbots and assistants</li>
                    <li>Machine learning model development</li>
                    <li>Natural language processing</li>
                    <li>Computer vision solutions</li>
                    <li>Predictive analytics</li>
                    <li>AI-powered automation</li>
                </ul>
            </div>

            <!-- FRONTEND excellence -->
            <div class="service-card" data-aos="fade-up" data-aos-delay="400">
                <div class="card-title">Frontend excellence</div>
                <ul class="offer-list">
                    <li>React, Vue, Angular development</li>
                    <li>Responsive web design</li>
                    <li>Progressive Web Apps (PWA)</li>
                    <li>UI/UX design and prototyping</li>
                    <li>Performance optimization</li>
                    <li>Accessibility compliance (WCAG)</li>
                </ul>
            </div>

            <!-- BACKEND & DEVOPS dense -->
            <div class="service-card" data-aos="fade-up" data-aos-delay="500">
                <div class="card-title">Backend & DevOps</div>
                <ul class="offer-list">
                    <li>RESTful and GraphQL APIs</li>
                    <li>Database design & optimization</li>
                    <li>Cloud infrastructure (AWS, Azure, GCP)</li>
                    <li>DevOps and CI/CD pipelines</li>
                    <li>Security and authentication</li>
                    <li>Performance optimization</li>
                </ul>
            </div>

            <!-- DIGITAL CONSULTANCY -->
            <div class="service-card" data-aos="fade-up" data-aos-delay="600">
                <div class="card-title">Digital Consultancy</div>
                <ul class="offer-list">
                    <li>Technology strategy & roadmapping</li>
                    <li>Architecture design and review</li>
                    <li>Code audits and optimization</li>
                    <li>Team training and mentorship</li>
                    <li>Agile transformation</li>
                    <li>Digital transformation planning</li>
                </ul>
            </div>
        </div> <!-- end grid -->



    </div> <!-- end container -->
</div>
@endsection
