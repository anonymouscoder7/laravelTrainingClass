@extends('layouts.app')

@section('content')
<form action="/save" method="post" class="p-4">
    @csrf
    <h1>Student Details</h1>
    <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input type="text" class="form-control" name="name" placeholder="Enter name">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input type="email" class="form-control" name="email" placeholder="Enter email">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Contact</label>
        <input type="text" class="form-control" name="contact" placeholder="Enter Contact No.">
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection
