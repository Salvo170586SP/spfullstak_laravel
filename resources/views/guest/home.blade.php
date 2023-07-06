@extends('guest.guest_home')
@section('additional-css')
<style>
    .jumb_image {
        background-image: url("/images/photo-1635830625698-3b9bd74671ca.avif");
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
