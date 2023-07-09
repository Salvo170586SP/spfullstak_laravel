@extends('guest.guest_home')

@section('additional-css')
<style>
    #gallery {
        min-height: 100vh;
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
            <div class="col-12">
                <h1 class="z-i pb-5">
                    Gallery
                </h1>
            </div>
            <div class="col-12 d-flex justify-content-center">
                <img class="rounded-5 border z-i w-75" src="{{ asset('images/mark-konig-Uu5fnOkFAdA-unsplash.jpg') }}" alt="Coming soon">
            </div>
            <div class="col-12 text-center my-5">
                    <h1 class="z-i text-light">Coming soon...</h1>
            </div>
        </div>
    </div>
</section>

@endsection
