<?php
namespace App\Http\Models\PW;
use Illuminate\Database\Eloquent\Model;

class AlumnoMateriaModel extends Model{
    //nombre de la tabla
    protected $table = 'alumno_semetre';

    //llave primaria
    protected $primarykey = 'id';
    public $timestamps = false;

    //aqui los elementos a mostrarse en la tabla 
    protected $filltable = ['id','nombre','semestre','materia'];
}