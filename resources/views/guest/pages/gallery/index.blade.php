@extends('guest.guest_home')

@section('additional-css')
<style>
    #gallery {
        height: 100vh;
        padding-top: 100px;
    }

    .bg-gallery-dark {
        background: radial-gradient(#594c66, #000000);
        color: white;
    }

</style>
@endsection
@section('contain')
<section id="gallery" class="bg-gallery-dark">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="z-i">
                    Gallery
                </h1>
                <div class="d-flex flex-column justify-content-center align-items-center z-i">
                    <h1 class="z-i text-light mb-5">Coming soon...</h1>
                    <img width="900" class="rounded-5 border z-i" src="{{ asset('images/mark-konig-Uu5fnOkFAdA-unsplash.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
