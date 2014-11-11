@extends('layouts.master')

@section('title')
<title>Twirl Salon</title>
@stop

@section('top-script')
<link rel="stylesheet" href="{{ asset('/css/menu.css'); }}">
@stop

@section('video')
<video id="video_background" preload="auto" autoplay loop style="position: fixed; top: 0; left: 0px; bottom: 0px; right: 0px; z-index: -100; width: 100%; height: auto; opacity: .45">
    <source src="/vid/bumble.mp4" type="video/mp4">
</video>
@stop

@section('content')
<!-- ==== HEADERWRAP ==== -->

<div id="headerwrap" id="home" name="home">
    <header class="clearfix">
        <main id="main" class="main"></main>
    </header>       
</div><!-- /headerwrap -->


@stop

@section('bottom-script')
<script src="{{ asset('/js/fastclick.js'); }}"></script>
<script src="{{ asset('/js/btns.js'); }}"></script>
<script src="{{ asset('/js/main.js'); }}"></script>
@stop