<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Vat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class CartController extends Controller
{
    public function show(): View
    {
//         Session::flush();

        if (Session::has('products')) {
            $total = 0;

            $productsID = [];
            foreach (Session::get('products') as $productID => $quantity) {
                $productsID[] = $productID;
            }

            $products = Product::whereIn('id', $productsID)->get();
            $vat = Vat::select('value')->first();

            foreach ($products as $product) {
                $product->quantity = array_values(array_intersect_key(Session::get('products'), array_flip(array($product->id))))[0];
                $product->price = (((($vat->value / 100) * $product->price) + $product->price) * $product->quantity);
                $total = ($total + $product->price);
            }

            return view('cart', [
                'products' => $products,
                'vat' => $vat,
                'total' => $total,
            ]);
        } else {
            return view('cart', [
                'products' => null,
                'vat' => null,
                'total' => null,
            ]);
        }

    }
}
