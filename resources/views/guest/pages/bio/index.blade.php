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
                <p>
                  Sono nato nella città della mole, la grande Torino, ma da ormai 20 anni vivo su un isola in mezzo al mediterraneo, la Sicilia.
                </p>
           
              <h4>
                La mia passione per l'informatica
              </h4>
              <p>
                    Una delle passioni che mi accompagna sin da quando ero piccolo è stata la passione per la tecnologia. Fin da piccolo ho sempre sognato avere un pc tutto mio e negli anni 80' grazie al Commodore 64 (Vic 20 in particolare) mi si è aperto un universo, dove il mio unico passatempo era consumare il mangianastri delle cassette per avviare i giochi e copiarli, scrivere qualsiasi cosa e scoprire come muoversi con il linguaggio Basic.
                    Dopo anni di sbattimenti senza avere un nuovo pc su cui divertirmi, nel 2001 i miei genitori mi regalarono finalmente un pc moderno (per l’epoca). Un fantastico Olidata con sopra l’odiatissimo Windows Me. Da qui la svolta, ho cominciato a incuriosirmi tramite le riviste mensili su come potenziarlo, e provare a formattare il pc in piena autonomia senza aspettare la mano del tecnico. Ho provato ad aggiornare anche il sistema operativo passando a Windows XP.
                    La soddisfazione più grande in seguito l'ho avuta qualche annetto dopo quando decisi di mettermi di lato un pò di risparmi e tentare il salto nell'assemblare un sistema più potente tutto mio.
                </p>

                <h4>
                    La mia storia con il web
                </h4>
                <p>

                    Scoprii internet nel 2003 circa, e mi interessai fin da subito a documentarmi cosa ci fosse dietro a quelle pagine. Spulciando i vari blog leggevo termini a me alieni come html, visual basic, java...provai ad andare più a fondo e leggendo le guide capì che era amore a prima vista. Chiaramente non ebbi la più pallida idea come funzionassero, ma iniziai a sporcarmi le mani con html iscrivendomi al corso di web master nel 2005.
                    Cercai di seguire attentamente le lezioni, ma qualcosa non andava. Oltrepassato lo step dell’html non riuscivo a stare dietro agli altri linguaggi. Sconfortato da tutto ciò, mi qualificai nel corso con il minimo sindacale. Ebbi un periodo vuoto dove non sapevo quale strada percorrere per una mia possibile carriera professionale. Avevo provato tanti mestieri, ma niente, il cuore mi portava sempre a premere sulla tastiera.
                    Tra libri e tutorial su youtube ad un certo punto mi sono intestardito che volevo a tutti i costi imparare la professione del web developer, riprendendo da zero rispolverando i più recenti HTML5 e CSS3, per poi studiare jvascript e i vari framework come VueJS e Laravel grazie a un più recento corso online con Boolean careers.
                    Attualmente mi sto specializzando in Laravel e la relativa gestione del database, anche se ho sempre un occhio di riguardo per tutto ciò che è visivo come la creazione di template accattivanti.
                </p>

                <h4>
                    Altre passioni
                </h4>

                <p>
                    L'altra delle mie passioni è la montagna. Questo è il mio eden, il mio rifugio dove per superare i momenti no e ricaricarmi di energia positiva.
                    Condividerò parecchie mie esperienze sui vari percorsi più nascosti della mia terra, grazie anche al contributo della guida di riferimento della Federescursionismo Sicilia (per saperne di più clicca qui).
                </p>

                <p>
                    Un’altra mia grande passione è quella del disegno. Fin da piccolo ho avuto questo dono tant’è che ero abituato alle elementari alla fine di ogni dettato di fare uno schizzo, la mia cara maestra era incredula che dovette avere conferma del mio vicino di casa.
                    potete vedere qualche esempio dei miei lavori o chiedere info e costi sia qui, che sulla mia pagina instagram dedicata .
                </p>

            </div>
        </div>
    </div>
</section>

@endsection
