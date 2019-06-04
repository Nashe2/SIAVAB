<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Distribuidor extends Model
{
    //
	protected $primaryKey = 'distribuidor_id';

    public function compra(){
       return $this->hasMany(Compra::class);
    }

    public $fillable=['giro_emp','persona_id'];

 	public function url(){
        return $this->id ? 'distribuidor.update' : 'distribuidor.store';
    }

    //metodo que devolvera el HTTP , para actualizar es PUT y para crear POST

    public function method(){
        return $this->id ? 'PUT' : 'POST';
    }
}
