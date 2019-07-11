<?php
namespace App\Http\Models\PW;
use Illuminate\Database\Eloquent\Model;

class AlumnoModel extends Model{
    //nombre de la tabla
    protected $table = 'alumno';

    //llave primaria
    protected $primarykey = 'id';
    public $timestamps = false;

    //aqui los elementos a mostrarse en la tabla 
    protected $filltable = ['nombre','apellidoP','apellidoM','edad','direccion','telefono','activo','sexo'];
}