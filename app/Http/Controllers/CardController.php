<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class CardController extends Controller
{
    public function show(): View
    {
        // $product = Product::where('id', $id)->first();
        // $vat = DB::table('vats')->first();
        // $vat = ((($vat->value / 100) * $product->price) + $product->price);

        return view('card', [
            // 
        ]);
    }
}
