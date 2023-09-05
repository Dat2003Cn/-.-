@extends('templates.layout')
@section('content')
<form action="{{ route('edit',['id'=>$students->id]) }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control" value="{{ $students->name }}" name="name" >
    </div>
    <div class="mb-3">
      <label for="gender" class="form-label">gender</label>
      <input type="text" class="form-control" value="{{ $students->gender }}" name="gender">
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">phone</label>
        <input type="number" class="form-control" value="{{ $students->phone }}" name="phone" >
      </div>
    <div class="mb-3">
        <label for="address" class="form-label">addres</label>
        <input type="text" class="form-control" value="{{ $students->address }}" name="address" >
      </div>
    
</div>
    
    {{-- <div class="mb-3">
      <label for="address" class="form-label">Address</label>
      <textarea class="form-control" name="address" rows="3" placeholder="Enter address"></textarea>
    </div>
    <div class="mb-3">
        <label for="date" class="form-label">Date òf birth</label>
        <input type="text" class="form-control" name="date" placeholder="Enter date">
      </div> --}}
    <button type="submit" class="btn btn-primary">Add Student</button>
  </form>




@endsection
