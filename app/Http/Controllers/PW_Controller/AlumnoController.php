<?php
namespace App\Http\Controllers\PW_Controller;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\PW\AlumnoModel;

class AlumnoController extends Controller{
    public function verDato(){
        $practica1 = AlumnoModel::select('nombre','apellidoP','apellidoM','edad','direccion','telefono')->take(1)->first();
        return view('PW/alumno_info')->with('variable',$practica1);
    }

    public function insertView(){
        return view('PW/alumno_insert');
    }

    public function inserta(Request $request){
        $nombre = $request->input('nombre');
        $apellidoP = $request->input('apellidoP');
        $apellidoM = $request->input('apellidoM');
        $edad = $request->input('edad');
        $direccion = $request->input('direccion');
        $telefono = $request->input('telefono');

        AlumnoModel::insert(['nombre' => $nombre, 'apellidoP' => $apellidoP, 'apellidoM' => $apellidoM, 'edad' => $edad, 'direccion' => $direccion, 'telefono' => $telefono]);
        return redirect()->to('/');
    }

    public function eliminarView($id){
        $uno = AlumnoModel::find($id);
        return view('PW/alumno_eliminar')->with('uno',$uno);
    }

    public function eliminarDatos($id){
        $edit = AlumnoModel::find($id);
        $edit->delete();
        return redirect()->to('alumno_table');
    }

    public function eliminarViewFlag($id){
        $uno = AlumnoModel::find($id);
        return view('PW/alumno_eliminar_flag_view')->with('uno',$uno);
    }

    public function eliminarDatosFlag($id){
        $edit = AlumnoModel::find($id);
        $edit->activo = false;
        $edit->save();
        return redirect()->to('alumno_table');
    }

    public function verTabla(){
        $vertodo = AlumnoModel::where('activo','1')->get();

        return view('PW/alumno_tabla')->with('usuario',$vertodo);
    }
}
?>