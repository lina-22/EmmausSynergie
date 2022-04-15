@extends("template")
@section('titre')
    Page Create oneStructure
@endsection
@section('contenu')
    <h1>Edit partenaire</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('partenaire.update',['id'=>$partenaire->id]) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3">
            <label for="text" class="form-label">Text</label>
            <input type="text" class="form-control" id="text" name="text">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @endsection
