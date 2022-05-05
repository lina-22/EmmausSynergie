@extends("template")

@section('titre')
    Gestion des activites/  Page Show Les activites
@endsection

@section('contenu')
    <h1 class="my-2">Les activites/  Page Show Les activites</h1>
    <a class="btn btn-info mb-2" href="{{ route('activity.create') }}">Ajouter une nouvelle activite</a>
    <table class="table">



        <table class="table table-dark">
            <thead>
                <thead>
                    <tr>
                        <th>Id</td>
                        <th>TYPE</td>
                        <th> VILLE NAME</td>
                        <th>ID VILLE</td>
                        <th>IF NEED</td>
                    </tr>
                </thead>
            <tbody>
                @foreach ($activity as $oneActivity)
                    <tr class="table-active">
                    <tr>
                        <td>{{ $oneActivity->id }}</td>
                        <td>{{ $oneActivity->name }}</td>
                        <td>{{ $oneActivity->type }}</td>
                        <td>{{ $oneActivity->idVilles }}</td>
                        <td class="col-4 col-lg-3">

                            <div class="row">
                                <a class="btn btn-primary col mx-2" href="{{ route('activity.all') }}">Modifier</a>

                                <form class="col row mx-2" action="(activites/{id})" method="post">
                                    @csrf
                                    @method("delete")
                                    <input type="hidden" name="id">
                                    <button class="btn btn-primary">Supprimer</button>
                                </form>
                            </div>
                        </td>
                    </tr>
            </tbody>
        </table>
        </div>
        @endforeach

        </tbody>
    </table>
@endsection
