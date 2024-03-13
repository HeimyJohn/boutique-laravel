<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Order;
use App\Models\OrderedProduct;
use App\Models\OrderedProductHasOrder;
use App\Models\Product;
use App\Models\Vat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    // Create order, from cart content in session
    public function createOrder(Request $request)
    {
        // Get cart content from session
        $cart = $request->session()->get('products');

        $total = 0;

        foreach ($cart as $productID => $quantity) {
            $product = Product::where('id', '=', $productID)->first();
            $vat = Vat::where('id', '=', $product->vat_id)->first();
            $price = (((($vat->value / 100) * $product->price) + $product->price) * $quantity);
            $total = ($total + $price);
        }

        // Create order
        $order = Order::create(
            [
                'order_number' => fake()->numerify('Order-########'),
                'order_date' => now(),
                'user_id' => Auth::user()->id,
                'status' => 'created',
                'total' => $total,
                // ici on va faire un truc de merde : on récupère l'id d'une adresse existante en dur,
                // alors qu'on devrait laisser l'utilisateur choisir son adresse
                'delivery_address_id' => fake()->randomElement(Address::pluck('id')),
                'billing_address_id' => fake()->randomElement(Address::pluck('id')),
            ]
        );

        $products = [];

        // Create ordered products
        foreach ($cart as $productID => $quantity) {
            $product = Product::where('id', '=', $productID)->first();
            $price = (((($vat->value / 100) * $product->price) + $product->price) * $quantity);

            $ordered_product = OrderedProduct::create(
                [
                    'name' => $product->name,
                    'price' => $product->price,
                    'vat_id' => $product->vat_id,
                ]
            );

            $ordered_product_has_order = OrderedProductHasOrder::create(
                [
                    'ordered_product_id' => $ordered_product->id,
                    'order_id' => $order->id,
                    'quantity' => $quantity,
                ]
            );
            // $order->products()->attach($productID, ['quantity' => $quantity]);

            $products[] = ['name' => $product->name, 'quantity' => $quantity, 'unitPrice' => $product->price, 'vat' => $vat->value, 'totalPrice' => $price];
        }

        return view('order', [
            'products' => $products,
        ]);;
    }
}
