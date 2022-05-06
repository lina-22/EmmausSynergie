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
    <h2>hello i am Action Dasboard </h2>
    <img src="../images/image1" alt="">

    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam nihil itaque provident laborum, exercitationem vel
        sint nisi neque minus suscipit architecto molestias quisquam magni eveniet nesciunt incidunt fugit. Quod, adipisci.
    </p><br>

    <a class="btn btn-info mb-2" href="{{ route('action.create') }}">Ajouter une nouvelle action</a>
    <table class="table">
        <table class="table table-dark">
            <thead>
                <tr>
                    <th>Id</td>
                    <th>ID ACTIVITIES</td>
                    <th> DATE ACTIONS</td>
                    <th>TITLE</td>
                    <th>ADDRESS</td>
                    <th>IMAGE</td>
                    <th>CONTENT</td>
                    <th>IF NEED</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($action as $oneaction)
                    <tr class="table-active">
                    <tr>
                        <td>{{ $oneaction->id }}</td>
                        <td>{{ $oneaction->idActivities }}</td>
                        <td>{{ $oneaction->dateAction }}</td>
                        <td>{{ $oneaction->title }}</td>
                        <td>{{ $oneaction->address }}</td>
                        <td>{{ $oneaction->image }}</td>
                        <td>{{ $oneaction->content }}</td>
                        <td class="col-4 col-lg-3">

                            <div class="row">
                                <a class="btn btn-primary col mx-2" href="actions/{id}/edit">Modifier</a>

                                <form class="col row mx-2" action="(action/{id})" method="post">
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
