@extends('templates.layout')
@section('content')

<table class="table" border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>name</th>
            <th>gender</th>
            <th>address</th>
            <th>phone</th>
        </tr>

    </thead>
    @foreach ($products as $st)
        <tr>
            <td>{{$st->id}}</td>
            <td>{{$st->name}}</td>
            <td>{{$st->gender}}</td>
            <td>{{$st->address}}</td>
            <td>{{$st->phone}}</td>
            <td><a href="{{route('delete',['id'=>$st->id])}}">xóa</a></td>
        </tr>
    @endforeach

</table>
    
@endsection