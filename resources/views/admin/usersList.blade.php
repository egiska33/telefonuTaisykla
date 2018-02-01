@extends('layouts.admin')

@section('content')
    <h2>User table</h2>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>123456</td>
        </tr>
        @endforeach
        </tbody>
    </table>
    {{ $users->links() }}

@endsection