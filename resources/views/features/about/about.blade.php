@extends('layouts.app')

@section('title', 'About Us · BindRaft')

@section('content')

<!-- Hero Section -->
<section class="about-hero relative">
    <!-- Background Image with Overlay -->
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/river_2.jpg') }}" alt="River Flow" class="w-full h-full object-cover" />
        <div class="absolute inset-0 bg-gradient-to-br from-blue-900/90 via-cyan-800/85 to-blue-900/90"></div>
    </div>
    
    <div class="about-hero-content relative z-10">
        <div data-aos="fade-up" data-aos-duration="1000">
            <h1>Building the future of digital innovation</h1>
            <p>We're a team of passionate developers, designers, and strategists dedicated to transforming ideas into exceptional digital experiences.</p>
        </div>
    </div>
</section>

<!-- Content Section -->
<div class="about-page-wrapper">
    <div class="about-content-container">

        <!-- Mission, Vision, Approach -->
        <div class="about-section" data-aos="fade-up">
            <div class="values-grid">
                <div class="mission-card">
                    <div class="value-icon"><i class="fas fa-rocket"></i></div>
                    <h3>Our Mission</h3>
                    <p>To empower businesses with cutting-edge digital solutions that drive growth, efficiency, and innovation in an ever-evolving technological landscape.</p>
                </div>
                <div class="mission-card">
                    <div class="value-icon"><i class="fas fa-eye"></i></div>
                    <h3>Our Vision</h3>
                    <p>To be the trusted partner for companies seeking to transform their digital presence and leverage technology to achieve their strategic goals.</p>
                </div>
                <div class="mission-card">
                    <div class="value-icon"><i class="fas fa-cogs"></i></div>
                    <h3>Our Approach</h3>
                    <p>We combine technical excellence with creative thinking, delivering solutions that are not only functional but also beautiful and user-centric.</p>
                </div>
            </div>
        </div>

        <!-- Values Grid -->
        <div class="about-section" data-aos="fade-up">
            <h2 class="text-center mb-12">Our Core Values</h2>
            <div class="values-grid">
                <div class="value-card">
                    <div class="value-icon"><i class="fas fa-user-check"></i></div>
                    <h3>Client-Centric</h3>
                    <p>Your success is our success. We prioritize understanding your needs and delivering solutions that exceed expectations.</p>
                </div>
                <div class="value-card">
                    <div class="value-icon"><i class="fas fa-users"></i></div>
                    <h3>Collaboration</h3>
                    <p>We believe in transparent communication and working closely with our clients throughout the entire project lifecycle.</p>
                </div>
                <div class="value-card">
                    <div class="value-icon"><i class="fas fa-lightbulb"></i></div>
                    <h3>Innovation</h3>
                    <p>We stay ahead of technology trends and continuously explore new tools and methodologies to deliver cutting-edge solutions.</p>
                </div>
                <div class="value-card">
                    <div class="value-icon"><i class="fas fa-star"></i></div>
                    <h3>Excellence</h3>
                    <p>We maintain the highest standards in code quality, design, and project delivery, ensuring robust and scalable solutions.</p>
                </div>
                <div class="value-card">
                    <div class="value-icon"><i class="fas fa-shield-alt"></i></div>
                    <h3>Integrity</h3>
                    <p>We operate with honesty and transparency, building trust through ethical practices and reliable service.</p>
                </div>
                <div class="value-card">
                    <div class="value-icon"><i class="fas fa-chart-line"></i></div>
                    <h3>Growth Mindset</h3>
                    <p>We embrace challenges as opportunities to learn and improve, constantly evolving our skills and expertise.</p>
                </div>
            </div>
        </div>



    </div>
</div>

@endsection
