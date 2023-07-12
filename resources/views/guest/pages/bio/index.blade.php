@extends('guest.guest_home')

@section('additional-css')
<style>
    #bio {
        min-height: 90vh:
    }

    .bg-bio-dark {
        background: radial-gradient(#594c66, #000000);
        /* background: radial-gradient(#7d8eab, #0c0c0c); */
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
        <div class="row z-i">
            <div class="col-12 py-5 z-i">
                <img width="350" class="m-3 shadow" src="{{ asset('images/salvo.jpg') }}" alt="salvo" style="border-radius: 5%; float: right">
                @foreach($biograpies as $bio)
                {!! $bio->description !!}
                @endforeach
            </div>
        </div>
    </div>
</section>

@endsection
