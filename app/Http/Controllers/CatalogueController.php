<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Nette\Utils\Paginator;

class CatalogueController extends Controller
{
//    public function index(): Paginator
//    {
//        return Product::paginate(15);
//    }
    public function index(Request $search)
    {
        $text = $search->input('search');

        if ($text) {
            $products = Product::where('name', 'like', '%' . $text . '%')->simplePaginate(4);
        } else {
            $products = Product::paginate(8);
        }

        return view('catalogue', [
            'search_terms' => $text,
            'products' => $products,
        ]);

    }

}
