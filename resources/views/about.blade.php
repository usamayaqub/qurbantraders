@extends('layouts.master')

@section('meta_title', 'Learn About Our Commitment to Quality and Service | Qurban Traders')
@section('meta_description', 'Discover our companys story, values, and dedication to providing top-notch M.S, S.S, and other industrial fittings. Get to know the team behind our success.')
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

@include('comman.why-choose-us')
@endsection