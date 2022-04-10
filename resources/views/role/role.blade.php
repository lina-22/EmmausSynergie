@extends("template")

@section("titre")
Page Role
@endsection

@section("contenu")
<table class="table">
    @csrf
    <thead>
        <th>
           <td>Name</td>

        </th>
    </thead>
    <tbody>
        @foreach ($role as $oneRole)
           <tr>
               <td>{{$oneRole->name}}</td>
               <td>aaa</td>
           </tr>
        @endforeach

    </tbody>
</table>

@endsection
