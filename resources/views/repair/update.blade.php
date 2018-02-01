@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <form action="{{route('repair.update', $repair)}}" method="post">
                    <input type="hidden" name="_method" value="PUT">
                    {{ csrf_field() }}
                    <div class="form-group col-md-4 col-md-offset-4">
                        <label for="model">Pasirinkite modeli</label>
                        <select class="form-control" name="model_id">
                            <option value="{{$repair->model->model_id}}">{{$repair->model->manufacturer->name}} {{$repair->model->model}}</option>
                            @foreach($models as $model)
                                <option value="{{$model->id}}">{{$model->manufacturer->name}} {{$model->model}}</option>
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