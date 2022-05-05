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

      <a class="navbar-brand" href="#">ACCUEIL</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>


      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">HISTOIRE</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('action.all') }}">ACTION</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('activity.all') }}">ACTIVITY</a>
          </li>
        </ul>
      </div>
    </div>
    <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </nav>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        {{-- <a class="navbar-brand" href="#">Emmaus Synergie</a> --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Histoire</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{ route('activity.all') }}" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Activite
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('activity.all') }}">Index</a></li>
                        <li><a class="dropdown-item" href="{{ route('activity.create') }}">Create_Activity</a></li>

                        <li><a class="dropdown-item" href="/FormContact/inscription">Inscription </a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Action
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('action.all') }}">Index</a></li>
                        <li><a class="dropdown-item" href="{{ route('action.create') }}">Create_Action</a></li>

                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>


                {{-- <li class="nav-item">
            <a class="nav-link" href="#">Activite</a> --}}

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Partenaire
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('partenaire.all') }}">Index</a></li>
                        <li><a class="dropdown-item" href="{{ route('partenaire.create') }}">Create_Partenaire</a>
                        </li>

                        <li><a class="dropdown-item" href="#">Another </a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Rapport
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('rapport.all') }}">Index</a></li>
                        <li><a class="dropdown-item" href="{{ route('rapport.create') }}">Create_Rapport</a></li>

                        <li><a class="dropdown-item" href="#">Another </a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Villes
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('ville.all') }}">Index</a></li>
                        <li><a class="dropdown-item" href="{{ route('ville.create') }}">Create_Ville</a></li>

                        <li><a class="dropdown-item" href="#">Another </a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>

            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
