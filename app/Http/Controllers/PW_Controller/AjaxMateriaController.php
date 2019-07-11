<?php
namespace App\Http\Controllers\PW_Controller;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\PW\MateriaModel;
use App\Http\Models\PW\SemestreModel;
use App\Http\Models\PW\AlumnoMateriaModel;

class AjaxMateriaController extends Controller{
   public function listado_materias($semestre){
       $al = MateriaModel::select('id','materia','semestre')
       ->where('semestre',$semestre)
       ->get();
       return $al;
   }

   public function formu(){
       $enviar = SemestreModel::pluck('nombre','id');
       return view('PW/AJAX/materias')->with('semestre',$enviar);
   }

    public function inserta(Request $request){
        $nombre = $request->input('nombre');
        $idsemestre = $request['idsemestre'];
        $idmateria = $request['idmateria'];

        AlumnoMateriaModel::insert(['nombre' => $nombre, 'semestre' => $idsemestre, 'materia' => $idmateria]);
        return redirect()->to('../');
    }
}
?>