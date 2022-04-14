@extends("template")

@section('titre')
    Page Show single activity
@endsection
@if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif
@section('contenu')
    <h2>hello i am showing single activity</h2>

    {{-- <a href="{{ route('activity.edit', ['id' => $activity->id]) }}">Edit</a> --}}
    <h4>{{ $activity->name }}</h4>
    <h4>{{ $activity->type }}</h4>

    <form action="{{ route('activity.edit', ['id' => $activity->id]) }}" method="POST">
        @csrf
        @method('GET')
        <button type="submit" class="btn btn-primary px-4 mx-1">Update</button>
    </form>
       <br>
    <form action="{{ route('activity.delete', ['id' => $activity->id]) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger px-4 mx-1">Delete</button>
    </form>
@endsection
