<head>
    <link rel="stylesheet" href="<?php echo asset('cssFile/styles.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('cssFile/autoStyle.css'); ?>" type="text/css">
</head>
@extends("template")
@section('titre')
    Auto ecole
@endsection
@section('contenu')
    <!-- first section: -->
    <html>

    <body>

        <div class="mx-auto col-sm-12 col-md-6">
            <h1>AUTO ECOLE EMMAÜS SYNERGIE</h1>
            <p>L'auto-école EMMAUS SUNERGIE a ouvert ces portes en septembre 2019.<br> En tant qu'auto-école sociale nous avons vocation a permettre à des personnes qui n'aurais pas la possibilité <br>de passé leurs permis de conduite sur une auto école
                classique de faire cedtte formation chez nous .
            </p>
        </div>

        <!-- 2nd section carousel -->
        <div>
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" style="padding-top: 100px"
                style="padding-bottom:50px">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/image7.jpg" class="d-block w-100 h-50" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/image6.jpg" class="d-block w-100 h-50" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/image3.jpg" class="d-block w-100 h-50" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/image4.jpg" class="d-block w-100 h-50" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/image5.jpg" class="d-block w-100 h-50" alt="...">
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
         {{-- 3rd section start --}}
        <div class="mx-auto col-sm-12 col-md-6" style="padding-top: 100px;">
            <h2>NOS BENIFICIAIRES</h2>
            <h3>PAS D'INSCRIPTION MAIS DES PREINSCRIPTIONS</h3>
            <p>En effet, tous nos bénificiares ont été orienté par une structure d'accompagnement locale ( Mission locale, Assistante sociale, Educateur...).<br> Chaque candidature est étudiée en détail afin de déterminer si la personne peut intégrer notre
                dispositif de formation.<br> Les rentrées de formation s'éffectues par groupe afin de faciliter les apprentissages grâce aux intéractions .
            </p>
        </div>

        {{-- 4th section start --}}
        <div class="max-auto col-sm-12 col-md-6" style="padding-top: 100px;">
            <h2>NOTRE FORMATION</h2>
        </div>
        <section class="title-2">
        <div class="mx-auto col-sm-12 col-md-6" style="padding-top: 80px;">
            <h4>COURS DE CODE EN PRESENTIEL</h4>
        </div>
       </section>
         {{-- 5th section start --}}
        <div class="second_landing">
            <div class="row p-t" style="padding-top: 100px;">
                <div class="col-sm-12 col-md-5">
                    <img id="abbe" src="{{ asset('img/auto1.PNG') }}" class="img-fluid" alt="">
                </div>
                <div class="mx-auto col-sm-12 col-md-6" >

                    <p>Pendant plusieures mois les bénificaires assistent à plusieures cours de codes en groupe dispensée par un enseigant de la conduite.</p>
                </div>
            </div>
        </div>
             {{-- 6th section start --}}
             <section class="title-2">
        <div class="mx-auto col-sm-12 col-md-6" style="padding-top: 50px;">
            <h5>PROGRAMME DE CONDUITE EN SIMULATEUR</h5>
        </div>
    </section>

          {{-- 7th section start --}}
        <div class="second_landing">
            <div class="row p-t" style="padding-top: 100px;">

                <div class="mx-auto col-sm-12 col-md-6">
                    <p>Une fois la code en poche, les apprenants éffectuent un programme de leçons sur notre simulateur de conduite.<br> C’est une premiére approche de régle de base de la conduite:<br> Tenue de volant, passage de vitesse, changement de direction
                        , dépassement...</p>
                </div>

                <div class="col-sm-12 col-md-5">
                    <img id="abbe" src="{{ asset('img/auto2.PNG') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>

                      {{-- 8th section start --}}
                      <section class="title-2">
        <div class="mx-auto col-sm-12 col-md-6" style="padding-top: 100px;">

            <h3>COURS DE CONDUITE EN VEHICULE</h3>
        </div>
    </section>
        {{-- 9th section start --}}
        <div class="second_landing">
            <div class="row p-t" style="padding-top: 100px;">
                <div class="col-sm-12 col-md-5">
                    <img id="abbe" src="{{ asset('img/imageauto.PNG') }}" class="img-fluid" alt="">
                </div>
                <div class="mx-auto col-sm-12 col-md-6">

                    <p>L’apprenant éffectue des heures de conuite avec le moniteur agrée dans un véhicule automatique ou manuel.<br> l’objectif est de préparer l’apprenant au mieux à l’examen de conduite.</p>
                </div>
            </div>
        </div>
         {{-- 10th section start --}}
        <div class="last_landing">
            <div class="row p-t" style="margin: 100px;">

                <div class="mx-auto col-sm-12 col-md-6">
                    <h4>
                        ACCOMPAGNEMENT SOCIO PROFESSIONEL
                    </h4>
                    <p>En parraléle de la formation permis de conduire l’apprenant bénificie d’un accompagnement<br> pour l’aidé dans ces démarches sociale ,administratif de soutien de formation et prefossionel ...</p>
                </div>

                <div class="col-sm-12 col-md-5">
                    <img id="abbe" src="{{ asset('img/auto4.PNG') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>

    </body>

    </html>
@endsection
