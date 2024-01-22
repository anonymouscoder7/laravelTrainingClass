@extends('layout.main')
@section('title','Edit')
@section('content')
<form action="/update/{{$student->id}}" method="post" class="p-4">
    @csrf
    <h1>Edit Student Details</h1>
    <!-- <input type="hidden" name="studentid" value="{{$student->id}}" id=""> -->
    <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input type="text" class="form-control" value="{{$student->name}}" name="name" placeholder="Enter name">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input type="email" class="form-control" value="{{$student->email}}" name="email" placeholder="Enter email">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Contact</label>
        <input type="text" class="form-control" value="{{$student->contact}}" name="contact" placeholder="Enter Contact No.">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection