@extends('guest.guest_home')

@section('contain')
<section id="page-project" class="bg-proj-dark">
    <div class="container h-100">
        <div class="row my-5">
            <div class="col-12 d-flex flex-column align-items-center justify-content-center">
                <h2>PROGETTI</h2>
                <p>Lista di piccoli progetti dimostrativi che ho creato in base alle mie skills acquisite grazie al corso Boolean Careers</p>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-12 d-flex flex-wrap justify-content-center mt-3">
                @foreach($projects as $proj)
                <a href="{{ $proj->url }}" target="_blank" id="item-img-proj">
                    <figure class="proj-img">
                        <img src="{{ asset('storage/'. $proj->img_url ) }}" alt="{{ $proj->title }}" />
                    </figure>
                    <div class="text-proj">
                        <small>{{ $proj->title }}</small>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>
</section>


@endsection
