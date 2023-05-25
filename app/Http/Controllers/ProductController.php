<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Warehouse;

class ProductController extends Controller
{
    public function index()
    {
        // Retrieve the list of products from the database
        $products = Product::all();

        // Pass the warehouses data to the view
        return view('products.index', ['products' => $products]);
    }

    public function create()
    {
        $warehouses = Warehouse::all();
        return view('products.create', compact('warehouses'));
    }

    public function store(Request $request)
    {
        // dd($request);
        $data = $request->validate([
            'name' => 'required',
            'price' => 'required',
            'warehouse_id' => 'required'
        ]);

        $product = new Product();
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        // Retrieve the corresponding warehouse by ID
        $warehouse = Warehouse::find($request->input('warehouse_id'));

        // Associate the warehouse with the product
        $product->warehouse()->associate($warehouse);
        $product->save();

        // Redirect to a relevant page or return a response
        // For example, you can redirect back to the warehouse index page
        return redirect()->route('products.index');
    }
}
