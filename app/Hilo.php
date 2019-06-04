<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hilo extends Model
{
    //
    public $fillable=['tipo'];

    public function url(){
        return $this->id ? 'hilo.update' : 'hilo.store';
    }

    //metodo que devolvera el HTTP , para actualizar es PUT y para crear POST

    public function method(){
        return $this->id ? 'PUT' : 'POST';
    }
}
