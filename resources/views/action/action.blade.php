@extends('template')

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
                    <th>CONTENT</td>
                    <th>IMAGE</td>
                    <th>ACTION</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($action as $oneaction)
                    <tr class="table-active">
                    <tr>
                        <td>{{ $oneaction->id }}</td>
                        <td>{{ $oneaction->idActivites }}</td>
                        <td>{{ $oneaction->dateAction }}</td>
                        <td>{{ $oneaction->title }}</td>
                        <td>{{ $oneaction->address }}</td>
                        <td>{{ $oneaction->content }}</td>
                        <td><img width="100%" src="{{ asset('/uploads') }}/{{ $oneaction->image }}" alt=""></td>

                        <td class="col-4 col-lg-3">
                            <div class="row">
                                <form action="{{ route('action.edit', ['id' => $oneaction->id]) }}" method="POST">
                                    @csrf
                                    @method('GET')
                                    <button type="submit" class="btn btn-primary px-4 mb-2 mx-1">Update</button>
                                </form>
                                <br>
                                <form action="{{ route('action.delete', ['id' => $oneaction->id]) }}" method="POST">
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





                        {{-- <td>
                            <div class="row"> --}}
                                {{-- @foreach ($action as $oneaction) --}}
                                    {{-- <div class="col-md-3">
                                        <img width="100%" src="{{ asset('/uploads') }}/{{ $oneaction->image }}" alt="">
                                    </div> --}}
                                {{-- @endforeach --}}
                            {{-- </div>
                        </td> --}}
