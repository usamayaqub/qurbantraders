@extends('layouts.master')

@section('meta_title', 'About')
@section('meta_description', '')
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
                <a class="breadcrumb-item text-dark" href="{{route('get-home')}}">Home</a>
                <a class="breadcrumb-item text-dark" href="{{route('get-home')}}">All Products</a>
                <span class="breadcrumb-item active">{{$product->name}}</span>
            </nav>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->


<!-- Shop Detail Start -->
<div class="container-fluid pb-5">
    <div class="row px-xl-5">
        <div class="col-lg-5 mb-30">
            <div id="product-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner bg-light">
                    <div class="carousel-item active">
                    @if(!empty($product->images()))
                    <div class="single-product-image">
                        {{-- <img class="img-fluid w-100" src="{{$product->images()->first()->url}}" alt="{{$product->name}}"> --}}
                        <img class="drift-demo-trigger" data-zoom="{{$product->images()->first()->url}}" src="{{$product->images()->first()->url}}">
                    </div>
                    @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-7 h-auto mb-30">
            <div class="column">
                <div class="details">  
                </div>
            </div>
            <div class="h-100 bg-light p-30">
                <h3>{{$product->name}}</h3>
                <div class="d-flex mb-3">
                    <div class="text-primary mr-2">
                        <small class="fas fa-star"></small>
                        <small class="fas fa-star"></small>
                        <small class="fas fa-star"></small>
                        <small class="fas fa-star-half-alt"></small>
                        <small class="far fa-star"></small>
                    </div>
                    <small class="pt-1">(99 Reviews)</small>
                </div>
                <div class="d-flex align-items-center">
                    @if(!empty($product->discounted_price))
                    <h5>Rs.{{$product->price}}</h5><h6 class="text-muted ml-2"><del>Rs.{{$product->discounted_price}}</del></h6>
                    @else
                    <h5 class="font-weight-semi-bold mb-4">Rs.{{$product->price}}</h5>
                    @endif
                </div>
                <p class="mb-4">{{$product->short_description}}</p>
                <h4 class="mb-3">Product Description</h4>
                <p>{!! $product->description !!}
                </p>
            </div>
        </div>
    </div>
    <div class="row px-xl-5">
        <div class="col">
            <div class="bg-light p-30">
                <div class="tab-content">
                    <div class="col-md-12">
                        <h4 class="mb-4">Make a enquiry of This Product</h4>
                        <form action="{{route('contact.send')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name">Your Name *</label>
                                <input type="text" class="form-control" id="name" name="name">
                                @error('name')
                                <p class="help-block text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">Your Email *</label>
                                <input type="email" class="form-control" id="email" name="email">
                                @error('email')
                                <p class="help-block text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">Your Mobile Number *</label>
                                <input type="number" class="form-control" id="email" name="mobile_number">
                                @error('mobile_number')
                                <p class="help-block text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">Product Name </label>
                                <input type="text" class="form-control" id="product-name" name="product_name" readonly value="{{$product->name}}">
                                <input type="hidden" name="product_id" value="{{$product->id}}">
                                
                            </div>
                            <div class="form-group">
                                <label for="message">Your Message *</label>
                                <textarea id="message" cols="30" rows="5" class="form-control" name="message"></textarea>
                                @error('message')
                                <p class="help-block text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group mb-0">
                                <button type="submit" value="Send" class="btn btn-primary px-3">Send Inquiry</button>
                            </div>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Shop Detail End -->
<div class="loader-container">
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
</div>

<!-- Products Start -->
<div class="container-fluid py-5">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">You
            May Also Like</span></h2>
    <div class="row px-xl-5">
        <div class="col">
            <div class="owl-carousel related-carousel">
            @if(isset($similarProducts) && !empty($similarProducts))
            @foreach($similarProducts as $sp)
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                    @if(!empty($sp->images()))
                    <img class="img-fluid w-100" src="{{$sp->images()->first()->url}}" alt="{{$sp->name}}">
                    @endif
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate stretched-link" href="{{route('products-detail',['slug' => $sp->slug])}}">{{$sp->name}}</a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                        @if(!empty($sp->discounted_price))
                        <h5>Rs.{{$sp->discounted_price}}</h5><h6 class="text-muted ml-2"><del>Rs.{{$sp->price}}</del></h6>
                        @else
                        <h5>Rs.{{$sp->price}}</h5>
                        @endif
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
                @endforeach
                @endif
            </div>
        </div>
    </div>
</div>
<!-- Products End -->
@endsection