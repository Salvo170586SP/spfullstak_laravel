@extends('guest.guest_home')

@section('additional-css')
<style>
    .bg-cv-dark {
        background: radial-gradient(#594c66, #000000);
        color: white;
    }

    .bg-cv-light {
        background: radial-gradient(#eff0ff91, #eaebfc);
        color: black;
    }
</style>
@endsection
@section('contain')
<section id="cvitae" class="bg-cv-dark" :class="{'bg-cv-light' : show}">
    <div class="container">
      <div class="row my-5">
        <div class="col-12 text-center py-5">
          <h2>Curriculum Vitae & certificati conseguiti</h2>
        </div>
        <div class="col-12 col-md-5 p-5">
          <h3 class="py-3">Competenze acquisite</h3>

          <h5>HTML CSS Bootstrap</h5>
          <p class="fs-6">
            Ottime competenze in HTML, CSS e Bootstrap, adattando
            agevolmente i vari layout in modo responsive a qualunque
            device, che sia pc, tablet o mobile.
          </p>
          <br />

          <h5>JS VueJS</h5>
          <p class="fs-6">
            Con le basi in Javascript e il framework VueJS(con
            quest'ultimo associandola alla tecnologia VueRouter) riesco a
            progettare e realizzare web-app e interi siti single page,
            ovvero con la capacità di cambiare il proprio contenuto senza
            ricaricare la pagina, rendendo il tutto molto più agevole e
            intuitivo.
          </p>
          <br />

          <h5>PHP LARAVEL MYSQL</h5>
          <p class="fs-6">
            Ho buone conoscenze nel linguaggio php e l'ambiente lavorativo
            Laravel, con cui poter creare un back-office utile alla
            manutenzione e all'aggiornamento dei propri contenuti
            memorizzati nel database con tecnologia mysql.
          </p>
        </div>
        <div class="col-12 d-none col-md-3 d-md-block d-flex align-items-center justify-content-center py-2">
          <img src="https://i.postimg.cc/Bnf1KNQ0/Attestato-Boolean-Pitanza-Salvatore-page-0001.jpg" alt="attestato"
            id="cv-prev" class="img-fluid  border img-cv" width="250" />
        </div>
        <div class="col-12 d-none col-md-3 d-md-block d-flex align-items-center justify-content-center py-2">
          <img src="images/Pitanza_Salvatore_cv_2023.png" alt="cvitae" id="cv-next" class="img-fluid  border img-cv"
            width="250" />
        </div>

        <div class="col-12 d-block col-md-3 d-md-none d-flex align-items-center justify-content-center py-2">
          <img src="https://i.postimg.cc/Bnf1KNQ0/Attestato-Boolean-Pitanza-Salvatore-page-0001.jpg" alt="attestato"
            class="img-fluid border  img-cv" width="250" />
        </div>
        <div class="col-12 d-block col-md-3 d-md-none d-flex align-items-center justify-content-center py-2">
          <img src="images/Pitanza_Salvatore_cv_2023.png" alt="cvitae" class="img-fluid border img-cv"
            width="250" />
        </div>
      </div>
    </div>
  </section>

  @endsection