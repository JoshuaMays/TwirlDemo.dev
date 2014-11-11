<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, maximum-scale=1">
    @yield('title')
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css'); }}">
    <link rel="stylesheet" href="{{ asset('/css/styles.css'); }}">
    <link rel="stylesheet" href="{{ asset('/css/custom.css'); }}">
    <link rel="stylesheet" href="/css/icomoon.css">
    <link href="/css/animate-custom.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
    
    <script src="/js/jquery.min.js"></script>
    <script type="text/javascript" src="/js/modernizr.custom.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->
    @yield('top-script')
</head>
<body data-spy="scroll" data-offset="0" data-target="#navbar-main">
    @yield('video')
    <div class="wrapper">
        <div class="signWrap">
            <img src="/img/sign.png">
            <svg width="100%" height="auto" version="1.1" id="svgTwirl" xmlns="http://www.w3.org/2000/svg">
                <text class="path" xml:space="preserve" text-anchor="middle" font-family="Dancing Script" font-size="155" id="svg_1" y="215" x="48%" stroke-width="8" stroke="#8DD6F2" fill="#8DD6F2">twirl</text>
            </svg>
            <p class="menuBar">MENU</p>
        </div>
        @yield('content')
    </div>

    <div id="footer">
        <div class="container">
            <h4>Twirl is a <a href="http://www.bumbleandbumble.com">Bumble and bumble</a> salon.<img src="/img/bb.png" alt="Bumble &amp; bumble"></h4>
            <ul class="list-inline">
                <li><a href="/policies">Policies</a></li>
                <li><a href="/careers">Careers</a></li>
                <li><a href="/hair-model">Model Program</a></li>
                <li><a href="http://www.style.com">Style Lookbook</a></li>
                <li><a href="http://www.bluestarart.org">Blue Star Arts Complex</a></li>
            </ul>
            <ul class="list-inline">
                <li>&copy; Twirl Salon</li>
                <li><a href="tel:210-781-4198">210-781-4198</a> to schedule an appointment</li>
                <li><a href="mailto:salon@twirlhair.com">salon@twirlhair.com</a></li>
            </ul>
        </div>
    </div>
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/retina.js"></script>
    <script type="text/javascript" src="/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="/js/smoothscroll.js"></script>
    <script type="text/javascript" src="/js/jquery-func.js"></script>
    @yield('bottom-script')
</body>
</html>