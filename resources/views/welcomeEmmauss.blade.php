@extends("template")
@section('titre')
    Page Create oneStructure
@endsection
@section('contenu')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <link rel="stylesheet" href="style.css"> --}}
    <link rel="stylesheet" href="../css/app.css">
    <title>WelcomePage</title>
</head>



</html>
 @endsection
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
