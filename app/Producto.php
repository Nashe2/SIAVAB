<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //
    public $fillable=['title','description','price','cantidad','image_url'];
}
