<head>
    <link rel="stylesheet" href="<?php echo asset('cssFile/activity/create.css'); ?>" type="text/css">
</head>

@extends("template")
@section('titre')
    Page Create oneStructure
@endsection

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@section('contenu')
    <h1>create Activity</h1>

    <div class="continer">
        <div class="row">
            <div class="colum">
                <div class="activity">

                    <form action="{{ route('activity.store') }}" method="post">
                        @csrf

                        <div class="mb-3">
                            <label for="idVille" class="form-label">idVille</label>
                            <select class="form-control" id="id" name="idVilles">
                                <option disabled selected value="">Select a city</option>
                             @foreach ($villes as $oneville )
                                <option value="{{$oneville->id}}">{{$oneville->name}}</option>

                              @endforeach
                          </select>

                        </div>


                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="mb-3">
                            <label for="type" class="form-label">Type</label>
                            <textarea name="type" id="type" class="form-control" rows="5"></textarea>
                        </div>
                        <button type="submit" class="btn btn-secondary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
