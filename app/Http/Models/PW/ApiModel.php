<?php
namespace App\Http\Models\PW;
use Illuminate\Database\Eloquent\Model;

class ApiModel extends Model{
    //nombre de la tabla
    protected $table = 'actividadeseconomicas';

    //llave primaria
    protected $primarykey = 'id_unieco';
    public $timestamps = false;

    //aqui los elementos a mostrarse en la tabla 
    protected $filltable = [
        'nom_estab',
        'raz_social',
        'id_actividad',
        'nom_vial',
        'tipocencom',
        'nom_e',
        'nomb_asent',
        'cod_postal',
        'telefono',
        'latitud',
        'longitud'
    ];
}