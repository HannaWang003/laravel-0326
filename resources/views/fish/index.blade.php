@extends('layouts.app')
@section('title', 'fish')
@section('content-title', 'Fish')
@section('content')
    <p>The .table-hover class enables a hover state (grey background on mouse over) on table rows:</p>
    <div class="text-end"><button class="btn btn-primary" onclick="location.href='{{ route('fish.create') }}'">Add</button>
    </div>
    <table class="table table-hover">
        <thead>
            <tr>
                <th class="text-center">item</th>
                <th class="text-center">name</th>
                <th class="text-center">color</th>
                <th class="text-center">years</th>
                <th class="text-center">operate</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $idx => $val)
                <tr>
                    <td class="text-center">{{ $idx + 1 }}</td>
                    <td class="text-center">{{ $val->name }}</td>
                    <td class="text-center">{{ $val->color }}</td>
                    <td class="text-center">{{ $val->years }}</td>
                    <td class="d-flex justify-content-center">
                        <a href="{{ route('fish.edit', $val->id) }}" class="mx-2"><button
                                class="btn btn-outline-secondary">EDIT</button></a>
                        <form action="{{ route('fish.destroy', $val->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-secondary">DEL</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
