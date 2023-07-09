@extends('guest.guest_home')

@section('contain')

@include('guest.partials.jumbotron')
@include('guest.partials.biograpy')
@include('guest.partials.competenze')
@include('guest.partials.miei_lavori')
{{-- @include('guest.partials.cvitae') --}}
@include('guest.partials.seguimi')

@endsection
