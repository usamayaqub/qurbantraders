<?php
use App\Models\Category;
$categories = Category::with('products')->where('status',1)->get();
if(empty($categories)){
$categories = [];
}
?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <title>@yield('meta_title')</title>
    <meta name="description" content="@yield('meta_description')" />
    <link rel="canonical" href="@yield('canonical')">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta itemprop="name" content="@yield('meta_title')">
    <meta itemprop="description" content="@yield('meta_description')">
    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('meta_title')" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@Site Title" />
    <meta name="twitter:title" content="@yield('meta_title')" />
    <meta property="og:description" content="@yield('meta_description')" />
    <meta name="twitter:description" content="@yield('meta_description')" />
    <meta property="og:url" content="@yield('canonical')" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <!-- Web Application Manifest -->
    <link rel="manifest" href="/manifest.json">
    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="application-name" content="M4FM">
    <link rel="icon" sizes="384x384" href="{{ asset('/img/icons/icon-384x384.png?v=2.6') }}">
    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="M4FM">
    <link rel="apple-touch-icon" href="{{ asset('/img/icons/apple-touch-icon.png?v=2.6') }}">
    <!-- Tile for Win8 -->
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('/img/icons/apple-touch-icon.png?v=2.6') }}">
    <!-- Chrome for Android theme color -->
    <meta name="theme-color" content="#17a6b5">
    <link rel="shortcut icon" type="image/png" href="{{asset('./assets/images/fav.png')}}" />


    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/node-snackbar@latest/src/js/snackbar.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/node-snackbar@latest/dist/snackbar.min.css" />
    
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <title>{{ config('app.name', 'Qurban Trader') }}</title>
</head>

<body>
    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')
    @yield('footer_scripts')
    @stack('scripts')
 
    <a href="https://wa.link/ppwma3" class="float" target="_blank">
        <i class="fab fa-whatsapp my-float"></i>
    </a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <!-- Contact Javascript File -->
    <script src="{{asset('mail/jqBootstrapValidation.min.js')}}"></script>
    <!-- Template Javascript -->
    <script src="{{asset('js/main.js')}}"></script>

</body>





<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script>
$(document).ready(function() {
    // Check if a success or error message is present in the session
    var successMessage = '{{ Session::get("success") }}';
    var errorMessage = '{{ Session::get("error") }}';

    if (successMessage !== '') {
        Snackbar.show({
            pos: 'bottom-center',
            text: successMessage,
            backgroundColor: '#8bd2a4',
            actionTextColor: '#fff'
        });
    }

    if (errorMessage !== '') {
        Snackbar.show({
            pos: 'bottom-center',
            text: errorMessage,
            backgroundColor: '#ba181b',
            actionTextColor: '#fff'
        });
    }
});
</script>
</html> 