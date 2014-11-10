@extends('layouts.master')

@section('title')
<title>Twirl Salon</title>
@stop

@section('top-script')

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
        <h1><span><img src="/img/twirl-logo2.png" alt="Twirl Salon"></span></h1>
        <p>Boutique Salon</p>
        <p>Modern &vert; Fresh &vert; Effortless Looks</p>
    </header>       
</div><!-- /headerwrap -->


@stop

@section('bottom-script')

@stop