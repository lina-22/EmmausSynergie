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
    <h2>hello i am showing single rapport</h2>


    <h4>{{ $rapport->annee }}</h4>
    <h4>{{ $rapport->fichier }}</h4>

    <form action="{{ route('rapport.edit', ['id' => $rapport->id]) }}" method="POST">
        @csrf
        @method('GET')
        <button type="submit" class="btn btn-primary px-4 mx-1">Update</button>
    </form>
       <br>
    <form action="{{ route('rapport.delete', ['id' => $rapport->id]) }}" method="POST">
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
