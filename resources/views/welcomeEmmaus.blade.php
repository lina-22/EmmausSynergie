{{-- @extends("template")
@section('titre')
    Page Create oneStructure
@endsection
@section('contenu') --}}

{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <link rel="stylesheet" href="style.css"> --}}
    <link rel="stylesheet" href="../css/app.css">
    <title>Document</title>
</head>

<body>
    <div class="main">
        <div id="firstDiv">
            <section class="left">
                <img src="./images/abbe.jpg" alt="">
            </section>
            <section class="right">
                <h1>EMMAÜS SYNERGIE</h1>
                <p>à la vente de feuilles Letraset contenant des
                    passages du Lorem Ipsum, et, plus récemment,
                    par son

                    inclusion dans des applications de mise en
                    page de texte, comme Aldus PageMaker

                    à la vente de feuilles Letraset contenant des
                    passages du Lorem Ipsum, et, plus récemment,
                    par son</p>
            </section>
        </div>
    </div>
</body>

</html> --}}

{{-- @endsection --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <div>
            <section>
                <img id="logoImg" src="img/emmausLogo.PNG" alt="">
            </section>
            <section>
                <img src="img/telephone-fill.svg" alt="">
                <img src="img/envelope-plus-fill.svg" alt="">
                <img src="img/person-lines-fill.svg" alt="">
            </section>
        </div>
        <hr>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Navbar</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                  </li>
                </ul>
                <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
              </div>
            </div>
          </nav>
    </nav>
    <hr>

    <!-- end nav section -->

    <!-- 2nd section: -->
    <div class="second_landing">
      <section>
        <img id="abbe" src="{{asset("img/abbe.png")}}"  class="d-block w-10 h-10"  alt="">
      </section>
      <section>
        <h1>EMMAÜS SYNERGIE</h1>
        <p>à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son</p>
      </section>
    </div>

    <!-- 3rd section carousel -->
    <div>
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/image1.jpg" class="d-block w-10" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/image2.jpg" class="d-block w-10" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/image3.jpg" class="d-block w-10" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/image4.jpg" class="d-block w-10" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/image5.jpg" class="d-block w-10" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>

</body>
</html>
