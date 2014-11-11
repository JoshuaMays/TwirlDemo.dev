@extends('layouts.master')

@section('title')
<title>Twirl Gallery</title>
@stop

@section('top-script')
<link href="bootstrap-modal-carousel.css" rel="stylesheet" />
<script src="bootstrap-modal-carousel.js"/></script/>
@stop

@section('content')
<div class="container">
        <div class="col-lg-4">
            <figure class="text-center">
                <figcaption>
                    <h4>Salon</h4>
                </figcaption>
                <img src="/img/salon-thumb.jpg" alt="Salon Gallery">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#salonModal">
                  View
                </button>

                @include('partials.salon-modal')
            </figure>
        </div>
        <div class="col-lg-4">
            <figure class="text-center">
                <figcaption>
                    <h4>Clients</h4>
                </figcaption>
                <img src="/img/clients-thumb.jpg" alt="Salon Gallery">
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#clientsModal">
                  View
                </button>

                @include('partials.clients-modal')
            </figure>
        </div>
        <div class="col-lg-4">
            <figure class="text-center">
                <figcaption>
                    <h4>Backstage</h4>
                </figcaption>
                <img src="/img/backstage-thumb.jpg" alt="Salon Gallery">
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#backStageModal" data-local"#backStageCarousel">View</button>
            </figure>
        </div>
</div>
@stop