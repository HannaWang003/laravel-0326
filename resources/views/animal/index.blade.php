@extends('layouts.app')

@section('title', 'Animal - page')
@section('content_detail')
    <div class="d-flex justify-content-around">
        @for ($i = 1; $i <= 3; $i++)
            @php
                $r = rand(200, 500);
            @endphp
            <div class="col-3 card" style="width: 18rem;">
                <img src="https://picsum.photos/id/{{ $r }}/200/200" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">cat{{ $i }}</h5>
                    <p class="card-text"></p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        @endfor
    </div>
    <p>123</p>
    <p>456</p>
@endsection
