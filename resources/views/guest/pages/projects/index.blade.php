@extends('guest.guest_home')
@section('additional-css')
<style>
    .bg-proj-dark {
        background: radial-gradient(#594c66, #000000);
        /* background: radial-gradient(#7d8eab, #0c0c0c); */
        
        color: white;
    }

    .bg-proj-light {
        background: radial-gradient(#eff0ff91, #eaebfc);
        color: black;
    }

    #page-project .card img {
        height: 250px;
    }

</style>
@endsection
@section('contain')
<section id="page-project" class="bg-proj-dark" :class="{'bg-proj-light' : show}">
    <div class="container h-100">
        <div class="row my-5">
            <div class="col-12 d-flex flex-column align-items-center justify-content-center z-i">
                <h2>PROGETTI</h2>
                <p>Lista di piccoli progetti dimostrativi che ho creato in base alle mie skills acquisite grazie al corso Boolean Careers</p>
            </div>
            <div class="row gy-5 d-flex text-light z-i flex-row justify-content-center ">
                @foreach($projects as $proj)
                <div class="col-12 col-md-4 d-flex justify-content-center mt-3">
                    <div class="card">
                        <a href="{{ $proj->url }}" target="_blank" class="d-inline-block">
                            <img src="{{ asset('storage/'. $proj->img_url ) }}" class="card-img-top" alt="{{ $proj->title }}" />
                            <div style="box-shadow: inset 0 0 8px -5px black" class="card-body d-flex justify-content-center align-items-center">
                                <h5 class="card-title text-muted">{{ $proj->title }}</h5>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>


@endsection
