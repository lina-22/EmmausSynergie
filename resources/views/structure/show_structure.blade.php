@extends("template")

@section('titre')
    Page Show single structure
@endsection
@if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif
@section('contenu')
    <h2>hello i am showing single structure</h2>

    {{-- <a href="{{ route('structure.edit', ['id' => $structure->id]) }}">Edit</a> --}}
    <h4>{{ $structure->name }}</h4>
    <h4>{{ $structure->type }}</h4>

    <form action="{{ route('structure.edit', ['id' => $structure->id]) }}" method="POST">
        @csrf
        @method('GET')
        <button type="submit" class="btn btn-primary px-4 mx-1">Update</button>
    </form>
       <br>
    <form action="{{ route('structure.delete', ['id' => $structure->id]) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger px-4 mx-1">Delete</button>
    </form>
@endsection


{{-- <table class="table">
    <thead>
        <th>
           <td>Name</td>
           <td>Type</td>
        </th>
    </thead>
    <tbody>
        @foreach ($structure as $oneStructure)
        <div class="col-md-3">

            <li>{{$oneStructure->name}}</li>
            <li>{{$oneStructure->type}}</li>
        </div>
        @endforeach

    </tbody>
</table> --}}
