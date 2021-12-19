<?php

namespace App\Http\Controllers\Shopping;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('shopping.products', compact('products'));
    }

    public function cart()
    {
        return view('shopping.cart');
    }

    public function addToCart($id)
    {
        $product = Product::find($id);
        $success = redirect()->back()->with('success', 'Product added to the cart successfully!');

        if(!$product)
        {
            abort(404);
        }

        $cart = session()->get('cart');

        // first product if cart is empty
        if(!$cart)
        {
            $cart = [
                $id => [
                    'name' => $product->name,
                    'quantity' => 1,
                    'price' => $product->price
                ]
            ];

            session()->put('cart', $cart);

            return $success;
        }

        // add product if it is already in a cart
        if(isset($cart[$id]))
        {
            $cart[$id]['quantity']++;

            session()->put('cart', $cart);

            return $success;
        }

        // regular case
        $cart[$id] = [
            'name' => $product->name,
            'quantity' => 1,
            'price' => $product->price
        ];

        session()->put('cart', $cart);

        return $success;
    }

    public function update(Request $request)
    {
        if ($request->id and $request->quantity) {
            $cart = session()->get('cart');

            $cart[$request->id]["quantity"] = $request->quantity;

            session()->put('cart', $cart);

            session()->flash('success', 'Cart updated successfully');
        }
    }

    public function remove(Request $request)
    {
        if ($request->id) {

            $cart = session()->get('cart');

            if (isset($cart[$request->id])) {

                unset($cart[$request->id]);

                session()->put('cart', $cart);
            }

            session()->flash('success', 'Product removed successfully');
        }
    }
}
