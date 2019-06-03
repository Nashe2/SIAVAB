<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    //
    public function __construct(){
    	return $this->middleware('shopping_cart');//le puse return
    }

    public function show(Request $request){
    	return view('shopping_cart.show',['shopping_cart' => $request->shopping_cart]);
    }
}
