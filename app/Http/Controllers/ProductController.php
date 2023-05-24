<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'category' => ['required', 'string'],
            'name' => ['required', 'string'],
            'article' => ['required', 'string'],
            'purchase_price' => ['required', 'numeric'],
            'quantity' => ['required', 'integer'],
            'selling_price' => ['required', 'numeric'],
        ]);

        Product::create([
            'category' => $request->category,
            'name' => $request->name,
            'article' => $request->article,
            'purchase_price' => $request->purchase_price,
            'quantity' => $request->quantity,
            'selling_price' => $request->selling_price,
        ]);

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'category' => ['required', 'string'],
            'name' => ['required', 'string'],
            'article' => ['required', 'string'],
            'purchase_price' => ['required', 'numeric'],
            'quantity' => ['required', 'integer'],
            'selling_price' => ['required', 'numeric'],
        ]);

        $product->update([
            'category' => $request->category,
            'name' => $request->name,
            'article' => $request->article,
            'purchase_price' => $request->purchase_price,
            'quantity' => $request->quantity,
            'selling_price' => $request->selling_price,
        ]);

        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
}
