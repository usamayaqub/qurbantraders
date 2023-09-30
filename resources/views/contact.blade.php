@extends('layouts.master')

@section('meta_title', 'Get in Touch with Us for All Your Industrial Needs | Qurban Traders')
@section('meta_description', 'Contact us today for inquiries, quotes, or assistance with your industrial requirements.
We are here to help with M.S, S.S, pipe fittings, valves, and more.')
@section('canonical',"")

@section('script_css')
<meta itemprop="image" content="">
<meta property="og:image" content="" />
<meta name="twitter:image" content="" />
@section('content')
<!-- Breadcrumb Start -->
<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-12">
            <nav class="breadcrumb bg-light mb-30">
                <a class="breadcrumb-item text-dark" href="#">Home</a>
                <span class="breadcrumb-item active">Contact</span>
            </nav>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->


<!-- Contact Start -->
<div class="container-fluid">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4">
        <span class="bg-secondary pr-3">Contact Us</span>
    </h2>
    <div class="row px-xl-5">
        <div class="col-lg-6 mb-5">
            <div class="contact-form bg-light p-30">
                <div id="success"></div>
                <form name="sentMessage" id="contactForm" novalidate="novalidate" action="{{route('contact.send')}}"
                    method="POST">
                    @csrf
                    <div class="control-group mb-3">
                        <input type="text" class="form-control" id="name" placeholder="Your Name" required="required"
                            data-validation-required-message="Please enter your name" name="name" />
                        @error('name')
                        <p class="help-block text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="control-group mb-3">
                        <input type="email" class="form-control" id="email" placeholder="Your Email" required="required"
                            data-validation-required-message="Please enter your email" name="email" />
                        @error('email')
                        <p class="help-block text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="control-group mb-3">
                        <input type="number" class="form-control" id="email" placeholder="Your Mobile Number"
                            required="required" data-validation-required-message="Please enter your email"
                            name="mobile_number" />
                        @error('mobile_number')
                        <p class="help-block text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="control-group mb-3">
                        <input type="text" class="form-control" id="subject" placeholder="Subject" required="required"
                            data-validation-required-message="Please enter a subject" name="title" />
                        <p class="help-block text-danger"></p>
                        @error('title')
                        <p class="help-block text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="control-group mb-3">
                        <textarea class="form-control" rows="8" id="message" placeholder="Message" required="required"
                            data-validation-required-message="Please enter your message" name="message"></textarea>
                        @error('message')
                        <p class="help-block text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <div class="g-recaptcha" data-sitekey="{{ env('NOCAPTCHA_SITEKEY') }}"></div>
                        <div class="recaptcha-error" style="color: red;"></div>
                    </div>
                    <div>
                        <button class="btn btn-primary py-2 px-4" type="submit" id="submit-button">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-lg-6 mb-5">
            <div class="bg-light p-30 mb-30">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3399.1004762011!2d74.32787617514623!3d31.576292444377778!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39191b469136eca1%3A0x6dc67e6ec39646d4!2s99%20Railway%20Rd%2C%20Naulakha%2C%20Lahore%2C%20Punjab%2054000%2C%20Pakistan!5e0!3m2!1sen!2s!4v1695758524542!5m2!1sen!2s"
                    width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
            <div class="bg-light p-30 mb-3">
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>99-Railway Road, Near GCT
                    College Lahore</p>
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>info@qurban-traders.com</p>
                <p class="mb-2"><i class="fa fa-phone-alt text-primary mr-3"></i>+042-37673222</p>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->

<script src="https://www.google.com/recaptcha/api.js"></script>
    <script>
    document.addEventListener("DOMContentLoaded", function () {
        var recaptcha = document.querySelector(".g-recaptcha");

        var submitButton = document.querySelector("#submit-button");

        submitButton.addEventListener("click", function (event) {
            event.preventDefault(); 

            // Check if reCAPTCHA is checked
            if (grecaptcha.getResponse().length === 0) {
                // If reCAPTCHA is not checked, display an error message
                var recaptchaError = document.querySelector(".recaptcha-error");
                recaptchaError.textContent = "Please complete the reCAPTCHA.";
            } else {
                // If reCAPTCHA is checked, submit the form
                document.querySelector("#contact-form").submit();
            }
        });
    });
</script> 
@endsection