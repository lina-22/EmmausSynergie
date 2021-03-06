@extends("template")

@section('titre')
    Inscription
@endsection
@if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif
@section('contenu')
    <div class="continer">
        <div class="row">
            <div class="colum">
        <div>
            <p>Bienvenue sur l’intranet d’Emmaüs-Synergie

                un espace réservé aux membre de l’association

                Veuillez s’inscrire en remplissant le formulaire ci-dessous .

                Le directeur de l’association validera votre demande aprés examen </p>
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Name</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name">

            <label for="exampleFormControlInput1" class="form-label">Prenom</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="prenom">

            <label for="exampleFormControlInput1" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="E-mail">

            <label for="exampleFormControlInput1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="password">

            <label for="exampleFormControlInput1" class="form-label">Please confirm your Password</label>
            <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="confirm your password">



            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Choisissez le centre
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Villiers Sur Marne </a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Plessis Trevise </a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">La Queue en Brie</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Bry sur Marne</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Villiers Sur Marne</a></li>
                </ul>
            </li>

            <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-primary">Send</button>

              </div>
        </div>
    </div>
</div>

    </div>
@endsection
