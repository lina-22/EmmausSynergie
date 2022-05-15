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

        <select class="form-control" id="id" name="idActivites">
            @foreach ($activites as $oneactivity )
              <option value="{{$oneactivity->id}}">{{$oneactivity->name}}:{{$oneactivity->type}}</option>
            @endforeach
        </select>

        <div class="mb-3">
            <label for="date" class="form-label">DateAction</label>
            <input type="date" class="form-control" id="date" name="dateAction">
        </div>
         {{-- 14/05 --}}
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
         {{-- 14/05 --}}
        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="address" class="form-control" id="address" name="address">
        </div>
 {{-- 14/05 --}}
 <div class="mb-3">
        <input type="file" name="image"><br>
    </div>
 {{-- 14/05 --}}
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <input type="text" class="form-control" id="content" name="content">
        </div>
 {{-- 14/05 --}}
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
