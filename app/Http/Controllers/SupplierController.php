<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        // Retrieve the list of suppliers from the database
        $suppliers = Supplier::all();
    
        // Pass the suppliers data to the view
        return view('suppliers.index', ['suppliers' => $suppliers]);
    }
  
    public function create()
    {
        return view('suppliers.create');
    }
    
    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required',
            'address' => 'required',
        ]);
    
        // Create a new supplier
        $supplier = new Supplier();
        $supplier->name = $request->input('name');
        $supplier->address = $request->input('address');
        $supplier->save();
    
        // Redirect to a success page or perform any other actions
        return redirect()->route('suppliers.index')->with('success', 'Supplier created successfully.');
    }
  
}
