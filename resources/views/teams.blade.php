@extends('layouts.master')

@section('meta_title', 'Our Teams')
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
                                <h1 class="display-5 mb-3 animate__animated animate__fadeInDown"
                                    style="font-weight: 700;">
                                    QURBAN TRADER TEAM MEMBER</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->


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
@endsection