@extends('guest.guest_home')

@section('additional-css')
<style>
    #bio {}

    .bg-bio-dark {
        background: radial-gradient(#594c66, #000000);
        color: white;
    }

    .bg-bio-light {
        background: radial-gradient(#eff0ff91, #eaebfc);
        color: black;
    }

</style>
@endsection

@section('contain')
<section id="bio" class="bg-bio-dark" :class="{'bg-bio-light' : show}">
    <div class="container pt-5">
        <div class="row">
            <div class="col-12 py-5">
                <img width="350" class="m-3 shadow" src="{{ asset('images/salvo.jpg') }}" alt="salvo" style="border-radius: 5%; float: right">
                @foreach($biograpies as $bio)
                {!! $bio->description !!}
                @endforeach
            </div>
        </div>
    </div>
</section>

@endsection
