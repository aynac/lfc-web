<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index()
    {
        return view('admin.store.index', [
            'products' => Products::latest()->get()
        ]);
    }

    public function create()
    {
        return view('admin.store.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'image' => 'nullable|image|max:2048'
        ]);

        $data = $request->all();

        if($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('store', 'public');
        }

        Products::create($data);

        return redirect()->route('store.index')->with('success', 'Products added successfully.');
    }

    public function edit(Products $product)
    {
        return view('admin.store.edit', compact('product'));
    }

    public function update(Request $request, Products $product)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'image' => 'nullable|image|max:2048'
        ]);

        $data = $request->all();

        if($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('store', 'public');
        }

        $product->update($data);

        return redirect()->route('store.index')->with('success', 'Products updated successfully.');
    }

    public function destroy(Products $product)
    {
        $product->delete();
        return back()->with('success', 'Products deleted successfully.');
    }
}
