<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function show(string $id): View
    {
        $product = Product::where('id', $id)->first();
        $vat = DB::table('vats')->first();
        $vat = ((($vat->value / 100) * $product->price) + $product->price);

        return view('product', [
            'product' => $product,
            'vat' => $vat,
        ]);
    }
}
