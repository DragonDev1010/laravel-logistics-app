<!-- resources/views/products/index.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Product List</h1>

    @if (count($products) > 0)
        <ul>
            @foreach ($products as $product)
                <li>{{ $product->name }} - {{ $product->price }}</li>
            @endforeach
        </ul>
    @else
        <p>No products found.</p>
    @endif
@endsection
