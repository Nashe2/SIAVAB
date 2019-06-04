<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    //
    public $fillable=['rgb', 'descripcion'];

    public function url(){
        return $this->id ? 'color.update' : 'color.store';
    }

    //metodo que devolvera el HTTP , para actualizar es PUT y para crear POST

    public function method(){
        return $this->id ? 'PUT' : 'POST';
    }
}
