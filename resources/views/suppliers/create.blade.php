<!-- resources/views/suppliers/create.blade.php -->
<form action="{{ route('suppliers.store') }}" method="POST">
    @csrf

    <!-- Add form fields for the supplier attributes (name, address) -->
    <div>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>
    </div>
    <div>
        <label for="address">Address:</label>
        <input type="text" name="address" id="address" required>
    </div>

    <button type="submit">Create Supplier</button>
</form>
