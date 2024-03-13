<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    public function setCartSession(Request $request)
    {
        $id = $request->input('id');

        if (!Session::has('products')) {
            Session::put('products', []);
        }

        $products = Session::get('products');

        if (array_key_exists($id, $products)) {
            $products[$id]++;
        } else {
            $products[$id] = 1;
        }

        Session::put('products', $products);

        return redirect()->route('cart');
    }

    public function modifyCartSession(Request $request)
    {
        $id = $request->input('id');
        $quantity = $request->input('quantity');

        $products = Session::get('products');


        if ($quantity > 0) {
            $products[$id] = $quantity;
            Session::put('products', $products);
        } else {
            unset($products[$id]);
            Session::put('products', $products);
        }

        return redirect()->route('cart');
    }

    // public function deleteCartSession(Request $request)
    // {
    //     $request->session()->forget('id_product');
    //     $request->session()->forget('quantity');
    // }
}
