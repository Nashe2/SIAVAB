<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductoInShoppingCart extends Model
{
    //
    protected $fillable = ['shopping_cart_id', 'producto_id'];
}
