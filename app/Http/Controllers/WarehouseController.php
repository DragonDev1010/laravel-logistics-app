<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Warehouse;
use App\Models\Supplier;

class WarehouseController extends Controller
{
    public function index()
    {
        // Retrieve the list of warehouses from the database
        $warehouses = Warehouse::all();

        // Pass the warehouses data to the view
        return view('warehouses.index', ['warehouses' => $warehouses]);
    }

    public function create()
    {
        $suppliers = Supplier::all();
        return view('warehouses.create', compact('suppliers'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'supplier_id' => 'required'
        ]);

        // Warehouse::create($data);
        $warehouse = new Warehouse();
        $warehouse->name = $request->input('name');
        $warehouse->address = $request->input('address');
        // Retrieve the corresponding supplier by ID
        $supplier = Supplier::find($request->input('supplier_id'));

        // Associate the supplier with the warehouse
        $warehouse->supplier()->associate($supplier);
        $warehouse->save();

        // Redirect to a relevant page or return a response
        // For example, you can redirect back to the warehouse index page
        return redirect()->route('warehouses.index');
    }
}
