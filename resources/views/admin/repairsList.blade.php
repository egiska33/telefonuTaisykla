@extends('layouts.admin')

@section('content')
    <h2>User table</h2>
    @if(session('message'))
        <div class="alert alert-info">{{session('message')}}</div>
    @endif
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
                <td><form action="{{route('repairsList.delete', $repair)}}" method="POST"
                    style="display: inline"
                    onsubmit="return confirm('Are you sure?');">
                    <input type="hidden" name="_method" value="DELETE">
                    {{ csrf_field() }}
                    <button class="btn btn-danger  float-right">Delete</button>
                    </form><a href="{{route('repairsList.edit', $repair)}}" class="btn btn-primary float-right">Edit</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <ul class="pagination">
        {{ $repairs->links() }}
    </ul>

@endsection