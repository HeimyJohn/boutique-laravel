<?php

namespace App\Http\Controllers;


use App\Http\Requests\CreateProductRequest;
use App\Models\Product;
use App\Models\Category;
use App\Models\Vat;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ProductAddController extends Controller
{
    public function create(){
        $categories = Category::all();
        return view('productadd', ['categories' => $categories]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'min:8', 'max:255'],
//          'slug' => ['required', 'string', 'min:8', 'max:255' , 'regrex:/^[a-z0-9-]+$/', 'unique:products'],
            'price' => ['required', 'integer'],
            'description' => ['required', 'string'],
            'stock' => ['required', 'integer'],
            'category' => ['required'],
        ]);
//dd(Category::where('name', $request->category)->first()->id);

        $product = Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'stock' => $request->stock,
            'category_id' => Category::where('name', $request->category)->first()->id,
            'vat_id' => Vat::where('value', 20)->first()->id,
        ]);

        // return redirect('/', ['name' => $product->name, 'product' => $product->uuid])->with('success', 'Product added successfully');
        return redirect()->route('toto', ['name' => $product->name])->with('success', 'Product added successfully');
    }


}
