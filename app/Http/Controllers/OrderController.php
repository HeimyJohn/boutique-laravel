<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    // Create order, from cart content in session
    public function createOrder(Request $request) {
        // Get cart content from session
        $cart = $request->session('cart');

        dd($cart);

        // If cart is empty, redirect to cart page
        if (empty($cart)) {
            return redirect()->route('cart');
        }
        // If cart is not empty, create order and return order view








        return view('order');
    }
}
