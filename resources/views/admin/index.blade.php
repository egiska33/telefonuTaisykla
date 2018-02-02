@extends('layouts.admin')
    @section('content')
        <h1>Admin Panel</h1>
        @if(session('message'))
            <div class="alert alert-info">{{session('message')}}</div>
        @endif
        <ul class="list-group">
        @foreach($phones as $phone)
                <li class="list-group-item"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">{{$phone->name}}</a>
                    <ul class="dropdown-menu" role="menu">
                        @foreach($phone->phoneModels as $phoneModel)
                        <li>{{$phoneModel->model}}</li>
                        @endforeach
                    </ul>
                </li>
        @endforeach
        </ul>
    @endsection
