<?php
namespace App\Http\Models\PW;
use Illuminate\Database\Eloquent\Model;

class Practica03Model extends Model{
    //nombre de la tabla
    protected $table = 'tienda';

    //llave primaria
    protected $primarykey = 'id';
    public $timestamps = false;

    //aqui los elementos a mostrarse en la tabla 
    protected $filltable = ['id','razon_social','RFC','nombre_dueno','direccion_dueno','tipo_empresa','telefono','fecha_ingreso'];
}