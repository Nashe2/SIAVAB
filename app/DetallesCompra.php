<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetallesCompra extends Model
{
    //checar bien para hacer la relacion muchos a muchos
    protected $primaryKey = 'id';

    public function compra(){
       return $this->hasMany(material::class);
    }

   	public $fillable=['cantidad', 'compras_id', 'cantidad_id'];

    public function url(){
        return $this->id ? 'detallescompra.update' : 'detallescompra.store';
    }

    //metodo que devolvera el HTTP , para actualizar es PUT y para crear POST

    public function method(){
        return $this->id ? 'PUT' : 'POST';
    }
}
