<head>
    <link rel="stylesheet" href="<?php echo asset('cssFile/styleFooter.css'); ?>" type="text/css">
</head>
<footer class="footer">
    <div id="contact_inf" class="card-group bg-grey">
        <div class="card">
            <div class="card-body"  bg-grey>
                <img src="{{asset('img/emmausLogo.PNG')}}" id="foot_logo" class="img-top" alt="...">
                <h5 class="card-title">ADDRESS POSTALE</h5>
                <p class="card-text">44 Avenue Lecomte</p> <br>
                <p class="card-text"> N° SIRET: 44501098600021</p>
            </div>

        </div>
        <div class="card">
            <div class="card-body">
                <p class="card-text">Nous Contacter</p>
                <p class="card-text">Nos Partenaires</p>
                <p class="card-text">Mentions Légales</p>
                <p class="card-text">Politique De Confidentialité</p> <br>
                <p class="card-text">Tel: 01 57 10 96 75</p>
            </div>

        </div>
        <div class="card">
            <div class="card-body">
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    {{-- <button class="btn btn-outline-success" type="submit">Search</button> --}}
                </form> <br>

                <img id="logoImg_val" src="{{asset('img/Val_Marne_logo.PNG')}}"  alt="">
            </div>
        </div>
        </div>
</footer>
