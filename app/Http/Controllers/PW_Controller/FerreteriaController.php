<?php
namespace App\Http\Controllers\PW_Controller;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\PW\FerreteriaModel;

class FerreteriaController extends Controller{

    public function verView($id){
        $uno = FerreteriaModel::find($id);
        return view('PW/CRUD/ferreteria_ver')->with('uno',$uno);
    }

    public function insertView(){
        return view('PW/CRUD/ferreteria_insert');
    }
    //'razon_social','giro','domicilio_fiscal','RFC','estado','anio_ingreso','bandera'
    public function insert(Request $request){
        $razon_social = $request->input('razon_social');
        $giro = $request->input('giro');
        $domicilio_fiscal = $request->input('domicilio_fiscal');
        $rfc = $request->input('rfc');
        $estado = $request->input('estado');
        $anio_ingreso = $request->input('anio_ingreso');
        $bandera = $request->input('bandera');

        FerreteriaModel::insert(['razon_social' => $razon_social, 'giro' => $giro, 'domicilio_fiscal' => $domicilio_fiscal, 
        'rfc' => $rfc, 'estado' => $estado, 'anio_ingreso' => $anio_ingreso, 'bandera' => $bandera]);
        return redirect()->to('/ferreteria/tabla');
    }

    public function updateView($id)
    {
        $uno = FerreteriaModel::where('id',$id)->take(1)->first();
        return view ('PW/CRUD/ferreteria_update')->with ('uno', $uno);
    }

    public function update(Request $data,$id)
    {
        $editar = FerreteriaModel::find($id);

        $editar->id = $data->id;
        $editar->razon_social = $data->razon_social;
        $editar->giro = $data->giro;
        $editar->domicilio_fiscal = $data->domicilio_fiscal;
        $editar->rfc = $data->rfc;
        $editar->estado = $data->estado;
        $editar->anio_ingreso = $data->anio_ingreso;
        $editar->bandera = $data->bandera;

        $editar->save();

        return redirect()->to('/ferreteria/tabla');
    }

    public function deleteView($id){
        $uno = FerreteriaModel::find($id);
        return view('PW/CRUD/ferreteria_delete')->with('uno',$uno);
    }

    public function delete($id){
        $edit = FerreteriaModel::find($id);
        $edit->delete();
        return redirect()->to('/ferreteria/tabla');
    }



    public function deleteViewFlag($id){
        $uno = FerreteriaModel::find($id);
        return view('PW/CRUD/ferreteria_delete_flag')->with('uno',$uno);
    }

    public function deleteFlag($id){
        $edit = FerreteriaModel::find($id);
        $edit->bandera = false;
        $edit->save();
        return redirect()->to('/');
    }

    public function tabla(){
        $vertodo = FerreteriaModel::where('bandera','1')->get();

        return view('PW/CRUD/ferreteria_table')->with('usuario',$vertodo);
    }
}
?>