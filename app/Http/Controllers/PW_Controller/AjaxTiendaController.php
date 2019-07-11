<?php
namespace App\Http\Controllers\PW_Controller;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\PW\AjaxEmpresaModel;
use App\Http\Models\PW\AjaxProductoModel;

class AjaxTiendaController extends Controller{

    public function producto($id){
        $al = AjaxProductoModel::select('id','nombre','tipo','proveedor','precio_u','precio_v')
       ->where('id',$id)
       ->get();
       return $al;
    }

    public function vistaProducto(){
        return view('PW/AJAX/ajax_producto');
    }

    public function vistaEmpresa(){
        return view('PW/AJAX/ajax_empresa');
    }

    public function insertaProducto(Request $request){
        $nombre = $request->input('nombre');
        $tipo = $request->input('tipo');
        $proveedor = $request->input('proveedor');
        $precio_u = $request->input('precio_u');
        $precio_v =$request->input('precio_v');

        AjaxProductoModel::insert(['nombre' => $nombre, 'tipo' => $tipo, 'proveedor' => $proveedor, 'precio_u' => $precio_u, 'precio_v' => $precio_v]);
        return redirect()->to('../');
    }

    public function insertaEmpresa(Request $request){
        $rfc = $request->input('rfc');
        $razon_social = $request->input('razon_social');
        $direccion_fiscal = $request->input('direccion_fiscal');
        $apoderado_legal = $request->input('apoderado_legal');
        $telefono =$request->input('telefono');
        $activo = true;
        AjaxEmpresaModel::insert(['rfc' => $rfc, 'razon_social' => $razon_social,'direccion_fiscal' => $direccion_fiscal, 'apoderado_legal' => $apoderado_legal, 'telefono' => $telefono, 'activo' => $activo]);
        return redirect()->to('../');
    }

    public function lista_productos(){
        $nombres = AjaxProductoModel::pluck('nombre','id');
        return view('PW/AJAX/ajax_ver_productos')->with('nombres',$nombres);
    }

    public function comprar_productos(){
        $nombres = AjaxProductoModel::pluck('nombre','id');
        return view('PW/AJAX/ajax_comprar_productos')->with('nombres',$nombres);
    }

    public function editarEmpresaView($id){
        $uno = AjaxEmpresaModel::find($id);
        return view('PW/AJAX/ajax_empresa_editar')->with('empresa',$uno);
    }

    public function editarEmpresa(Request $data, $id){
        $editar = AjaxEmpresaModel::find($id);
        $editar->razon_social = $data->razon_social;
        $editar->direccion_fiscal = $data->direccion_fiscal;
        $editar->rfc = $data->rfc;
        $editar->apoderado_legal = $data->apoderado_legal;
        $editar->telefono = $data->telefono;
        $editar->activo = $data->activo;
        $editar->save();

        return redirect()->to('../');
    }

    public function eliminarEmpresaView($id){
        $uno = AjaxEmpresaModel::find($id);
        return view('PW/AJAX/ajax_empresa_eliminar')->with('empresa',$uno);
    }

    public function eliminarEmpresa($id){
        $editar = AjaxEmpresaModel::find($id);
        $editar->activo = false;
        $editar->save();

        return redirect()->to('../');
    }
}
?>