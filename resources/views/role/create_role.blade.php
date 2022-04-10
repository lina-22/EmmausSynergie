@extends("template")

@section('titre')
    Page Create Role
@endsection

@section('contenu')



        <h1>create role</h1>
        <div class="container">
            <div class="row">

                <form action="{{ route('role.create') }}" method="post">
                    @csrf

                    <div class="mb-3">
                        <label for="title" class="form-label">Name</label>
                        <input type="text" class="form-control" id="title" name="name">
                        <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        </div>
@endsection
