<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;

class ProductController extends Controller
{
    //

    public function index()
    {
        $products = Products::all();
        return view('user.product.index', compact('products'));
    }

    public function create()
    {
        return view('user.product.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'image_url' => 'required|image|max:2048',
        ]);

        $path = $request->file('image_url')->store('products', 'public');

        Products::create([
            'name' => $request->name,
            'price' => $request->price,
            'image_url' => $path,
        ]);

        return redirect()->route('user.product.index')->with('success', 'Product added successfully!');
    }

    public function edit(Products $product)
    {
        return view('user.product.edit', compact('product'));
    }
    public function update(Request $request, Products $product)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'price' => 'required|numeric',
        'image_url' => 'nullable|image|max:2048',
    ]);

    $data = [
        'name' => $request->name,
        'price' => $request->price,
    ];

    if ($request->hasFile('image')) {
        $data['image_url'] = $request->file('image')->store('products', 'public');
    }

    $product->update($data);

    return redirect()->route('admin.products.index')
        ->with('success', 'Product updated successfully!');
}

public function destroy(Products $product)
{
    $product->delete();
    return redirect()->route('admin.products.index')
        ->with('success', 'Product deleted successfully!');
}
}
