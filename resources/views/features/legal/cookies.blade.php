@extends('layouts.app')

@section('title', 'Cookie Policy · BindRaft')

@section('content')

<div class="legal-page-wrapper">
    <div class="legal-container">
        <!-- Header -->
        <div class="legal-header" data-aos="fade-up">
            <h1>Cookie Policy</h1>
            <p>This policy explains how we use cookies and similar technologies to recognize you when you visit our website.</p>
        </div>

        <!-- Content -->
        <div class="legal-content" data-aos="fade-up" data-aos-delay="100">
            <p class="last-updated">Last Updated: {{ date('F d, Y') }}</p>

            <h2>1. What are Cookies?</h2>
            <p>Cookies are small data files that are placed on your computer or mobile device when you visit a website. Cookies are widely used by website owners in order to make their websites work, or to work more efficiently, as well as to provide reporting information.</p>

            <h2>2. Why do we use Cookies?</h2>
            <p>We use first-party and third-party cookies for several reasons. Some cookies are required for technical reasons in order for our website to operate, and we refer to these as "essential" or "strictly necessary" cookies. Other cookies also enable us to track and target the interests of our users to enhance the experience on our Online Properties.</p>

            <h2>3. Types of Cookies We Use</h2>
            <ul>
                <li><strong>Essential Cookies:</strong> These cookies are strictly necessary to provide you with services available through our Website.</li>
                <li><strong>Performance and Functionality Cookies:</strong> These cookies are used to enhance the performance and functionality of our Website but are non-essential to their use.</li>
                <li><strong>Analytics and Customization Cookies:</strong> These cookies collect information that is used either in aggregate form to help us understand how our Website is being used or how effective our marketing campaigns are.</li>
            </ul>

            <h2>4. How can I control Cookies?</h2>
            <p>You have the right to decide whether to accept or reject cookies. You can set or amend your web browser controls to accept or refuse cookies. If you choose to reject cookies, you may still use our website though your access to some functionality and areas of our website may be restricted.</p>

            <h2>5. Changes to this Cookie Policy</h2>
            <p>We may update this Cookie Policy from time to time in order to reflect, for example, changes to the cookies we use or for other operational, legal or regulatory reasons. Please therefore re-visit this Cookie Policy regularly to stay informed about our use of cookies and related technologies.</p>

            <h2>6. Contact Us</h2>
            <p>If you have any questions about our use of cookies or other technologies, please email us at <a href="mailto:contact@bindraft.com">contact@bindraft.com</a>.</p>
        </div>
    </div>
</div>

@endsection
