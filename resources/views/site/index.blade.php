<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tp fico - ly ly sales tín dụng</title>
    <link rel="canonical" href="{{$canonical}}" />
    <link rel='shortlink' href="{{$canonical}}" />
    <link rel="alternate" type="application/json+oembed" href="#" />
    <link rel="icon" type="image/png" href={{asset('public/site/images/favicon.png')}}>
    <link rel="alternate" type="text/xml+oembed" href="#" />
    <meta name="generator" content="" />
    <meta name="robots" content="index, follow">
    <meta property="og:url" content="{{$canonical}}"/>
    <meta property="og:title" content="@yield('title')"/>
    <meta property="og:description" content=""/>
    <meta property="og:locale" content="vi_VN" />
    <meta property="og:type" content="article" />
    <meta property="og:site_name" content="Tp fico - ly ly sales tín dụng" />
    <meta property="article:author" content="" />
    <meta property="og:image" content="" />
    <!-- Links Of CSS File -->
    <link rel="stylesheet" href={{asset('public/site/css/bootstrap.min.css')}}>
    <link rel="stylesheet" href={{asset('public/site/css/owl.theme.default.min.css')}}>
    <link rel="stylesheet" href={{asset('public/site/css/owl.carousel.min.css')}}>
    <link rel="stylesheet" href={{asset('public/site/css/flaticon.css')}}>
    <link rel="stylesheet" href={{asset('public/site/css/remixicon.css')}}>
    <link rel="stylesheet" href={{asset('public/site/css/meanmenu.min.css')}}>
    <link rel="stylesheet" href={{asset('public/site/css/animate.min.css')}}>
    <link rel="stylesheet" href={{asset('public/site/css/magnific-popup.min.css')}}>
    <link rel="stylesheet" href={{asset('public/site/css/dark-mode.css')}}>
    <link rel="stylesheet" href={{asset('public/site/css/style.css')}}>
    <link rel="stylesheet" href={{asset('public/site/css/responsive.css')}}>
    <link href="https://kit-pro.fontawesome.com/releases/v5.15.3/css/pro.min.css" rel="stylesheet" type="text/css">
    @yield('styles')
</head>
<body>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v14.0&appId=494689615778255&autoLogAppEvents=1" nonce="w333WHDb"></script>
    @include('site.layouts.header')

    @yield('content')

    @include('site.layouts.footer')

    <!-- Start Go Top Area -->
    <div class="go-top">
        <i class="ri-arrow-up-s-fill"></i>
        <i class="ri-arrow-up-s-fill"></i>
    </div>
    <!-- End Go Top Area -->

    <!-- Links of JS File -->
    <script src={{asset('public/site/js/jquery.min.js')}}></script>
    <script src={{asset('public/site/js/bootstrap.bundle.min.js')}}></script>
    <script src={{asset('public/site/js/meanmenu.min.js')}}></script>
    <script src={{asset('public/site/js/owl.carousel.min.js')}}></script>
    <script src={{asset('public/site/js/wow.js')}}></script>
    <script src={{asset('public/site/js/dark-mode-switch.min.js')}}></script>
    <script src={{asset('public/site/js/custom.js')}}></script>
    @yield('scripts')
</body>
</html>
