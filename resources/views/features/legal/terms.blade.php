@extends('layouts.app')

@section('title', 'Terms of Use · BindRaft')

@section('content')

<div class="legal-page-wrapper">
    <div class="legal-container">
        <!-- Header -->
        <div class="legal-header" data-aos="fade-up">
            <h1>Terms of Use</h1>
            <p>Please read these terms carefully before using our website or services.</p>
        </div>

        <!-- Content -->
        <div class="legal-content" data-aos="fade-up" data-aos-delay="100">
            <p class="last-updated">Last Updated: {{ date('F d, Y') }}</p>

            <h2>1. Acceptance of Terms</h2>
            <p>By accessing or using the BindRaft website ("Site") and our services, you agree to be bound by these Terms of Use ("Terms"). If you do not agree to these Terms, please do not use our Site or services.</p>

            <h2>2. Use of License</h2>
            <p>Permission is granted to temporarily download one copy of the materials (information or software) on BindRaft's website for personal, non-commercial transitory viewing only. This is the grant of a license, not a transfer of title, and under this license you may not:</p>
            <ul>
                <li>Modify or copy the materials;</li>
                <li>Use the materials for any commercial purpose, or for any public display (commercial or non-commercial);</li>
                <li>Attempt to decompile or reverse engineer any software contained on BindRaft's website;</li>
                <li>Remove any copyright or other proprietary notations from the materials; or</li>
                <li>Transfer the materials to another person or "mirror" the materials on any other server.</li>
            </ul>
            <p>This license shall automatically terminate if you violate any of these restrictions and may be terminated by BindRaft at any time.</p>

            <h2>3. Intellectual Property</h2>
            <p>The Service and its original content, features, and functionality are and will remain the exclusive property of BindRaft and its licensors. Our trademarks and trade dress may not be used in connection with any product or service without the prior written consent of BindRaft.</p>

            <h2>4. User Content</h2>
            <p>Our Service may allow you to post, link, store, share and otherwise make available certain information, text, graphics, videos, or other material ("Content"). You are responsible for the Content that you post to the Service, including its legality, reliability, and appropriateness.</p>

            <h2>5. Limitation of Liability</h2>
            <p>In no event shall BindRaft, nor its directors, employees, partners, agents, suppliers, or affiliates, be liable for any indirect, incidental, special, consequential or punitive damages, including without limitation, loss of profits, data, use, goodwill, or other intangible losses, resulting from (i) your access to or use of or inability to access or use the Service; (ii) any conduct or content of any third party on the Service; (iii) any content obtained from the Service; and (iv) unauthorized access, use or alteration of your transmissions or content, whether based on warranty, contract, tort (including negligence) or any other legal theory, whether or not we have been informed of the possibility of such damage, and even if a remedy set forth herein is found to have failed of its essential purpose.</p>

            <h2>6. Disclaimer</h2>
            <p>The materials on BindRaft's website are provided on an 'as is' basis. BindRaft makes no warranties, expressed or implied, and hereby disclaims and negates all other warranties including, without limitation, implied warranties or conditions of merchantability, fitness for a particular purpose, or non-infringement of intellectual property or other violation of rights.</p>

            <h2>7. Governing Law</h2>
            <p>These Terms shall be governed and construed in accordance with the laws of Bangladesh, without regard to its conflict of law provisions.</p>

            <h2>8. Changes</h2>
            <p>We reserve the right, at our sole discretion, to modify or replace these Terms at any time. If a revision is material we will try to provide at least 30 days notice prior to any new terms taking effect. What constitutes a material change will be determined at our sole discretion.</p>

            <h2>9. Contact Us</h2>
            <p>If you have any questions about these Terms, please contact us at <a href="mailto:contact@bindraft.com">contact@bindraft.com</a>.</p>
        </div>
    </div>
</div>

@endsection
