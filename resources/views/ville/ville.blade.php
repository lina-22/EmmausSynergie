@extends("template")

@section('titre')
    Page Show single ville
@endsection
@if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif
@section('contenu')
    <h2>hello i am showing All ville</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam nihil itaque provident laborum, exercitationem vel sint nisi neque minus suscipit architecto molestias quisquam magni eveniet nesciunt incidunt fugit. Quod, adipisci.</p>
    <a class="btn btn-info mb-2" href="{{ route('ville.create') }}">Ajouter une nouvelle ville</a>
    <table class="table">

        <table class="table table-dark">
            <thead>
                <thead>
                    <tr>
                        <th>Id</td>
                        <th>NAME</td>
                        <th>MANAGE VILLES</td>
                    </tr>
                </thead>
            <tbody>
                @foreach ($ville as $oneVille)
                    <tr class="table-active">
                    <tr>
                        <td>{{ $oneVille->id }}</td>
                        <td>{{ $oneVille->name }}</td>
                        <td class="col-4 col-lg-3">

                            <div class="row">
                                <form action="{{ route('ville.edit', ['id' => $oneVille->id]) }}" method="POST">
                                    @csrf
                                    @method('GET')
                                    <button type="submit" class="btn btn-primary px-4 mx-1">Update</button>
                                </form>
                                   <br>
                                <form action="{{ route('ville.delete', ['id' => $oneVille->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger px-4 mx-1">Delete</button>
                                </form>

                            </div>
                        </td>
                    </tr>
        @endforeach

        </tbody>
    </table>
@endsection
