<?php

namespace App\Http\Controllers;


use App\Http\Requests\CreateProductRequest;
use App\Models\Product;
use App\Models\Category;
use App\Models\Vat;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ProductAdminController extends Controller
{
    public function create(){
        $categories = Category::all();
        return view('productadmin', [
            'updating' => false,
            'categories' => $categories,
            ]);
    }
    public function update(Product $product){
        $categories = Category::all();
        return view('productadmin', [
            'updating' => true,
            'product' => $product,
            'categories' => $categories,
            ]);
    }

    public function createInDB(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => ['required', 'string', 'min:8', 'max:255'],
//          'slug' => ['required', 'string', 'min:8', 'max:255' , 'regrex:/^[a-z0-9-]+$/', 'unique:products'],
            'price' => ['required', 'integer'],
            'description' => ['required', 'string'],
            'stock' => ['required', 'integer'],
            'category' => ['required'],
        ]);

        // Store the new product in the database
        $product = Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'stock' => $request->stock,
            'category_id' => Category::where('name', $request->category)->first()->id,
            'vat_id' => Vat::where('value', 20)->first()->id,
        ]);

        // Redirect the user to the product creation page with a success message
        return redirect()->route('product.create', ['name' => $product->name])->with('success', 'Product added successfully');
    }

    public function updateInDB(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => ['required', 'string', 'min:8', 'max:255'],
//          'slug' => ['required', 'string', 'min:8', 'max:255' , 'regrex:/^[a-z0-9-]+$/', 'unique:products'],
            'price' => ['required', 'integer'],
            'description' => ['required', 'string'],
            'stock' => ['required', 'integer'],
            'category' => ['required'],
        ]);

        $product = Product::find($request->id);

        // Store the new product in the database
        $product->update([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'stock' => $request->stock,
            'category_id' => Category::where('name', $request->category)->first()->id,
            'vat_id' => Vat::where('value', 20)->first()->id,
        ]);

        // Redirect the user to the product creation page with a success message
        return redirect()->route('product', $product);
    }


}
