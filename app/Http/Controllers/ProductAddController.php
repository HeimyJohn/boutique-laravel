<?php

namespace App\Http\Controllers;


use App\Http\Requests\CreateProductRequest;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ProductAddController extends Controller
{
    public function create(){
        $categories = Category::all();
        return view('productadd', ['categories' => $categories]);
    }

    public function store(CreateProductRequest $request): RedirectResponse
    {
        $request->validated([
            'name' => ['required', 'string', 'min:8', 'max:255'],
//          'slug' => ['required', 'string', 'min:8', 'max:255' , 'regrex:/^[a-z0-9-]+$/', 'unique:products'],
            'price' => ['required', 'integer'],
            'content' => ['required', 'tinyText'],
            'stock' => ['required', 'integer'],
            'categories' => ['required'],
        ]);

        $user = Product.create([

            ]);

        $product = Product::create($request->validated());
        $product->vat()->associate($request->vat_id);
        $product->save();
        //return redirect()->route('productadd', ['name' => $product->name, 'product' => $product->uuid])->with('success', 'Product added successfully');
        $validated = $request->safe()->only('name', 'price', 'description', 'stock', 'category_id');
        $validated = $request->safe()->except('vat_id', 'category_id');
        return redirect('/product.store');
    }


}
