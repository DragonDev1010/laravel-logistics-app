<!-- resources/views/suppliers/index.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Suppliers List</h1>

    @if (count($suppliers) > 0)
        <ul>
            @foreach ($suppliers as $supplier)
                <li>{{ $supplier->name }} - {{ $supplier->address }}</li>
            @endforeach
        </ul>
    @else
        <p>No suppliers found.</p>
    @endif
@endsection
