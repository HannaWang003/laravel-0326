@extends('layouts.app')

@section('title', 'Animal - page')

@section('card')
    @for ($i = 1; $i <= 3; $i++)
        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">cat{{ $i }}</h5>
                <p class="card-text"></p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    @endfor

@endsection

@section('content_detail')
    <p>123</p>
    <p>456</p>
@endsection
