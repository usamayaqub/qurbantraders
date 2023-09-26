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
                        <h2>We Are The Leader In <br> The Interiores</h2>
                    </div>
                    <div class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                        took a galley of type and scrambled it to make a type specimen book. It has survived not only
                        five centuries</div>
                    <div class="email">Request Quote: <span class="theme_color">freequote@gmail.com</span></div>
                    <a href="about.html" class="theme-btn btn-style-three">Read More</a>
                </div>
            </div>
            <!--Image Column-->
            <div class="image-column col-md-6 col-sm-12 col-xs-12">
                <div class="inner-column " data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="image">
                        <img src="https://i.ibb.co/vQbkKj7/about.jpg" alt="">
                        <div class="overlay-box">
                            <div class="year-box"><span class="number">5</span>Years <br> Experience <br> Working</div>
                        </div>
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
                <p>When you choose us, you'll feel the benefit of 10 years' experience of Web Development. Because we
                    know the digital world and we know that how to handle it. With working knowledge of online, SEO and
                    social media.</p>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="item"> 
                    <span class="icon feature_box_col_one bg-primary">
                        <i class="fa fa-globe"></i>
                    </span>
                    <h6>Modern Design</h6>
                    <p>We use latest technology for the latest world because we know the demand of peoples.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="item"> <span class="icon feature_box_col_two bg-primary"><i class="fa fa-anchor"></i></span>
                    <h6>Creative Design</h6>
                    <p>We are always creative and and always lisen our costomers and we mix these two things and make
                        beast design.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="item"> <span class="icon feature_box_col_three bg-primary"><i class="fa fa-hourglass-half"></i></span>
                    <h6>24 x 7 User Support</h6>
                    <p>If our customer has any problem and any query we are always happy to help then.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="item"> <span class="icon feature_box_col_four bg-primary"><i class="fa fa-database"></i></span>
                    <h6>Business Growth</h6>
                    <p>Everyone wants to live on top of the mountain, but all the happiness and growth occurs while
                        you're climbing it</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="item"> <span class="icon feature_box_col_five bg-primary"><i class="fa fa-upload"></i></span>
                    <h6>Market Strategy</h6>
                    <p>Holding back technology to preserve broken business models is like allowing blacksmiths to veto
                        the internal combustion engine in order to protect their horseshoes.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="item"> <span class="icon feature_box_col_six bg-primary"><i class="fa fa-camera"></i></span>
                    <h6>Affordable cost</h6>
                    <p>Love is a special word, and I use it only when I mean it. You say the word too much and it
                        becomes cheap.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection