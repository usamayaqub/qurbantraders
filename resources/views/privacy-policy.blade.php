@extends('layouts.master')

@section('meta_title', 'Contact Us')
@section('meta_description', '')
@section('canonical',"")

@section('script_css')
<meta itemprop="image" content="">
<meta property="og:image" content="" />
<meta name="twitter:image" content="" />
@section('content')
<!-- Carousel Start -->
<div class="container-fluid mb-3">
    <div class="row px-0">
        <div class="col-lg-12 px-0">
            <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item position-relative active" style="height: 300px;">
                        <div class="bg_cover carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h1 class="display-5 mb-3 animate__animated animate__fadeInDown" style="font-weight: 700;">
                                    Privacy Policy</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->
<div class="privacy-policy pt-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div>
                    <h2>Information We Collect</h2>
                    <p>We may collect various types of information, including but not limited to:</p>
                    <ul>
                        <li>Contact Information: Such as your name, email address, phone number, and mailing address, which you may provide when contacting us or placing an order.</li>
                        <li>Billing Information: Including payment details and billing addresses for processing transactions.</li>
                        <li>Usage Data: Information about how you interact with our website and services, such as IP addresses, browser type, operating system, and the pages you visit.</li>
                    </ul>
                </div>
                
                <div>
                    <h2>How We Use Your Information</h2>
                    <p>We use your personal information for the following purposes:</p>
                    <ul>
                        <li>Providing Services: To fulfill your orders, deliver products, and provide customer support.</li>
                        <li>Communication: To respond to your inquiries, provide updates about your orders, and send you relevant information.</li>
                        <li>Payment Processing: To process payments and prevent fraudulent transactions.</li>
                        <li>Improvement: To analyze usage data and improve our website and services.</li>
                        <li>Legal Compliance: To comply with legal obligations and protect our rights and the rights of others.</li>
                    </ul>
                </div>

                <div>
                    <h2>Disclosure of Your Information</h2>
                    <p>We do not sell or rent your personal information to third parties. However, we may share your information with:</p>
                    <ul>
                        <li>Service Providers: Third-party service providers who assist us in conducting our business operations, such as payment processors and shipping companies.</li>
                        <li>Legal Requirements: When required by law or to protect our rights or the rights of others, we may disclose your information.</li>
                    </ul>
                </div>

                <div>
                    <h2>Security Measures</h2>
                    <p>We implement reasonable security measures to protect your personal information from unauthorized access and disclosure. However, please be aware that no data transmission over the internet is entirely secure, and we cannot guarantee the security of your data.</p>
                </div>

                <div>
                    <h2>Your Choices</h2>
                    <p>You have the right to access, correct, or delete your personal information. You can also opt out of receiving promotional communications from us by following the unsubscribe instructions provided in our emails.</p>
                </div>

                <div>
                    <h2>Changes to this Privacy Policy</h2>
                    <p>We may update this Privacy Policy from time to time to reflect changes in our practices or for other operational, legal, or regulatory reasons. We will notify you of any significant changes by posting the updated policy on our website.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Contact End -->
@endsection