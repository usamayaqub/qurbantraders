<div class="container-fluid">
    <div class="row bg-secondary py-1 px-xl-5">
        <div class="col-lg-6 d-none d-lg-block">
            <div class="d-inline-flex align-items-center h-100">
                <a class="text-body mr-3" href="{{route('about')}}">About</a>
                <a class="text-body mr-3" href="{{route('contact')}}">Contact</a>
            </div>
        </div>
        <div class="col-lg-6 text-center text-lg-right">
            <div class="d-inline-flex align-items-center">
                @guest 
                <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">My Account</button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="{{route('login')}}"><button class="dropdown-item" type="button">Sign in</button></a>
                        <a href="{{route('register')}}"><button class="dropdown-item" type="button">Sign up</button></a>
                    </div>
                    @endguest
                    @auth
                    <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">{{Auth::user()->name}}</button>
                    <div class="dropdown-menu dropdown-menu-right">
                    <a href="javascript:void();" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <button class="dropdown-item" type="button">Logout</button> 
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>          
                    </div>
                    @endauth
                </div>
            </div>
            <div class="d-inline-flex align-items-center d-block d-lg-none">
                <a href="" class="btn px-0 ml-2">
                    <i class="fas fa-heart text-dark"></i>
                    <span class="badge text-dark border border-dark rounded-circle"
                        style="padding-bottom: 2px;">0</span>
                </a>
                <a href="" class="btn px-0 ml-2">
                    <i class="fas fa-shopping-cart text-dark"></i>
                    <span class="badge text-dark border border-dark rounded-circle"
                        style="padding-bottom: 2px;">0</span>
                </a>
            </div>
        </div>
    </div>
    <div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
        <div class="col-lg-4">
            <a href="{{route('get-home')}}" class="text-decoration-none">
                <span class="h1 text-uppercase text-primary bg-dark px-2">Qurban</span>
                <span class="h1 text-uppercase text-dark bg-primary px-2 ml-n1">Trader</span>
            </a>
        </div>
        <div class="col-lg-4 col-6 text-left">
            <form action="{{route('products')}}" method="GET" class="mb-0">
                <div class="input-group mb-0">
                    <input type="text" class="form-control" name="search_text" placeholder="Search for products" aria-label="Search for products" aria-describedby="button-addon2" value="{{Request('search_text')}}">
                    <div class="input-group-append">
                        <button class="btn btn-dark text-primary" type="submit" id="button-addon2"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-4 col-6 text-right">
            <p class="m-0">Customer Service</p>
            <h5 class="m-0">042-37673222</h5>
        </div>
    </div>
</div>

<div class="container-fluid bg-dark">
    <div class="row px-xl-5">
        <div class="col-lg-3 d-none d-lg-block">
            <a class="btn d-flex align-items-center justify-content-between bg-primary w-100"
                data-toggle="collapse" href="#navbar-vertical" style="height: 65px; padding: 0 30px;">
                <h6 class="text-dark m-0"><i class="fa fa-bars mr-2"></i>Categories</h6>
                <i class="fa fa-angle-down text-dark"></i>
            </a>
            <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light"
                id="navbar-vertical" style="width: calc(100% - 30px); z-index: 999;">
                <div class="navbar-nav w-100">
                    @if(isset($categories) && !empty($categories))
                    @foreach($categories as $c)
                    <a href="{{route('products',['category' => $c->name])}}" class="nav-item nav-link">{{$c->name}}</a>
                    @endforeach
                    @endif
                </div>
            </nav>
        </div>
        <div class="col-lg-9">
            <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                <a href="" class="text-decoration-none d-block d-lg-none">
                    <span class="h1 text-uppercase text-dark bg-light px-2">Multi</span>
                    <span class="h1 text-uppercase text-light bg-primary px-2 ml-n1">Shop</span>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse"
                    data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0">
                        <a href="{{route('get-home')}}" class="nav-item nav-link active">Home</a>
                        <a href="{{route('products')}}" class="nav-item nav-link">All Products</a>
                        <a href="{{route('about')}}" class="nav-item nav-link">About Us</a>
                        <a href="{{route('teams')}}" class="nav-item nav-link">Teams</a>
                        <a href="{{route('contact')}}" class="nav-item nav-link">Contact Us</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>