<head>
    <link rel="stylesheet" href="<?php echo asset('cssFile/style.css'); ?>" type="text/css">
</head>

<div class="container-fluid">
    <div class="row">
        <div id="logoImg" class="col-lg-4 align-self-start">

                <img  id="logoDesign" src="img/emmausLogo.PNG" alt="">

        </div>
        <div class="col-lg-8" id="lconArea">

                <img class="contactIcon" src="img/telephone-fill.svg" alt="">
                <img class="contactIcon" src="img/envelope-plus-fill.svg" alt="">
                <img class="contactIcon" src="img/person-lines-fill.svg" alt="">

        </div>

        </div>

    </div>

<hr>

<nav class="navbar navbar-expand-lg navbar-light bg-light">

    <div class="container-fluid">

      <a class="navbar-brand" href="/accueil">ACCUEIL</a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>


      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/histoire">HISTOIRE</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('action.all') }}">ACTION</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('activity.all') }}">ACTIVITY</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('rapport.all') }}">RAPPORT</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('partenaire.all') }}">PARTENAIRE</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('ville.all') }}">VILLES</a>
          </li>
        </ul>
      </div>
    </div>
    <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </nav>
