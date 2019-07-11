<?php
namespace App\Http\Controllers\PW_Controller;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\PW\EjemploModel;

class ControladorLogin extends Controller{
    public function index(){
        return view("PW/login");
    }    

    public function verDatos(){
        //retorna la consulta en un JSON
        $practica1 = EjemploModel::select('id','nombre')->get();
        return $practica1;
    }

    public function verDato(){
        $practica1 = EjemploModel::select('id','nombre')->take(1)->first();
        return view('PW/ver_data')->with('variable',$practica1);
    }
}
?>