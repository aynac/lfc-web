<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Order;
use App\Models\OrderItem;
use Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class CartController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart', []);
        $subtotal = collect($cart)->sum(fn($item) => $item['price'] * $item['quantity']);
        $tax = $subtotal * 0.08;
        $total = $subtotal + $tax;
        return view('user.cart', [
            'cartItems' => session()->get('cart', []),
            'cartProducts' => Products::whereIn('id', array_keys(session()->get('cart', [])))->get()
        ]);
    }

    public function add(Products $product)
    {
        $cart = session()->get('cart', []);

        if(isset($cart[$product->id])){
            $cart[$product->id]['quantity']++;
        } else {
            $cart[$product->id] = [
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price,
                "image_url" => $product->image_url
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart!');
    }

    public function update(Request $request, Products $product)
    {
        $cart = session()->get('cart', []);
        if(isset($cart[$product->id])){
            $cart[$product->id]['quantity'] = $request->quantity;
            session()->put('cart', $cart);
        }

        // Update subtotal, tax, total in session (optional)
        $subtotal = collect($cart)->sum(fn($item) => $item['price'] * $item['quantity']);
        $tax = $subtotal * 0.08;
        $total = $subtotal + $tax;
        session()->put('cart_totals', [
            'subtotal' => $subtotal,
            'tax' => $tax,
            'total' => $total,
        ]);

        return redirect()->back();
    }


    public function remove(Products $product)
    {
        $cart = session()->get('cart', []);
        if(isset($cart[$product->id])){
            unset($cart[$product->id]);
            session()->put('cart', $cart);
        }
        return redirect()->back();
    }

    public function checkout()
    {
        $cart = session()->get('cart', []);
        if(!$cart) return redirect()->back()->with('error', 'Cart is empty');

        $subtotal = collect($cart)->sum(fn($item) => $item['price'] * $item['quantity']);
        $tax = $subtotal * 0.08;
        $total = $subtotal + $tax;

        $order = Order::create([
            'user_id' => FacadesAuth::id(),
            'subtotal' => $subtotal,
            'tax' => $tax,
            'total' => $total,
            'status' => 'pending'
        ]);

        foreach($cart as $id => $item){
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $id,
                'quantity' => $item['quantity'],
                'price' => $item['price']
            ]);
        }

        session()->forget('cart');
        return redirect()->route('cart.index')->with('success', 'Order placed successfully!');
    }
}
