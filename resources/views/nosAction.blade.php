<head>
    <link rel="stylesheet" href="<?php echo asset('cssFile/styles.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('cssFile/autoStyle.css'); ?>" type="text/css">
</head>
@extends('template')
@section('titre')
    Equipe
@endsection
@section('contenu')
    <!-- first section: -->
    <html>

    <body>

        <h1>NOS ACTIONS</h1>


        {{-- 7th section start --}}
        <div class="actionfirst_landing">
            <hr>
            <div class="row p-t" style="padding-top: 100px;">

                <div class="mx-auto col-sm-12 col-md-6">
                    <h5>à la vente de feuilles Letraset
                        contenant des passages du Lorem
                        Ipsum, et, plus récemment, par son

                        inclusion dans des applications de
                        mise en page de texte, comme
                        Aldus PageMaker. </h5>
                </div>


                <div class="col-sm-12 col-md-5">
                    <img id="abbe" src="{{ asset('img/action1.PNG') }}" class="img-fluid" alt="">
                </div>
            </div>
            <hr>
        </div>

        {{-- 7th section start --}}
        <div class="actionfirst_landing">
            <hr>
            <div class="row p-t" style="padding-top: 100px;">

                <div class="mx-auto col-sm-12 col-md-6">
                    <h5>à la vente de feuilles Letraset
                        contenant des passages du Lorem
                        Ipsum, et, plus récemment, par son

                        inclusion dans des applications de
                        mise en page de texte, comme
                        Aldus PageMaker. </h5>
                </div>


                <div class="col-sm-12 col-md-5">
                    <img id="abbe" src="{{ asset('img/action2.PNG') }}" class="img-fluid" alt="">
                </div>
            </div>
            <hr>
        </div>

        {{-- 7th section start --}}
        <div class="actionfirst_landing">
            <hr>
            <div class="row p-t" style="padding-top: 100px;">

                <div class="mx-auto col-sm-12 col-md-6">
                    <h5>à la vente de feuilles Letraset
                        contenant des passages du Lorem
                        Ipsum, et, plus récemment, par son

                        inclusion dans des applications de
                        mise en page de texte, comme
                        Aldus PageMaker. </h5>
                </div>


                <div class="col-sm-12 col-md-5">
                    <img id="abbe" src="{{ asset('img/action1.PNG') }}" class="img-fluid" alt="">
                </div>
            </div>
            <hr>
        </div>

        {{-- 7th section start --}}
        <div class="actionfirst_landing">
            <hr>
            <div class="row p-t" style="padding: 100px;">

                <div class="mx-auto col-sm-12 col-md-6">
                    <h5>à la vente de feuilles Letraset
                        contenant des passages du Lorem
                        Ipsum, et, plus récemment, par son

                        inclusion dans des applications de
                        mise en page de texte, comme
                        Aldus PageMaker. </h5>
                </div>


                <div class="col-sm-12 col-md-5">
                    <img id="abbe" src="{{ asset('img/action3.PNG') }}" class="img-fluid" alt="">
                </div>
            </div>
            <hr>
        </div>

    </body>

    </html>
@endsection
