<?php
namespace App\Http\Models\PW;
use Illuminate\Database\Eloquent\Model;

class FerreteriaModel extends Model{
    //nombre de la tabla
    protected $table = 'ferreteria';

    //llave primaria
    protected $primarykey = 'id';
    public $timestamps = false;

    //aqui los elementos a mostrarse en la tabla 
    protected $filltable = ['razon_social','giro','domicilio_fiscal','rfc','estado','anio_ingreso','bandera'];
}