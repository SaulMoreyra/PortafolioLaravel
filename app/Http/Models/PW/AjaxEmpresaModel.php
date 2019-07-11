<?php
namespace App\Http\Models\PW;
use Illuminate\Database\Eloquent\Model;

class AjaxEmpresaModel extends Model{
    //nombre de la tabla
    protected $table = 'ajax_empresa';

    //llave primaria
    protected $primarykey = 'id';
    public $timestamps = false;

    //aqui los elementos a mostrarse en la tabla 
    protected $filltable = ['id','rfc','razon_social','direccion_fiscal','apoderado_legal','telefono','activo'];
}