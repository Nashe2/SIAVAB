<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductoInShoppingCart;

class ProductoInShoppingCartsController extends Controller
{
	public function __construct(){
		$this->middleware("shopping_cart");
	}

    //fUNCION PARA AGREGAR PRODUCTOS AL CARRITO
    public function store(Request $request){
    	$in_shopping_cart = ProductoInShoppingCart::create(['shopping_cart_id' => $request->shopping_cart->id,"producto_id" => $request->producto_id]);

    	if($in_shopping_cart){
    		return redirect()->back();
    	}
    	return redirect()->back()->withErrors(['producto' => 'No se pudo agregar el producto']);
    }

    //fUNCION PARA ELIMINAR PRODUCTOS DEL CARRITO
    public function destroy($id){}
}
