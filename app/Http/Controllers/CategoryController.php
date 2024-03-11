<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(string $id){

        $category = Category::where('id', $id)->first();
        $products = Product::where('category_id', $id)->paginate(8);

        return view('category', [
            'category' => $category,
            'products' => $products,
        ]);
    }
}
