@extends('layouts.admin')

@section('content')
    <h2>User table</h2>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Model</th>
            <th scope="col">Message</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($repairs as $repair)
            <tr>
                <td>{{$repair->user->name}}</td>
                <td>{{$repair->model->manufacturer->name}} {{$repair->model->model}}</td>
                <td>{{$repair->message}}</td>
                <td><a href="" class="btn btn-danger float-right">Delete</a><a href="" class="btn btn-primary float-right">Edit</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <ul class="pagination">
        {{ $repairs->links() }}
    </ul>

@endsection