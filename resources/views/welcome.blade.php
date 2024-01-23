@extends('layout.main')
    

@section('content')


<div class="card">
    <div class="card-body">
        <h1>students</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 0; ?>

                @foreach($students as $data)
                <tr>
                    <td>{{++$i}}</td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->email}}</td>
                    <td>{{$data->contact}}</td>
                    <td>
                        <a href="/edit/{{$data->id}}" class="btn btn-primary">Edit</a>
                        <a href="/delete/{{$data->id}}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
