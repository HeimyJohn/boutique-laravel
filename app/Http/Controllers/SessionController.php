<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    public function setCartSession(Request $request)
    {
        // Session::flush('id_product', 'quantity', 'id', 'product, products');

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

            // $productExists = null;
    //     if (Session::has('products')) {
    //         foreach (Session::get('products') as $product) {
    //             if ($id === $product['id']) {
    //                 $productExists = true;
    //                 break;
    //             }
    //         }

    //         if ($productExists) {
    //             foreach (Session::get('products') as $product) {
    //                 if ($id === $product['id']) {
    //                     // $quantity = $product['quantity']++;
    //                     // Session::put('products', [$product['id'], $product['quantity']]);
    //                     // session($product['quantity'], $quantity);

    //                     dd(Session::get('products'), $product);
    //                     // dd(Session::get("products"), $product);
    //                     // Session::increment('quantity', $incrementBy = 1);
                        
    //                     break;
    //                 }
    //             }

    //         } else {
    //             Session::push('products', ['id' => $id, 'quantity' => 1]);
    //         }

    //     } else {
    //         Session::push('products', ['id' => $id, 'quantity' => 1]);
    //     }

        return redirect()->route('cart');
    }

    public function modifyCartSession(Request $request)
    {
        $id = $request->input('id');

        dd('test');

        if (Session::has('product')) {
            for ($i = 0; $i < count(Session::get('product')); $i++) {
                $products[$i] = Product::select('*')->where('id',  '=',  Session::get('product.' . $i . '.id'))->first();
            }
        }

        return $products;
    }

    // public function deleteCartSession(Request $request)
    // {
    //     $request->session()->forget('id_product');
    //     $request->session()->forget('quantity');
    // }
}
