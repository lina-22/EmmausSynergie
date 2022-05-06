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
    <h2>hello i am Rapport Page </h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam nihil itaque provident laborum, exercitationem vel sint nisi neque minus suscipit architecto molestias quisquam magni eveniet nesciunt incidunt fugit. Quod, adipisci.</p><br>
    <a class="btn btn-info mb-2" href="{{ route('rapport.create') }}">Ajouter une nouvelle rapport</a>
    <table class="table">

        <table class="table table-dark">
            <thead>
                <thead>
                    <tr>
                        <th>Id</td>
                        <th>ID ACTIVITIES</td>
                        <th> ANNEE</td>
                        <th>FICHIER</td>
                        <th>FURTHER ACTIONS</td>
                    </tr>
                </thead>
            <tbody>
                @foreach ($rapport as $oneRapport)
                    <tr class="table-active">
                    <tr>
                        <td>{{ $oneRapport->id }}</td>
                        <td>{{ $oneRapport->idActivites }}</td>
                        <td>{{ $oneRapport->annee}}</td>
                        <td>{{ $oneRapport->fichier}}</td>
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

