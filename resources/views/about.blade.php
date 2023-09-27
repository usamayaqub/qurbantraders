@extends('layouts.master')

@section('meta_title', 'About')
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
                                    ABOUT US</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->

<section class="about-section">
    <div class="container">
        <div class="row clearfix">
            <!--Content Column-->
            <div class="content-column col-md-6 col-sm-12 col-xs-12">
                <div class="inner-column">
                    <div class="sec-title">
                        <div class="title">About Us</div>
                        <h2>Welcome to Qurban Trader<br> Your Trusted Partner in Quality Pipe Fitting Solutions!</h2>
                    </div>
                    <div class="text">
                        At Qurban Trader, we take pride in our commitment to providing top-notch pipe fitting solutions to meet your industrial needs. With a rich history and an unwavering dedication to excellence, we have become a leading name in the industry.
                    </div>
                    <a href="{{route('contact')}}" class="theme-btn btn-style-three">Contact Us</a>
                </div>
            </div>
            <!--Image Column-->
            <div class="image-column col-md-6 col-sm-12 col-xs-12">
                <div class="inner-column " data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="image">
                        <img src="{{asset('img/reading-instruction.webp')}}" alt="">
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<div class="container-fluid pt-5 pb-3">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4">
        <span class="bg-secondary pr-3">
            Our Team Members
        </span>
    </h2>
    <div class="row px-xl-5">
        <div class="owl-carousel related-carousel">
            <div class="">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{asset('img/p1.webp')}}" alt="">
                    </div>
                    <div class="text-left py-4 px-3">
                        <p class="h6 text-decoration-none text-truncate" href="">Muhammad Danish</p>
                        <h5>Manager</h5>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{asset('img/p1.webp')}}" alt="">
                    </div>
                    <div class="text-left py-4 px-3">
                        <p class="h6 text-decoration-none text-truncate" href="">Muhammad Danish</p>
                        <h5>Manager</h5>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{asset('img/p1.webp')}}" alt="">
                    </div>
                    <div class="text-left py-4 px-3">
                        <p class="h6 text-decoration-none text-truncate" href="">Muhammad Danish</p>
                        <h5>Manager</h5>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{asset('img/p1.webp')}}" alt="">
                    </div>
                    <div class="text-left py-4 px-3">
                        <p class="h6 text-decoration-none text-truncate" href="">Muhammad Danish</p>
                        <h5>Manager</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="feat bg-gray pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="section-head col-sm-12">
                <h4><span>Why Choose</span> Us?</h4>
                <p>
                    At Qurban Trader, we offer a comprehensive range of products and services to cater to a wide spectrum of requirements:
                </p>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="item"> 
                    <span class="icon feature_box_col_one bg-primary">
                        <i class="fa fa-globe"></i>
                    </span>
                    <h6>Quality Assurance   </h6>
                    <p>We are committed to delivering products that meet stringent quality standards, ensuring your projects are built to last.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="item"> <span class="icon feature_box_col_two bg-primary"><i class="fa fa-anchor"></i></span>
                    <h6>Customer-Centric Approach</h6>
                    <p>Our dedicated team is always ready to assist you in finding the right solutions for your specific needs.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="item"> <span class="icon feature_box_col_three bg-primary"><i class="fa fa-hourglass-half"></i></span>
                    <h6>Competitive Pricing</h6>
                    <p>We offer competitive prices without compromising on product quality, helping you stay within budget.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="item"> <span class="icon feature_box_col_four bg-primary"><i class="fa fa-database"></i></span>
                    <h6>Timely Delivery</h6>
                    <p>We understand the importance of timely project completion. We strive to deliver your orders promptly, minimizing downtime</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="item"> <span class="icon feature_box_col_five bg-primary"><i class="fa fa-upload"></i></span>
                    <h6>Customization and Flexibility</h6>
                    <p>we understand that each project is unique, and one size doesn't fit all. We offer customization options to tailor our products and services to your specific requirements</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="item"> <span class="icon feature_box_col_six bg-primary"><i class="fa fa-camera"></i></span>
                    <h6>Technical Expertise and Support</h6>
                    <p>Our team comprises experts with in-depth technical knowledge and industry experience. We provide not only products but also valuable guidance and technical support.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@include('comman.why-choose-us')
@endsection