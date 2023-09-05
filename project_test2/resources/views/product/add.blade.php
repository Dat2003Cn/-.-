@extends('templates.layout')
@section('content')
<form action="{{route('add')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control" name="name" placeholder="Enter name">
    </div>
    <div class="mb-3">
      <label for="gender" class="form-label">gender</label>
      <input type="text" class="form-control" name="gender" placeholder="Enter gender">
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">phone</label>
        <input type="number" class="form-control" name="phone" placeholder="Enter phone">
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">address</label>
        <input type="text" class="form-control" name="address" placeholder="Enter address">
      </div>
    <button type="submit" class="btn btn-primary">Add Student</button>
  </form>




@endsection
