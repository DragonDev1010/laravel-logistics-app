<!-- resources/views/warehouses/create.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Create Warehouse</h1>

    <form action="{{ route('warehouses.store') }}" method="POST">
        @csrf

        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required>
        </div>

        <div>
            <label for="address">Address:</label>
            <input type="text" name="address" id="address" required>
        </div>

        <div>
            <!-- <label for="supplier_id">Supplier ID:</label>
            <input type="number" name="supplier_id" class="form-control" id="supplier_id" required> -->

            <select name="supplier_id" class="form-control" id="supplier_id" required>
                <option value="">Select Supplier</option>
                @foreach ($suppliers as $supplier)
                    <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
                @endforeach
            </select>
        </div>
        </div>

        <button type="submit">Create</button>
    </form>
@endsection
