<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class HomepageController extends Controller
{
    public function show(): View
    {
        $flagship_product = Product::whereRaw('updated_at = (select MAX(`updated_at`) from products)')->orderBY('price', 'DESC')->first();
        // $advices = '';
        $categories = DB::table('categories')->get();

        return view('homepage', [
            'flagship_product' => $flagship_product,
            // 'advices' => $advices,
            'categories' => $categories,
        ]);
    }
}
