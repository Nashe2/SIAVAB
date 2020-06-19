<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    //
    public static function findOrCreateById($shopping_cart_id){
    	if($shopping_cart_id){
    		return ShoppingCart::find($shopping_cart_id);
    	}else{
    		return ShoppingCart::create();
    	}
    }

    //podria ser una consulta, pero se aprovechara la relacion sobre que: modelo es la relacion y cual es el nombre de la tabla que los esta relacionando, es decir un arreglo que devuelve todos los productos del carrito
    public function productos(){
    	return $this->belongsToMany('App\Producto','producto_in_shopping_carts');
    }

    //consulta de cuantos productos tiene el carrito, resultado de productos-> metodo anterior.
    public function productosCount(){
    	return $this->productos()->count();
    }

    public function amount(){
        return $this->productos()->sum("price") / 100;
    }

    public function amountInCents(){
        return $this->productos()->sum("price");
    }

    public function productoss(){
        return $this->belongsToMany('App\Producto', 'producto_in_shopping_carts', 'shopping_cart_id')
            ->withPivot('amount')
            ->withTimestamps();
    }

}

