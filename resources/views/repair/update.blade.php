@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @if ($errors->count() > 0)
                    <ul>
                        @foreach($errors->all() as $error)
                            <li class="alert alert-danger">{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
                <form action="{{route('repair.update', $repair)}}" method="post">
                    <input type="hidden" name="_method" value="PUT">
                    {{ csrf_field() }}
                    <div class="form-group col-md-4 col-md-offset-4">
                        <label for="model">Pasirinkite modeli</label>
                        <select class="form-control" name="phone_model_id">
                            <option value="{{$repair->phoneModel->id}}">{{$repair->phoneModel->phoneManufacturer->name}} {{$repair->phoneModel->model}}</option>
                            @foreach($models as $model)
                                <option value="{{$model->id}}">{{$model->phoneManufacturer->name}} {{$model->model}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="message">Palikite zinute iki 160 simboliu</label>
                        <textarea class="form-control"  rows="3" name="message" >{{$repair->message}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

@endsection