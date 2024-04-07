@extends('layouts.app');
@section('title', 'Dog - edit');
@section('content-title', 'Dog - edit')
@section('content')
    <form action="{{ route('dogs.update', $data->id) }}" method="post">
        @csrf
        @method('PUT')
        <div><label>Name</label><input type="text" name="name" value="{{ $data->name }}" class="form-control"></div>
        <br>
        <div><label>Color</label><input type="text" name="color" value="{{ $data->color }}" class="form-control"></div>
        <div><label>Years</label><input type="text" name="years" value="{{ $data->years }}" class="form-control">
        </div>
        <div class="my-3 text-end"><input type="submit" value="edit" class="btn btn-warning mx-2"><input type="reset"
                value="clear" class="btn btn-outline-warning"></div>
    </form>

@endsection
