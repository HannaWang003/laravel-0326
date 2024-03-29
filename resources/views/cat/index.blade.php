@extends('layouts.app')
@section('title', 'cat')
@section('content_detail')
    <div class="container mt-3">
        <h2>Hover Rows</h2>
        <p>The .table-hover class enables a hover state (grey background on mouse over) on table rows:</p>
        <div class="text-end"><button class="btn btn-primary" onclick="location.href='{{ route('cats.create') }}'">Add</button>
        </div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th class="text-center">id</th>
                    <th class="text-center">name</th>
                    <th class="text-center">color</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $val)
                    <tr>
                        <td class="text-center">{{ $val->name }}</td>
                        <td class="text-center">{{ $val->color }}</td>
                        <td class="d-flex justify-content-center">
                            <a href="{{ route('cats.edit', $val->id) }}" class="mx-2"><button
                                    class="btn btn-outline-secondary">EDIT</button></a>
                            <form action="{{ route('cats.destroy', $val->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-secondary">DEL</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
