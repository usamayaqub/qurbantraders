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
                                    Search Result</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->

<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <h2 class="mb-3 text-center">Search For Products</h2>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search for products" aria-label="Search for products" aria-describedby="button-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-dark text-primary" type="submit" id="button-addon2"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row px-xl-5 pt-4">
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
</section>
@endsection