@extends("template")
@section('titre')
    Page Create Ville
@endsection
@section('contenu')
    <h1>create Ville</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('ville.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @endsection
