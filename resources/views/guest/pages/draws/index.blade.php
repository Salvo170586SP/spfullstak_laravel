@extends('guest.guest_home')
@section('additional-css')
<style>
 
</style>
@endsection
@section('contain')
<section id="page-draws" class="bg-draws-blue">
    <div class="container h-100">
        <div class="row my-5">
            <div class="col-12 d-flex flex-column align-items-center justify-content-center ">
                <h2>DISEGNI</h2>
                <p>I miei disegni spesso parlano un pò di me. Fatti con grafite e carboncino.</p>
            </div>
        </div>
        <div class="row ">
            <div class="col-12 col-md-12 d-flex flex-wrap justify-content-center mt-3">
                @foreach($draws as $draw)
                <a href="{{ $draw->url }}" target="_blank">
                    <figure id="{{ $draw->id }}" class="img-draw">
                        <img src="{{ asset('storage/'. $draw->img_url ) }}" alt="{{ $draw->title }}" />
                    </figure>
                </a>
                @endforeach
            </div>
        </div>

    </div>
    </div>
</section>


@endsection
