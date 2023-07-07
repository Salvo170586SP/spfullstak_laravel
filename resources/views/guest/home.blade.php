@extends('guest.guest_home')
@section('additional-css')
<style>
    .jumb_image {
        background-image: url("/images/mohammad-rahmani-8qEB0fTe9Vw-unsplash.jpg");
    }

    .bio_image {
        background-image: url("/images/IMG_20210314_104826.jpg");
    }
</style>
@endsection
@section('contain')

@include('guest.partials.jumbotron')
@include('guest.partials.biograpy')
@include('guest.partials.competenze')
@include('guest.partials.miei_lavori')
{{-- @include('guest.partials.cvitae') --}}
@include('guest.partials.seguimi')

@endsection
