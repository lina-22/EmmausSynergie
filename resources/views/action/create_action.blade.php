@extends("template")
@section('titre')
    Page Create oneAction
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
    <h1>create Action</h1>


    <form action="{{ route('action.store') }}" enctype="multipart/form-data" method="POST">
        @csrf

        <div class="mb-3">
            <label for="idActivities" class="form-label">idActivities</label>
            <select class="form-control" id="id" name="idActivities">
                @foreach ($activities as $oneactivity )
                  <option value="{{$oneactivity->id}}">{{$oneactivity->name}}:{{$oneactivity->type}}</option>
                @endforeach
            </select>

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

        {{-- <div class="row mb-2">
            <label for="image">Image</label>
            <input name="drapeau" required type="file" accept="image" class="form-control" id="image" placeholder="Rechercher une image">
            @error('image')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div> --}}

        {{-- <form action="{{ route('action.store') }}" enctype="multipart/form-data" method="POST">
            @csrf --}}
        <input type="text" name="name" placeholder="Image name"><br>
        <input type="file" name="image"><br>

        {{-- <button> save images</button>
        </form> --}}

        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <input type="text" class="form-control" id="content" name="content">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
