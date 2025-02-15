<?php
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
        ]);

        Product::create($request->all());

        return redirect()->route('products.create')->with('success', 'Product added successfully.');
    }

    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }
    
    public function edit($id)
    {
        $product = Product::findOrFail($id); // recherche le produit selon l'id
        return view('products.edit', compact('product'));
    }

}
