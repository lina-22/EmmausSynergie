@extends("template")

@section('titre')
    Page Show single partenaire
@endsection
@if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif
@section('contenu')
    <h2>hello i am showing single partenaire</h2>
    <h4>{{ $activity->name }}</h4>


    <form action="{{ route('partenaire.edit', ['id' => $partenaire->id]) }}" method="POST">
        @csrf
        @method('GET')
        <button type="submit" class="btn btn-primary px-4 mx-1">Update</button>
    </form>
       <br>
    <form action="{{ route('partenaire.delete', ['id' => $partenaire->id]) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger px-4 mx-1">Delete</button>
    </form>
@endsection
