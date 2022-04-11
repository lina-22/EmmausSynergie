@extends("template")

@section("titre")
Structure
@endsection

@section("contenu")

<h1>Bismillahir Rahmanir Rahim</h1>
<br><br>
<h2>Structure body of EmmausSynergie</h2> <hr> <hr> <hr>

<img src="./images/Capture.PNG" alt="">
<img src="./images/Capture.PNG" alt="">
<img src="./images/Capture.PNG" alt="">
<img src="./images/Capture.PNG" alt="">
<h4>à la vente de feuilles Letraset contenant des
    passages du Lorem Ipsum, et, plus récemment,
    par son

     inclusion dans des applications de mise en
    page de texte, comme Aldus PageMaker

    à la vente de feuilles Letraset contenant des
    passages du Lorem Ipsum, et, plus récemment,
    par son</h4>

    <div class="container">
        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif

        <div class="row">
            @foreach ($structure as $onestructure)
                <div class="col-md-3">
                    <h3>{{ $onestructure->name }}</h3>
                    <h3>{{ $onestructure->type }}</h3>
                </div>
            @endforeach
        </div>
    </div>

@endsection
