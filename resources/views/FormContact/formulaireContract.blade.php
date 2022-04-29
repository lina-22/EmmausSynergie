@extends("template")

@section('titre')
   Faire Inscription
@endsection
@if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif
@section('contenu')
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    <label for="exampleFormControlInput1" class="form-label">Password</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="password">
  </div>

@endsection
