@extends("template")
@section('titre')
    Page Create oneStructure
@endsection
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @section('contenu')
    <h1>Update Action</h1>
    <form action="{{ route('action.store') }}" enctype="multipart/form-data" method="POST">
        @csrf

        <div class="mb-3">
            <label for="idActivities" class="form-label">idActivities</label>
            <input type="number" class="form-control" id="id" name="idActivities">
        </div>

        <div class="mb-3">
            <label for="date" class="form-label">DateAction</label>
            <input type="date" class="form-control" id="date" name="date">
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="address" class="form-control" id="address" name="address">
        </div>
            <input type="text" name="name" placeholder="Image name"><br>
            <input type="file" name="image"><br>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <input type="text" class="form-control" id="content" name="content">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @endsection
