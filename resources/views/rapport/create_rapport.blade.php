@extends("template")
@section('titre')
    Page Create oneStructure
@endsection
@section('contenu')
    <h1>create Structure</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('rapport.store') }}" method="post" enctype="multipart/form-data" >
        @csrf

        <select class="form-control" id="id" name="idActivites">
            @foreach ($activities as $oneactivity )
              <option value="{{$oneactivity->id}}">{{$oneactivity->name}}:{{$oneactivity->type}}</option>
            @endforeach
        </select>
        <div class="mb-3">
            <label for="annee" class="form-label">annee</label>
            <input type="annee" class="form-control" id="annee" name="annee">
        </div>
        <div class="mb-3">

            <label for="fichier" class="form-label">fichier</label>
            <input name="fichier" id="fichier" class="form-control" type="file">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @endsection
