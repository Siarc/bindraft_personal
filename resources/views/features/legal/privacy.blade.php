@extends('layouts.app')

@section('title', 'Privacy Policy · BindRaft')

@section('content')

<div class="legal-page-wrapper">
    <div class="legal-container">
        <!-- Header -->
        <div class="legal-header" data-aos="fade-up">
            <h1>Privacy Policy</h1>
            <p>Your privacy is important to us. This policy explains how we collect and use your data.</p>
        </div>

        <!-- Content -->
        <div class="legal-content" data-aos="fade-up" data-aos-delay="100">
            <p class="last-updated">Last Updated: {{ date('F d, Y') }}</p>

            <h2>1. Introduction</h2>
            <p>At BindRaft, we are committed to protecting your privacy and ensuring the security of your personal information. This Privacy Policy outlines how we collect, use, disclose, and safeguard your data when you visit our website or use our services.</p>

            <h2>2. Information We Collect</h2>
            <p>We may collect personal information that you voluntarily provide to us when you express an interest in obtaining information about us or our products and services, when you participate in activities on the Website, or otherwise when you contact us.</p>
            <ul>
                <li><strong>Personal Data:</strong> Name, email address, phone number, and other contact details.</li>
                <li><strong>Usage Data:</strong> Information about your device, browser, and how you interact with our website (e.g., IP address, pages visited).</li>
            </ul>

            <h2>3. How We Use Your Information</h2>
            <p>We use the information we collect for various purposes, including:</p>
            <ul>
                <li>To provide, operate, and maintain our website and services.</li>
                <li>To improve, personalize, and expand our website.</li>
                <li>To understand and analyze how you use our website.</li>
                <li>To communicate with you, including for customer service, updates, and marketing purposes.</li>
                <li>To find and prevent fraud.</li>
            </ul>

            <h2>4. Sharing Your Information</h2>
            <p>We do not sell, trade, or otherwise transfer to outside parties your Personally Identifiable Information unless we provide users with advance notice. This does not include website hosting partners and other parties who assist us in operating our website, conducting our business, or serving our users, so long as those parties agree to keep this information confidential.</p>

            <h2>5. Data Security</h2>
            <p>We implement appropriate technical and organizational security measures to protect the security of your personal information. However, please be aware that no electronic transmission over the internet or information storage technology can be guaranteed to be 100% secure.</p>

            <h2>6. Your Rights</h2>
            <p>Depending on your location, you may have certain rights regarding your personal information, such as the right to access, correct, delete, or restrict the use of your data. To exercise these rights, please contact us at <a href="mailto:contact@bindraft.com">contact@bindraft.com</a>.</p>

            <h2>7. Changes to This Policy</h2>
            <p>We may update this Privacy Policy from time to time. The updated version will be indicated by an updated "Revised" date and will be effective as soon as it is accessible.</p>

            <h2>8. Contact Us</h2>
            <p>If you have any questions about this Privacy Policy, please contact us:</p>
            <ul>
                <li>Email: <a href="mailto:contact@bindraft.com">contact@bindraft.com</a></li>
                <li>Address: Road-10, House-31, Sector-9, Uttara, Dhaka 1230</li>
            </ul>
        </div>
    </div>
</div>

@endsection
