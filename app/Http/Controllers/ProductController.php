<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request ;
use Illuminate\View\View;
use Illuminate\Pagination\LengthAwarePaginator;

class ProductController extends Controller
{

    public function index(Request $search)
    {
        $text = $search->input('search');

        if ($text) {
            $products = Product::where('name', 'like', '%' . $text . '%')->simplePaginate(4);
        } else {
            $products = Product::paginate(8);
        }

        return view('catalogue', [
            'products' => $products  //->paginate(8),
        ]);

    }

    public function show(string $id): View
    {
        $product = Product::where('id', $id)->first();

        return view('product', [
            'product' => $product,
        ]);
    }

}
