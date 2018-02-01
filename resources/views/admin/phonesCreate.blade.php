@extends('layouts.admin')

@section('content')
    <h2 class="text-center">Add phone model</h2>
    <hr>
    <form action="{{route('phones.store')}}" method="POST" class="col-md-6 offset-md-3">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="model">Add Phone</label>
            <input type="text" class="form-control" name="name" >
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
    </form>
    <br>


@endsection