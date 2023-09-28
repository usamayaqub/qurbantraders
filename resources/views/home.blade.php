@extends('layouts.master')

@section('meta_title', '')
@section('meta_description', '')
@section('canonical',"")

@section('script_css')
<meta itemprop="image" content="">
<meta property="og:image" content="" />
<meta name="twitter:image" content="" />
@section('content')

<!-- ================ ANIMATION ON LOAD ============= -->
<div id="overlay1">
    <div id="status">
        <div id="status-overlay"></div>
    </div>
</div>
<div id="overlay2">
    <div id="status">
        <div id="status-overlay"></div>
    </div>
</div>
<!-- Carousel Start -->
<div class="container-fluid mb-3">
    <div class="row px-0">
        <div class="col-lg-12 px-0">
            <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#header-carousel" data-slide-to="1"></li>
                    <li data-target="#header-carousel" data-slide-to="2"></li>
                    <li data-target="#header-carousel" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item position-relative active" style="height: 450px;">
                        <img class="position-absolute w-100 h-100" src="{{asset('img/B4.png')}}"
                            style="object-fit: cover;">
                        <div
                            class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h1 class="display-4 text-white mb-3 animate_animated animate_fadeInDown">
                                    Fire Fighting Valves 
                                </h1>
                                <p class="mx-md-5 px-5 animate_animated animate_bounceIn">
                                    Critical lifesaving components ensuring swift control of fires, valves for firefighting deliver safety, reliability, and precision in emergency situations
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item position-relative" style="height: 450px;">
                        <img class="position-absolute w-100 h-100" src="{{asset('img/B1.png')}}"
                            style="object-fit: cover;">
                        <div
                            class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h1 class="display-4 text-white mb-3 animate_animated animate_fadeInDown">
                                    Pipe Line Fitting
                                </h1>
                                <p class="mx-md-5 px-5 animate_animated animate_bounceIn">
                                    The connecting components for main runs of pipe that the customer is transferring liquids or gases through. These include expansion bellows, sight glasses, valves, equal tee & elbows
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item position-relative" style="height: 450px;">
                        <img class="position-absolute w-100 h-100" src="{{asset('img/B2.png')}}"
                            style="object-fit: cover;">
                        <div
                            class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h1 class="display-4 text-white mb-3 animate_animated animate_fadeInDown">LPG Plant Fittings</h1>
                                <p class="mx-md-5 px-5 animate_animated animate_bounceIn">
                                    Precision-engineered valves for safe and efficient gas control, essential for the integrity and security of LPG facilities
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item position-relative" style="height: 450px;">
                        <img class="position-absolute w-100 h-100" src="{{asset('img/B3.png')}}"
                            style="object-fit: cover;">
                        <div
                            class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h1 class="display-4 text-white mb-3 animate_animated animate_fadeInDown">
                                    M.S. & S.S. Pipe Fittings
                                </h1>
                                <p class="mx-md-5 px-5 animate_animated animate_bounceIn">
                                    Versatile connectors that join pipes seamlessly, ensuring durability, reliability, and efficient fluid transfer across various applications.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->


<!-- Featured Start -->
<div class="container-fluid pt-5">
    <div class="row px-xl-5 pb-3">
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                <h1 class="fa fa-check text-primary m-0 mr-3"></h1>
                <h5 class="font-weight-semi-bold m-0">Quality Product</h5>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                <h1 class="fa fa-shipping-fast text-primary m-0 mr-2"></h1>
                <h5 class="font-weight-semi-bold m-0">Free Shipping</h5>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                <h1 class="fas fa-exchange-alt text-primary m-0 mr-3"></h1>
                <h5 class="font-weight-semi-bold m-0">14-Day Return</h5>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                <h1 class="fa fa-phone-volume text-primary m-0 mr-3"></h1>
                <h5 class="font-weight-semi-bold m-0">24/7 Support</h5>
            </div>
        </div>
    </div>
</div>
<!-- Featured End -->


<!-- Categories Start -->
<div class="container-fluid pt-5">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span
            class="bg-secondary pr-3">Categories</span></h2>
    <div class="row px-xl-5 pb-3">
        @if(isset($categories) && !empty($categories))
                    @foreach($categories as $c)
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <a class="text-decoration-none" href="">
                <div class="cat-item img-zoom d-flex align-items-center mb-4">
                    <div class="overflow-hidden" style="width: 100px; height: 100px;">
                        <img class="img-fluid" src="{{$c->image}}" alt="">
                    </div>
                    <div class="flex-fill pl-3">
                        <h6>{{$c->name}}</h6>
                        <small class="text-body">100 Products</small>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
        @endif
    </div>
</div>
<!-- Categories End -->


<!-- Products Start -->
<div class="container-fluid pt-5 pb-3">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4">
        <span class="bg-secondary pr-3">Featured Products</span>
    </h2>
    <div class="row px-xl-5">
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="{{asset('img/product-1.jpg')}}" alt="">
                </div>
                <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate stretched-link" href="">Product Name Goes Here</a>
                    <div class="d-flex align-items-center justify-content-center mt-2">
                        <h5>$123.00</h5><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                    </div>
                    <div class="d-flex align-items-center justify-content-center mb-1">
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small>(99)</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Products End -->


<!-- Offer Start -->
<div class="container-fluid pt-5 pb-3">
    <div class="row px-xl-5">
        <div class="col-md-6">
            <div class="product-offer mb-30" style="height: 300px;">
                <img class="img-fluid" src="{{asset('img/S1.webp')}}" alt="">
                <div class="offer-text">
                    <h3 class="text-white mb-3">Fire Fighting Valve</h3>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="product-offer mb-30" style="height: 300px;">
                <img class="img-fluid" src="{{asset('img/S2.webp')}}" alt="">
                <div class="offer-text">
                    <h3 class="text-white mb-3">MS S.S Pipe</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Offer End -->


<!-- Products Start -->
<div class="container-fluid pt-5 pb-3">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4">
        <span class="bg-secondary pr-3">Recent Products</span></h2>
    <div class="row px-xl-5">
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="{{asset('img/product-1.jpg')}}" alt="">
                </div>
                <div class="text-center py-4 px-3">
                    <a class="h6 text-decoration-none text-truncate stretched-link" href="">Product Name Goes Hered  oiadhad hoh oiu dAFID</a>
                    <div class="d-flex align-items-center justify-content-center mt-2">
                        <h5>$123.00</h5><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                    </div>
                    <div class="d-flex align-items-center justify-content-center mb-1">
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small>(99)</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Products End -->

@include('comman.why-choose-us')

<!-- Vendor Start -->
<div class="container-fluid py-5">
    <div class="row px-xl-5">
        <div class="col">
            <div class="owl-carousel vendor-carousel">
                <div class="bg-light p-4">
                    <img src="{{asset('img/vendor-1.jpg')}}" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="{{asset('img/vendor-2.jpg')}}" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="{{asset('img/vendor-3.jpg')}}" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="{{asset('img/vendor-4.jpg')}}" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="{{asset('img/vendor-5.jpg')}}" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="{{asset('img/vendor-6.jpg')}}" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="{{asset('img/vendor-7.jpg')}}" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="{{asset('img/vendor-8.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Vendor End -->
@endsection
