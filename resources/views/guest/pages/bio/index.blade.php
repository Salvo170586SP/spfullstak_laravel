@extends('guest.guest_home')

@section('additional-css')
<style>
    #bio {
        min-height: 90vh;
    }

    .bg-bio-dark {
        background-color: #16181D;
        /* background-color:  #171923; */
        color: white;
    }

</style>
@endsection
@section('contain')
<section id="bio" class="bg-bio-dark">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 m-0 p-0">
                <figure style="width: 100%; height: 350px; overflow: hidden">
                    <img style="width: 100%; height:100%; object-fit: cover" src="{{ asset('images/rezolant-ZgZsKFnSbEA-unsplash.jpg') }}" alt="sfondo bio">
                </figure>
            </div>
        </div>
    </div>
    <div class="container pt-3">
        <div class="row">
            <div class="col-12 z-i">
                @foreach($biograpies as $bio)
                {!! $bio->description !!}
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection
