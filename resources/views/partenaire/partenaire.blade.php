@extends("template")

@section('titre')
    Page Show single partenaire
@endsection
@if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif
@section('contenu')
    <h2>hello i am showing all partenaire</h2>
    <img src="../images/image1" alt="">

    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam nihil itaque provident laborum, exercitationem vel sint nisi neque minus suscipit architecto molestias quisquam magni eveniet nesciunt incidunt fugit. Quod, adipisci.</p><br>
    <a class="btn btn-info mb-2" href="{{ route('partenaire.create') }}">Ajouter une nouvelle Partenaire</a>
    <table class="table">

        <table class="table table-dark">
            <thead>
                <thead>
                    <tr>
                        <th>Id</td>
                        <th>NAME</td>
                        <th>TEXT</td>
                        <th>FOR ACTIONS</td>
                    </tr>
                </thead>
            <tbody>
                @foreach ($partenaire as $onePartenaire)
                    <tr class="table-active">
                    <tr>
                        <td>{{ $onePartenaire->id }}</td>
                        <td>{{ $onePartenaire->name }}</td>
                        <td>{{ $onePartenaire->text }}</td>
                        <td class="col-4 col-lg-3">

                            <div class="row">
                                <a class="btn btn-primary col mx-2" href="">Modifier</a>

                                <form class="col row mx-2" action="(rapports/{id})" method="post">
                                    @csrf
                                    @method("delete")
                                    <input type="hidden" name="id">
                                    <button class="btn btn-primary">Supprimer</button>
                                </form>
                            </div>
                        </td>
                    </tr>
        @endforeach

        </tbody>
    </table>
@endsection

