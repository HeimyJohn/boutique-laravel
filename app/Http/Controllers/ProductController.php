<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function show(string $id): View
    {
        $product = Product::where('id', $id)->first();

        return view('product', [
            'product' => $product,
        ]);
    }
}
