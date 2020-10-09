<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Cart;
use Illuminate\Http\Request;


class CartController extends Controller
{

    public function add(Service $service){

        // dd($service);
        Cart::session(auth()->id())->add(array(
            'id' => $service->id,
            'name' => $service->services_name,
            'price' => $service->services_price,
            'attributes' => array(),
            'quantity'=>1,
            'associatedModel' => $service
        ));

        return redirect()->route('cart.index'); 
    }

    public function index(){

        $cartItems = Cart::session(auth()->id())->getContent();
        
        $total = 0;

        return view('cart.index', compact('cartItems', 'total'));
    }

    public function destroy($itemId){

        Cart::session(auth()->id())->remove($itemId);
        return back();

    }
}
