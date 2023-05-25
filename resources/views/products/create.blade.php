<!-- resources/views/products/create.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Create Product</h1>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf

        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required>
        </div>

        <div>
            <label for="price">Price:</label>
            <input type="number" name="price" id="price" required>
        </div>

        <div>
            <select name="warehouse_id" class="form-control" id="warehouse_id" required>
                <option value="">Select Warehouse</option>
                @foreach ($warehouses as $warehouse)
                    <option value="{{ $warehouse->id }}">{{ $warehouse->name }}</option>
                @endforeach
            </select>
        </div>
        </div>

        <button type="submit">Create</button>
    </form>
@endsection
