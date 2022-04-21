<head>

    @stack('css')
    @push('css')
    <link rel="stylesheet" href="cssFile/style.css">
    @endpush
</head>
@extends("template")
@section('titre')
    Page Create oneStructure
@endsection
@section('contenu')


    <!-- 2nd section: -->
    <div class="second_landing">
      <div class="row p-t" style="padding-top: 100px;">
      <div class="col-xs-6 col-sm-6 col-md-6">
        <img id="abbe" src="{{asset("img/abbePhoto.PNG")}}"  class="d-block w-10 h-10"  alt="">
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6">
        <h1>EMMAÜS SYNERGIE</h1>
        <p>à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son</p>
      </div>
      </div>
    </div>

    <!-- 3rd section carousel -->
    <div>
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" style="padding-top: 100px" style="padding-bottom:50px">
        <div class = "carousel-inner">
          <div class="carousel-item active">
            <img src="img/image1.jpg" class="d-block w-100 h-50" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/image2.jpg" class="d-block w-100 h-50" alt="...">
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
@endsection
