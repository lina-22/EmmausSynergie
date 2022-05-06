
<head>
    <link rel="stylesheet" href="<?php echo asset('cssFile/styles.css'); ?>" type="text/css">
</head>
@extends("template")
@section('titre')
    Histoire
@endsection
@section('contenu')
    <!-- 2nd section: -->
    <html>

    <body>


        <div class="second_landing">
            <div class="row p-t" style="padding-top: 100px;">
                <div class="mx-auto col-sm-12 col-md-6">
                    <h1>HISTOIRE DE LA PREVENTION SPCIALISEE</h1>
                    <p>à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son
                        inclusion dans des applications de mise en page de texte, comme Aldus PageMaker à la vente de
                        feuilles
                        Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son</p>
                </div>
            </div>
        </div>

        <!-- 3rd section carousel -->
        <div>
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" style="padding-top: 100px"
                style="padding-bottom:50px">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/image7.jpg" class="d-block w-100 h-50" alt="...">
                    </div>
            </div>
        </div>

        {{-- 4th section start --}}

        <div class="second_landing">
            <div class="row p-t" style="padding-top: 100px;">

                <div class="col-xs-6 col-sm-6 col-md-6">
                    <h3>CREATION D’EMMAUS-SYNERGIE</h3>
                    <br>
                    <p> l’association Emmaus-synergie dispose d’un service de
                        prévention spécialisée

                        composé d’une équipe de direction et de huit
                        éducateurs de rues.

                        Ces profotionels interviennet sur quatres téritoire</p>
                </div>

            </div>
        </div>

    </body>

    </html>
@endsection
