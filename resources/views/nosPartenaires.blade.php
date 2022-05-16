<head>
    <link rel="stylesheet" href="<?php echo asset('cssFile/styles.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('cssFile/autoStyle.css'); ?>" type="text/css">
</head>
@extends('template')
@section('titre')
    Auto ecole
@endsection
@section('contenu')
    <!-- first section: -->
    <html>

    <body>
<div id="nosPartenaires" >
        <div class="mx-auto col-sm-12 col-md-6" style="padding-top: 50px;">
            <h1>NOS PARTENAIRES</h1>
            <div>
                <h4>LES COLLECTIVITES TERRITORIALLES ET PARTENAIRES INSTITUTIONNELS</h4>

                <p>Conseil départemental</p>
                <p>Ville de Vilpers sur Marne</p>
                <p>Ville de Plessis Trévisse</p>
                <p>Ville de la Queue en Brie</p>
                <p>Ville de Sucy en Brie</p>
                <p>Education Nationale</p>

            </div>
        </div>

        {{-- 2nd section start --}}
        <div class="second_landing">
            <div class="row p-t" style="padding-top: 100px;">
                {{-- <div class="col-sm-12 col-md-5">
                    <h2>PARTENAIRES SOCIAUX </h2>
                </div> --}}
                <div class="mx-auto col-sm-12 col-md-6">

                    <div>
                        <h2>PARTENAIRES SOCIAUX </h2>

                        <p>CAF</p>
                        <p>Mission Local Des Bordes de Marne</p>
                        <p>Mission Local Des Portes de la Brie</p>
                        <p>L'aide social à l'enfance (ASE)</p>
                        <p>Protection Juduciare de la Jeunesse (PJJ)</p>
                        <p>CNLAPS</p>
                        <p>APSN</p>

                    </div>
                </div>
            </div>
        </div>


        {{-- 3rd section start --}}
        <div class="second_landing">
            <div class="row p-t" style="padding-top: 100px;">

                <div class="mx-auto col-sm-12 col-md-6">

                    <div>
                        <h2>LE MOUVEMENT EMMAUS </h2>

                        <p>EMMAUS FRANCE </p>
                        <p>EMMAUS EUROPE </p>
                        <p>EMMAUS INTERNATIONAL </p>

                    </div>
                </div>
            </div>
        </div>
        {{-- 4th section start --}}
        <div class="second_landing">
            <div class="row p-t" style="padding-top: 100px;">

                <div class="mx-auto col-sm-12 col-md-6">

                    <div>
                        <h2>ENTREPRISES INSERTION ET BAILLEURS SOCIALS</h2>
                        <ul>
                            <li>Paris Habitat</li>
                            <li>Valophis</li>
                            <li>Val de Brie Emmaüs</li>
                            <li>Eco 94</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        {{-- 5th section start --}}
        <div class="specifique">
            <div class="row p-t" style="padding: 100px;">

                <div class="mx-auto col-sm-12 col-md-6">

                    <div>
                        <h2>PARTENAIRES SPECIFIQUE A L'AUTO-ECOLE SOCIALE</h2>

                        <p>Prefecture de Val de Marne</p>
                        <p>Terittoire 10 Paris Est Marne et Bois</p>
                        <p>Code Rousseau</p>
                        <p>Fondation INKERMAN</p>
                        <p>Fondation JM BRUNEAU</p>
                        <p>Fondation VINCI AUTO ROUTE</p>
                        <p>Fondation De France</p>

                    </div>
                </div>
            </div>
        </div>
        </div>

    </body>

    </html>
@endsection
