<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    // public function getCardSession(Request $request)
    // {
    //     if ($request->session()->has('id_product')) {
    //         echo $request->session()->get('id_product');
    //     }

    //     if ($request->session()->has('quantity')) {
    //         echo $request->session()->get('quantity');
    //     }
    // }

    public function setCardSession(Request $request)
    {
        // Session::flush('id_product', 'quantity', 'id', 'product');

        $id = $request->input('id');

        if(Session::has('product')) {
            for($i = 0; $i < count(Session::get('product')); $i++) {
                if($id != Session::get('product.' . $i . '.id')) {
                    Session::push('product', ['id' => $id, 'quantity' => 1]);
                    break;
                }
            }
        } else {
            Session::push('product', ['id' => $id, 'quantity' => 1]);
        }

        return redirect()->route('card');
    }

    // public function deleteCardSession(Request $request)
    // {
    //     $request->session()->forget('id_product');
    //     $request->session()->forget('quantity');
    // }
}
