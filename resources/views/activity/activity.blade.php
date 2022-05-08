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
                        <th> VILLE NAME</td>
                        <th>TYPE</td>
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
                        {{-- <td class="col-4 col-lg-3">

                            <div class="row">
                                <a class="btn btn-primary col mx-2" href="{{ route('activity.edit', ['id' => $oneActivity->id]) }}">Modifier</a>

                                <form class="col row mx-2" action="{{ route('activity.delete', ['id' => $oneActivity->id]) }}" method="post">
                                    @csrf
                                    @method("delete")
                                    <input type="hidden" name="id">
                                    <button class="btn btn-primary">Supprimer</button>
                                </form>
                            </div>
                        </td> --}}
                        <td class="col-4 col-lg-3">
                            <div class="row">
                            <form action="{{ route('activity.edit', ['id' => $oneActivity->id]) }}" method="POST">
                                @csrf
                                @method('GET')
                                <button type="submit" class="btn btn-primary px-4 mx-1">Update</button>
                            </form>
                               <br>
                            <form action="{{ route('activity.delete', ['id' => $oneActivity->id]) }}" method="POST">
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
