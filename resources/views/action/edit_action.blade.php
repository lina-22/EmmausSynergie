@extends("template")
@section('titre')
    Page Create oneStructure
@endsection
@section('contenu')
    <h1>create Action</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('action.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Address</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <textarea name="title" id="title" class="form-control" rows="5"></textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="image" class="form-control" id="image" name="image">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <input type="content" class="form-control" id="name" name="content">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @endsection
