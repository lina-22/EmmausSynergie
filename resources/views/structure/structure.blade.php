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

    <form action="">
        helloooo
    </form>
    <form action="{{ route('structure.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <textarea name="type" id="type" class="form-control" rows="5"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

{{-- <table class="table">
    @csrf
    <thead>
        <th>
           <td>Name</td>
           <td>Type</td>

        </th>
    </thead>
    <tbody>
        @foreach ($structures as $oneStructure)
        <div class="col-md-3">

            <h3>{{$oneStructure->name}}</h3>
            <h3>{{$oneStructure->type}}</h3>
        </div>
        @endforeach

    </tbody> --}}
</table>

@endsection
