<!-- Footer Start -->
<div class="container-fluid text-secondary mt-5 pt-5" style="background-color:#000;">
    <div class="row px-xl-5 pt-5">
        <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
            <a href="{{route('get-home')}}" class="text-decoration-none">
                <span class="h1 text-uppercase text-primary bg-dark px-2">Qurban</span>
                <span class="h1 text-uppercase text-dark bg-primary px-2 ml-n1">Trader</span>
            </a>
            <p class="mb-4 mt-3">
                We deal in Imported and Stockit, M.S, S.S, Pipe Fitting, Valve Fire Fighting, LPG Plant Fitting, Grooved Fitting All
            </p>
            <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>99-Railway Road, Near GCT
                College Lahore</p>
            <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>info@qurban-traders.com</p>
            <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>042-37673222</p>
        </div>
        <div class="col-lg-8 col-md-12">
            <div class="row">
                <div class="col-md-4 mb-5">
                    <h5 class="text-secondary text-uppercase mb-4">Quick Links</h5>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-secondary mb-2" href="{{route('get-home')}}"><i class="fa fa-angle-right mr-2"></i>Home</a>
                        <a class="text-secondary mb-2" href="{{route('products')}}"><i class="fa fa-angle-right mr-2"></i>Our Products</a>
                        <a class="text-secondary mb-2" href="{{route('about')}}"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                        <a class="text-secondary mb-2" href="{{route('teams')}}"><i class="fa fa-angle-right mr-2"></i>Our Teams</a>
                        <a class="text-secondary mb-2" href="{{route('contact')}}"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                        <a class="text-secondary" href="{{route('get-privacy')}}"><i class="fa fa-angle-right mr-2"></i>Privacy Policy</a>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <h5 class="text-secondary text-uppercase mb-4">Categories </h5>
                    <div class="d-flex flex-column justify-content-start">
                    @if(isset($categories) && !empty($categories))
                    @foreach($categories->take(6) as $c)
                        <a class="text-secondary mb-2" href="{{route('products',['category' => $c->name])}}"><i class="fa fa-angle-right mr-2"></i>{{$c->name}}</a>
                        @endforeach
                        @endif
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <h5 class="text-secondary text-uppercase mb-4">Get In Touch</h5>
                    <p class="mb-2 d-flex"><i class="fa fa-map-marker-alt text-primary mr-3 mt-1"></i>99-Railway Road, Near GCT College Lahore</p>
                    <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>info@qurban-traders.com</p>
                    <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>042-37673222</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row border-top mx-xl-5 py-4" style="border-color: rgba(256, 256, 256, .1) !important;">
        <div class="col-md-12 px-xl-0">
            <p class="mb-md-0 text-center text-md-left text-secondary">
                &copy; <a class="text-primary" href="#">qurban-traders.com</a>. All Rights Reserved.
            </p>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>