@extends('templates.layout')
@section('content')

   

    <form action="{{ url('/student') }}" method="post">
        @csrf
        
        
        
    </form>
    
    <table class="table" border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>phone</th>
                <th>gender</th>
                
                <th>address</th>
                {{-- <th>Address</th>
                <th>Date</th> --}}
            </tr>
        </thead>
        @foreach($students as $st)
            <tr>
                <td>{{ $st->id }}</td>
                <td>{{ $st->name }}</td>
                <td>{{$st->phone}}</td>
                <td>{{ $st->gender }}</td>
               <td>{{$st->address}}</td>
                <td><a href="{{route('delete',['id'=>$st->id])}}">xóa</a></td>
                {{-- <td>{{ $st->address }}</td>
                <td>{{ $st->date_of_birth }}</td> --}}

                
            </tr>
            
        @endforeach
    </table>
@endsection