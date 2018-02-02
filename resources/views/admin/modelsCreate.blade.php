@extends('layouts.admin')

@section('content')
    <h2 class="text-center">Add phone model</h2>
    @if ($errors->count() > 0)
        <ul>
            @foreach($errors->all() as $error)
                <li class="alert alert-danger">{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <hr>
    <form action="{{route('models.store')}}" method="POST" class="col-md-6 offset-md-3">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="manufacturer">Select Phone</label>
            <select class="form-control" name="phone_manufacturer_id">
                @foreach($phones as $phone)
                <option value="{{$phone->id}}">{{$phone->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="model">Add Model</label>
            <input type="text" class="form-control" name="model" >
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
    </form>
    <br>


@endsection