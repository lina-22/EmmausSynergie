@extends("template")
@section('titre')
    Page Create Rapport
@endsection
@section('contenu')
    <h1>Edit Rapport</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('rapport.update', $rapport->id) }}" method="post" enctype="multipart/form-data" >
        @csrf
       @method("put")
        <select class="form-control" id="id" name="idActivites">
            @foreach ($activities as $oneactivity )
              <option selected="{{$rapport->idActivites==$oneactivity->id}}" value="{{$oneactivity->id}}">{{$oneactivity->name}}:{{$oneactivity->type}}</option>
            @endforeach
        </select>
        <div class="mb-3">
            <label for="annee" class="form-label">annee</label>
            <input value="{{$rapport->annee}}" type="annee" class="form-control" id="annee" name="annee">
        </div>
        <div class="mb-3">

            <label for="fichier" class="form-label">fichier</label>
            <input name="fichier" id="fichier" class="form-control" type="file">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @endsection

    {{-- <form action="{{ route('rapport.update',['id'=>$rapport->id]) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="annee" class="form-label">Annee</label>
            <input type="text" class="form-control" id="annee" name="annee">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Fichier</label>
            <textarea name="fichier" id="type" class="form-control" rows="5"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @endsection --}}
