<?php
namespace App\Http\Models\PW;
use Illuminate\Database\Eloquent\Model;

class AjaxProductoModel extends Model{
    //nombre de la tabla
    protected $table = 'ajax_producto';

    //llave primaria
    protected $primarykey = 'id';
    public $timestamps = false;

    //aqui los elementos a mostrarse en la tabla 
    protected $filltable = ['id','nombre','tipo','proveedor','precio_u','precio_v'];
}