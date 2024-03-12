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
        $idExists = null;

        if (Session::has('products')) {
            foreach (Session::get('products') as $session) {
                if ($id === $session['id']) {
                    $idExists = true;
                    break;
                }
            }

            if ($idExists) {
                foreach (Session::get('products') as $key => $value) {
                    if ($id === Session::get("products.$key.id")) {
                        Session::put(["products.$key.quantity" => $session['quantity'] + 1]);
                        break;
                    }
                }
            } else {
                Session::push('products', ['id' => $id, 'quantity' => 1]);
            }

        } else {
            Session::push('products', ['id' => $id, 'quantity' => 1]);
        }

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
