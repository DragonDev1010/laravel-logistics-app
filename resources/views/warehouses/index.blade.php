<!-- resources/views/warehouses/index.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Warehouse List</h1>

    @if (count($warehouses) > 0)
        <ul>
            @foreach ($warehouses as $warehouse)
                <li>{{ $warehouse->name }} - {{ $warehouse->address }}</li>
            @endforeach
        </ul>
    @else
        <p>No warehouses found.</p>
    @endif
@endsection
