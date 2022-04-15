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
    <form action="{{ route('rapport.update',['id'=>$rapport->id]) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Annee</label>
            <input type="text" class="form-control" id="name" name="annee">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Fichier</label>
            <textarea name="fichier" id="type" class="form-control" rows="5"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @endsection
