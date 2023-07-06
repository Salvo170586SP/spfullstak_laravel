@extends('guest.guest_home')
@section('additional-css')
<style>
    .bg-proj-dark {
        background: radial-gradient(#594c66, #000000);
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
                <div class="col-12 col-md-4 d-flex justify-content-center mt-3">
                    <div class="card">
                        <a href="https://www.spfullstak.it/spotifyweb/" target="_blank" class="d-inline-block">
                            <img src="{{ asset('/images/progetti/Screenshot7.png') }}" class="card-img-top" alt="spotify" />
                            <div style="box-shadow: inset 0 0 8px -5px black" class="card-body d-flex justify-content-center align-items-center">
                                <h5 class="card-title text-muted">Spotify</h5>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-4 d-flex justify-content-center mt-3">
                    <div class="card">
                        <a href="https://www.spfullstak.it/playstation/" target="_blank" class="d-inline-block">
                            <img src="./images/progetti/Screenshot6.png" class="card-img-top" alt="Playstation" />
                            <div style="box-shadow: inset 0 0 8px -5px black" class="card-body d-flex justify-content-center align-items-center">
                                <h5 class="card-title text-muted">Playstation</h5>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-4 d-flex justify-content-center mt-3">
                    <div class="card">
                        <a href="https://www.spfullstak.it/dropbox-responsive/" target="_blank" class="d-inline-block">
                            <img src="./images/progetti/Screenshot5.png" class="card-img-top" alt="Dropbox" />
                            <div style="box-shadow: inset 0 0 8px -5px black" class="card-body d-flex justify-content-center align-items-center">
                                <h5 class="card-title text-muted">Dropbox</h5>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-4 d-flex justify-content-center mt-3">
                    <div class="card">
                        <a href="https://www.spfullstak.it/discord-responsive/" target="_blank" class="d-inline-block">
                            <img src="./images/progetti/Screenshot4.png" class="card-img-top" alt="Discord" />
                            <div style="box-shadow: inset 0 0 8px -5px black" class="card-body d-flex justify-content-center align-items-center">
                                <h5 class="card-title text-muted">Discord</h5>
                            </div>
                        </a>

                    </div>
                </div>
                <div class="col-12 col-md-4 d-flex justify-content-center mt-3">
                    <div class="card">
                        <a href="https://www.spfullstak.it/vue-boolzapp-responsive/" target="_blank" class="d-inline-block">
                            <img src="images/progetti/Screenshot3.png" class="card-img-top" alt="Discord" />
                            <div style="box-shadow: inset 0 0 8px -5px black" class="card-body d-flex justify-content-center align-items-center">
                                <h5 class="card-title text-muted">WhatsApp Web</h5>
                            </div>
                        </a>

                    </div>
                </div>
                <div class="col-12 col-md-4 d-flex justify-content-center mt-3">
                    <div class="card">
                        <a href="https://www.spfullstak.it/gioco_dadi/" target="_blank" class="d-inline-block">
                            <img src="images/progetti/Screenshot 2023-07-06 120455.png" class="card-img-top" alt="Discord" />
                            <div style="box-shadow: inset 0 0 8px -5px black" class="card-body d-flex justify-content-center align-items-center">
                                <h5 class="card-title text-muted">Gioco dei Dadi</h5>
                            </div>
                        </a>

                    </div>
                </div>
                <div class="col-12 col-md-4 d-flex justify-content-center mt-3">
                    <div class="card">
                        <a href="https://www.spfullstak.it/campo_minato/#" target="_blank" class="d-inline-block">
                            <img src="images/progetti/Screenshot 2023-07-06 124920.png" class="card-img-top" alt="Discord" />
                            <div style="box-shadow: inset 0 0 8px -5px black" class="card-body d-flex justify-content-center align-items-center">
                                <h5 class="card-title text-muted">Gioco Campo Minato</h5>
                            </div>
                        </a>

                    </div>
                </div>
            </div>

        </div>

    </div>
</section>


@endsection
