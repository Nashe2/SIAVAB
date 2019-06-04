<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\ProductosCollection;//ultima productos del carrito con vue

class ShoppingCartController extends Controller
{
    //
    public function __construct(){
    	return $this->middleware('shopping_cart');//le puse return
    }

    public function show(Request $request){
    	return view('shopping_cart.show',['shopping_cart' => $request->shopping_cart]);
    }

    public function productos(Request $request){
    	return new ProductosCollection($request->shopping_cart->productos()->get());//ultima producto del carrito con vue
    }
}
