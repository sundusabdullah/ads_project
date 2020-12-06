<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Support\Facades\Auth;
use Cart;
use App\Models\Negotiation;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class CartController extends Controller
{
    public function add(Service $service){
        // dd($service);
        if($service->services_instagram_price != null){
            Cart::session(auth()->id())->add(array(
                'id' => $service->id,
                'name' => $service->services_instagram_name,
                'price' => $service->services_instagram_price,
                'attributes' => array(),
                'quantity'=>1,
                'associatedModel' => $service
            ));
            return redirect()->route('cart.index'); 

        }elseif($service->services_snapchat_price != null){
            Cart::session(auth()->id())->add(array(
                'id' => $service->id,
                'name' => $service->services_snapchat_name,
                'price' => $service->services_snapchat_price,
                'attributes' => array(),
                'quantity'=>1,
                'associatedModel' => $service
            ));
            return redirect()->route('cart.index'); 
        }else{}
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
    public function checkout(){
        $service = new Service();
        return view('cart.checkout', compact('service'));
    }


    public function index_noti(){

        $id = Auth::user()->id;

        $negotiate_q = DB::table('negotiate')->where('user_id',$id)->get();
        $negotiate= json_decode( json_encode($negotiate_q), true);
        // dd($negotiate);
        return view('cart.show_all', compact('negotiate'));
    }
}