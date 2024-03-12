<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Vat;
use Illuminate\Support\Facades\DB;
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

    public function show(Product $product): View
    {
        // $vat = DB::table('vats')->first();
        $vat = Vat::class::first();
        $vat = ((($vat->value / 100) * $product->price) + $product->price);

        return view('product', [
            'product' => $product,
            'vat' => $vat,
        ]);
    }

}
