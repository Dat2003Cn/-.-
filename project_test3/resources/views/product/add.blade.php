@extends('templates.layout')
@section('content')
<form action="{{route('add')}}" method="post">
@csrf
<div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" name="name" class="form-control">
</div>
<div class="mb-3">
    <label for="gender" class="form-label">gender</label>
    <input type="text" name="gender" class="form-control">
</div>
<div class="mb-3">
    <label for="address" class="form-label">address</label>
    <input type="text" name="address" class="form-control">
</div>
<div class="mb-3">
    <label for="phone" class="form-label">Phone</label>
    <input type="number" name="phone" class="form-control">
</div>
<button type="submit"> add </button>
</form>
    
@endsection