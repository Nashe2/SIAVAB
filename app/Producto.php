<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //
	 public $fillable=['title','description','price','cantidad','image_url'];

    public function url(){
        return $this->id ? 'productos.update' : 'productos.store';
    }

    //metodo que devolvera el HTTP , para actualizar es PUT y para crear POST

    public function method(){
        return $this->id ? 'PUT' : 'POST';
    }
    
}
