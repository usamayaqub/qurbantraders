<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <img src="{{ URL("assets/images/qurban-logo.jpg") }}" />
 
            </div>
    </div>

    <div class="dropdown d-inline-block">
        @auth
        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img class="rounded-circle header-profile-user" src="{{ isset(Auth::user()->avatar) ? asset(Auth::user()->avatar) : asset('/assets/images/users/avatar-9.png') }}" alt="Header Avatar">
            <span class="d-none d-xl-inline-block ms-1" key="t-henry">{{ucfirst(Auth::user()->name)}}</span>
            <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
        </button>
        <div class="dropdown-menu dropdown-menu-end">
            <!-- item-->
            <a class="dropdown-item text-danger" href="javascript:void();" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span key="t-logout">Logout</span></a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
        @endauth
    </div>

    </div>
    </div>
</header>

@auth
<div class="topnav">
    <div class="container-fluid">
        <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

            <div class="collapse navbar-collapse active" id="topnav-menu-content">
                <ul class="navbar-nav active">

                    <li class="nav-item dropdown  d-flex align-items-center">
                        <a class="nav-link dropdown-toggle arrow-none d-flex align-items-center" href="{{route('admin.home')}}" id="topnav-dashboard" role="button">
                            <i class="bx bx-home-circle me-2"></i><span key="t-dashboards">Dashboard</span>
                        </a>
                    
                    </li>

                    <li class="nav-item dropdown d-flex align-items-center">
                        <a class="nav-link dropdown-toggle arrow-none d-flex align-items-center" href="{{route('admin.categories')}}" id="topnav-components" role="button">
                            <i class="bx bx-cart me-2"></i><span key="t-components">Categories</span>
                        </a>

                    </li>
                    <li class="nav-item dropdown d-flex align-items-center">
                        <a class="nav-link dropdown-toggle arrow-none d-flex align-items-center" href="{{route('admin.products')}}" id="topnav-components" role="button">
                            <i class="bx bx-cart me-2"></i><span key="t-components">Products</span>
                        </a>

                    </li>
                    <li class="nav-item dropdown d-flex align-items-center">
                        <a class="nav-link dropdown-toggle arrow-none d-flex align-items-center" href="{{route('inquiry.index')}}" id="topnav-components" role="button">
                            <i class="bx bx-cart me-2"></i><span key="t-components">Inquiries</span>
                        </a>

                    </li>

                    <li class="nav-item dropdown d-flex align-items-center">
                        <a class="nav-link dropdown-toggle arrow-none d-flex align-items-center" href="{{route('contact.index')}}" id="topnav-components" role="button">
                            <i class='bx bxs-message me-2'></i><span key="t-components">Contact</span>
                        </a>

                    </li>

                </ul>
            </div>
        </nav>
    </div>
</div>
@endauth
