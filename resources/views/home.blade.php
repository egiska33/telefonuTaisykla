@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @if(session('message'))
            <div class="alert alert-info">{{session('message')}}</div>
        @endif
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h2 class="text-center">Hello you visit phone repair service</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-10 col-md-offset-1">

        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Vardas</th>
                <th scope="col">Modelis</th>
                <th scope="col">Komentaras</th>
                <th scope="col">Data</th>
            </tr>
            </thead>
            <tbody>

            @foreach($repairs as $repair)
                <tr>
                    <th>{{$repair->user->name}}</th>
                    <td>{{$repair->phoneModel->phoneManufacturer->name}} {{$repair->phoneModel->model}}</td>
                    <td>{{$repair->message}}</td>
                    <td>{{$repair->created_at->diffForHumans()}}</td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
    <p>
        {{ $repairs->links() }}
        <a href="{{route('repair.create')}}" class="btn btn-primary pull-right">Add</a>
    </p>
</div>
@endsection
