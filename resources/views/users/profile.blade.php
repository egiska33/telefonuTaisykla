@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="col-md-10 col-md-offset-1">

            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">Data</th>
                    <th scope="col">Modelis</th>
                    <th scope="col">Komentaras</th>
                </tr>
                </thead>
                <tbody>

                @foreach($repairs as $repair)
                    <tr>
                        <th>{{ Carbon\Carbon::parse($repair->created_at)->diffForHumans() }}</th>
                        <td>{{$repair->phoneModel->phoneManufacturer->name}} {{$repair->phoneModel->model}}</td>
                        <td>{{$repair->message}} <a href="{{route('repair.edit', $repair)}}" class="btn btn-primary pull-right">Edit</a></td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>

    </div>
@endsection