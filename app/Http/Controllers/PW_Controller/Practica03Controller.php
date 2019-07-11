<?php
namespace App\Http\Controllers\PW_Controller;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\PW\Practica03Model;

class Practica03Controller extends Controller{
    public function verDatos(){
        $practica1 = Practica03Model::select('id','razon_social','RFC','nombre_dueno','direccion_dueno','tipo_empresa','telefono','fecha_ingreso')->take(1)->first();
        return view('PW/practica03_verDatos')->with('variable',$practica1);
    }

    public function insertView(){
        return view('PW/practica03_insertar');
    }

    public function inserta(Request $request){
        $id = $request->input('id');
        $razon_social = $request->input('razon_social');
        $RFC = $request->input('RFC');
        $nombre_dueno = $request->input('nombre_dueno');
        $direccion_dueno = $request->input('direccion_dueno');
        $tipo_empresa = $request->input('tipo_empresa');
        $telefono = $request->input('telefono');      
        $fecha_ingreso = $request->input('fecha_ingreso');

        Practica03Model::insert(['id' => $id,
                                'razon_social' => $razon_social,
                                'RFC' => $RFC,
                                'nombre_dueno' => $nombre_dueno,
                                'direccion_dueno' => $direccion_dueno,
                                'tipo_empresa' => $tipo_empresa,
                                'telefono' => $telefono,
                                'fecha_ingreso' => $fecha_ingreso]);
        return redirect()->to('practica03Consultar');
    }

    public function updateView($id){
        $uno = Practica03Model::find($id);
        return view('PW/practica03_update')->with('uno',$uno);
    }

    public function update(Request $request){
        $id = $request->input('id');

        $dato = Practica03Model::find($id);

        if(is_null($dato)){
            print('error'.$id);
        }else{
            $dato->razon_social = $request->input('razon_social');
            $dato->RFC = $request->input('RFC');
            $dato->nombre_dueno = $request->input('nombre_dueno');
            $dato->direccion_dueno = $request->input('direccion_dueno');
            $dato->tipo_empresa = $request->input('tipo_empresa');
            $dato->telefono = $request->input('telefono');      
            $dato->fecha_ingreso = $request->input('fecha_ingreso');

            $dato->save();
            return redirect()->to('practica03UpdateView/'.$id);
        }
        
        
    }
}
?>