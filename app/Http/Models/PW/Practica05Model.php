<?php
//PARA LA BASE DE DATOS
namespace App\Http\Models\PW;

use Illuminate\Database\Eloquent\Model;

class Practica05Model extends Model
{
    //aqui se declara el nombre de la tabla que esta en mysql
    protected $table = 'practica5';
    //aqui la llave primaria de la tabla
    protected $primarykey = 'id';
    public $timestamps = false;
    //aqui van los elementos a mostrarse en cuestion
    protected $fillable = [
        'id','rfc','curp','ncontrol','materia1','materia2','materia3','calif1','calif2','calif3','promedio','fecha'
    ];
}
?>