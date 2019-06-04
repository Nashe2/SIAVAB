<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    //
        //
	 public $fillable=['nombre','descripcion','cantidad','precio_unitario', 'es_hilo'];

    public function url(){
        return $this->id ? 'materiales.update' : 'materiales.store';
    }

    //metodo que devolvera el HTTP , para actualizar es PUT y para crear POST

    public function method(){
        return $this->id ? 'PUT' : 'POST';
    }
}
