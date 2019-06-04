<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produccion extends Model
{
    //las options y variables que se mostrarn ,algunas no se pueden modificar por ser primary keys
    public $fillable=['precio_fab','fecha_ini','fecha_ter','artesano_id','producto_id'];

    //funcion o método que direcciona junto con el controlador para actualizar y crear a la base de datos desde la vista
    public function url(){
        return $this->id ? 'produccion.update' : 'produccion.store';
    }

    //metodo que devolvera el HTTP , para actualizar es PUT y para crear POST

    public function method(){
        return $this->id ? 'PUT' : 'POST';
    }
}
