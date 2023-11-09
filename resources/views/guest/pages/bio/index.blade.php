@extends('guest.guest_home')

@section('additional-css')
<style>
    #bio {
        min-height: 90vh;
    }

    .bg-bio-dark {
        background-color:  #16181D;
        /* background-color:  #171923; */
        color: white;
    }
</style>
@endsection
@section('contain')
<section id="bio" class="bg-bio-dark">
    <div class="container pt-5">
        <div class="row">
            <div class="col-12 py-5 z-i">
                <img width="350" class="m-3 shadow" src="{{ asset('images/salvo.jpg') }}" alt="salvo" style="border-radius: 5px; float: right">
                @foreach($biograpies as $bio)
                {!! $bio->description !!}
                @endforeach
            </div>
        </div>
    </div>
</section>

@endsection
