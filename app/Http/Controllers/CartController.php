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
        $total = 0;

        $productsID = array_map(function ($products) {
            return $products['id'];
        }, Session::get('products'));

        $products = Product::whereIn('id', $productsID)->get();
        $vat = Vat::select('value')->first();

        if (Session::has('products')) {
            foreach ($products as $product) {
                $product->price = ((($vat->value / 100) * $product->price) + $product->price);
                $total = ($total + $product->price);
            }
        }

        return view('cart', [
            'products' => $products,
            'vat' => $vat,
            'total' => $total,
        ]);
    }
}
