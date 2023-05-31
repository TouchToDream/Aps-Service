<?php

namespace App\Http\Controllers;

use App\Models\Product;
use app\http\Requests\ProductRequest;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(10);
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(ProductRequest $request)
    {
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

    public function update(ProductRequest $request, Product $product)
    {
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
