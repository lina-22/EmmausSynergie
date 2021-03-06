@extends("template")

@section('titre')
    Page Show single action
@endsection
@if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif
@section('contenu')
    <h2>hello i am showing single action</h2>

    <h4>{{ $action->address }}</h4>
    <h4>{{ $action->title }}</h4>
    {{-- <h4>{{ $action->image}}</h4> --}}
    <h4>{{ $action->content}}</h4>


    <form action="{{ route('action.edit', ['id' => $action->id]) }}" method="POST">
        @csrf
        @method('GET')
        <button type="submit" class="btn btn-primary px-4 mx-1">Update</button>
    </form>
       <br>
    <form action="{{ route('action.delete', ['id' => $action->id]) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger px-4 mx-1">Delete</button>
    </form>
@endsection
