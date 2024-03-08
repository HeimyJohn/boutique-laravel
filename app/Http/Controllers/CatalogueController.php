<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Nette\Utils\Paginator;

class CatalogueController extends Controller
{

    public function index() : View
    {
        return view('catalogue', [
            'products' => Product::paginate(8), // Product::all(),
            ] ); // ['products' => DB::table('products')->paginate(15) ]
    }



}
