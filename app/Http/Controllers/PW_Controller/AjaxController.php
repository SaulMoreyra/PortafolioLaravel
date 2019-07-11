<?php
namespace App\Http\Controllers\PW_Controller;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\PW\AlumnoModel;
use App\Http\Models\PW\SexoModel;

class AjaxController extends Controller{
   public function listado_alumnos($genero){
       $al = AlumnoModel::select('id','nombre','sexo')
       ->where('sexo',$genero)
       ->get();
       return $al;
   }

   public function formu(){
       $enviar = SexoModel::pluck('sexo','id');
       return view('PW/AJAX/ejemplo01')->with('sexo',$enviar);
   }
}
?>