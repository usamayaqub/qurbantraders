@extends('layouts.master')

@section('meta_title', 'Explore Our Extensive Range of Industrial Products | Qurban Traders')
@section('meta_description', 'Browse our catalog of high-quality imported and stocked products, including M.S, S.S, pipe fittings, valves, fire fighting equipment, LPG plant fittings, and grooved fittings.')
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
                <span class="breadcrumb-item active">All Products</span>
            </nav>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->


<!-- Shop Start -->
<div class="container-fluid">
    <div class="row px-xl-5">
        <!-- Shop Product Start -->
        <div class="col-lg-12">
            <div class="row pb-3">
            @if(isset($products) && !empty($products) && count($products) > 0)
                @foreach($products as $p)
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <div class="product-item bg-light mb-4">
                        <div class="product-img position-relative overflow-hidden">
                        @if(!empty($p->images()))
                    <img class="img-fluid w-100" src="{{$p->images()->first()->url}}" alt="{{$p->name}}">
                        @endif
                        </div>
                        <div class="text-center py-4 px-3">
                            <a class="h6 text-decoration-none text-truncate stretched-link" href="{{route('products-detail',['slug' => $p->slug])}}">{{$p->name}}</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                            @if(!empty($p->discounted_price))
                            <h5>Rs.{{$p->price}}</h5><h6 class="text-muted ml-2"><del>Rs.{{$p->discounted_price}}</del></h6>
                            @else
                            <h5>Rs.{{$p->price}}</h5>
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
                </div>
                @endforeach
                @else
                <div class="col-lg-12">
                    <h5 class="text-center pt-5">No Products Found</h5>
                </div>
                @endif
                <div class="col-12">
                    <nav>
                        <ul class="pagination justify-content-center">
                            @if ($products->lastPage() > 1)
                                <li class="page-item {{ $products->onFirstPage() ? 'disabled' : '' }}">
                                    <a class="page-link" href="{{ $products->previousPageUrl() }}">Previous</a>
                                </li>

                                @for ($i = 1; $i <= $products->lastPage(); $i++)
                                    <li class="page-item {{ $i == $products->currentPage() ? 'active' : '' }}">
                                        <a class="page-link" href="{{ $products->url($i) }}">{{ $i }}</a>
                                    </li>
                                @endfor

                                <li class="page-item {{ $products->hasMorePages() ? '' : 'disabled' }}">
                                    <a class="page-link" href="{{ $products->nextPageUrl() }}">Next</a>
                                </li>
                            @endif
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection