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
    <h1>Edit Activity</h1>

    <form action="{{ route('activity.update',['id'=>$activity->id]) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input value="{{$activity->name}}" type="text" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <textarea name="type" id="type" class="form-control" rows="5"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @endsection
