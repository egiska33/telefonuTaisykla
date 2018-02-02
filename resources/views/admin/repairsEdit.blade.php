@extends('layouts.admin')

@section('content')
    <h2 class="text-center">Edit repair info</h2>
    @if ($errors->count() > 0)
        <ul>
            @foreach($errors->all() as $error)
                <li class="alert alert-danger">{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <hr>
    <form action="{{route('repairsList.update', $repair)}}" method="post" class="col-md-6 offset-md-3">
        <input type="hidden" name="_method" value="PUT">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="manufacturer">Select Phone model</label>
            <select class="form-control" name="phone_model_id">
                    <option value="{{$repair->phoneModel->id}}">{{$repair->phoneModel->phoneManufacturer->name}} {{$repair->phoneModel->model}}</option>
                @foreach($models as $model)
                    <option value="{{$model->id}}">{{$model->phoneManufacturer->name}} {{$model->model}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea class="form-control" name="message" rows="3">{{$repair->message}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
    <br>


@endsection