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

<a href="{{route('structure.show', ['id'=>$structure->id])}}">Edit</a>
<h4>{{$structure->name }}</h4>
<h4>{{$structure->type }}</h4>


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
@endsection
