<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    //
	public function distribuidor(){
  	    return $this->belongsTo(Distribuidor::class);
  	}

    public $fillable=['fecha', 'distribuidor_id'];

 	public function url(){
        return $this->id ? 'compra.update' : 'compra.store';
    }

    //metodo que devolvera el HTTP , para actualizar es PUT y para crear POST

    public function method(){
        return $this->id ? 'PUT' : 'POST';
    }

    public function materials(){
        return $this->belongsToMany('App\Material', 'detalles_compras','compras_id')
            ->withPivot('cantidad')
            ->withTimestamps();
    }
}
