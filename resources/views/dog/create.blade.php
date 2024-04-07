@extends('layouts.app');
@section('title', 'dog - create')
@section('content-title', 'Dog - Create')
@section('content')
    <form action="{{ route('dogs.store') }}" method="post">
        @csrf
        <div><label>Name</label><input type="text" name="name" id="" class="form-control"></div>
        <br>
        <div><label>Color</label><input type="text" name="color" id="" class="form-control"></div>
        <div><label>Years</label><input type="text" name="years" id="" class="form-control"></div>
        <div class="my-3 text-end"><input type="submit" value="add" class="btn btn-warning mx-2"><input type="reset"
                value="clear" class="btn btn-outline-warning"></div>
    </form>
@endsection
