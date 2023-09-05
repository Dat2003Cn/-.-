@extends('templates.layout')
@section('content')
<form action="{{ route('edit',['id'=>$products->id]) }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control" value="{{ $products->name }}" name="name" placeholder="Enter name">
    </div>
    <div class="mb-3">
      <label for="gender" class="form-label">gender</label>
      <input type="text" class="form-control" value="{{ $products->gender }}" name="gender" placeholder="Enter email">
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">phone</label>
        <input type="number" class="form-control" value="{{ $products->phone }}" name="phone" placeholder="Enter email">
      </div>
    <div class="mb-3">
        <label for="address" class="form-label">addres</label>
        <input type="text" class="form-control" value="{{ $products->address }}" name="address" placeholder="Enter email">
      </div>
    
</div>
    <button type="submit" class="btn btn-primary">Add Student</button>
  </form>




@endsection
