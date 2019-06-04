<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsoMaterial extends Model
{
    //
     public $fillable=['cantidad','material_id','creacion_id'];

    public function url(){
        return $this->id ? 'usomaterial.update' : 'usomaterial.store';
    }

    //metodo que devolvera el HTTP , para actualizar es PUT y para crear POST

    public function method(){
        return $this->id ? 'PUT' : 'POST';
    }
}
