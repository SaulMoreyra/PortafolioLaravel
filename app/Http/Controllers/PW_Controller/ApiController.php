<?php
namespace App\Http\Controllers\PW_Controller;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\PW\ApiModel;

class ApiController extends Controller{

   public function blackList(Request $g){
        $gapi = $g -> id;
        return response()->json(ApiModel::select('id_unieco','nom_estab')
        ->where('id_unieco',$gapi)
        ->get());
   }

   public function insertar_black(Request $request){
      $id_unieco = $request->id_unieco;
      $nom_estab = $request->nom_estab;
      $raz_social = $request->raz_social;
      $id_actividad = $request->id_actividad;
      $nom_vial = $request->nom_vial;
      ApiModel::insert(['id_unieco' => $id_unieco ,'nom_estab'=>$nom_estab, 'raz_social'=> $raz_social, 'id_actividad'=> $id_actividad, 'nom_vial'=>$nom_vial]);
      return response()->json([
         'mensaje' => 'Registrado Correctamente',
      ]);
   }

   public function actualizar_black(Request $request){
      $id_unieco = $request->id_unieco;
      $raz_social = $request->raz_social;
      $nom_vial = $request->nom_vial;

      $editar = ApiModel::select('id_unieco','raz_social','nom_vial')
      ->where('id_unieco','=',$id_unieco)
      ->update(['raz_social'=>$raz_social,'nom_vial'=>$nom_vial]);
      
      return response()->json(['mensaje' => 'Actualizo Correctamente']);
   }

   public function eliminar_black(Request $request){
      $id_unieco = $request -> id_unieco;

      $editar = ApiModel::select('id_unieco')
      ->where('id_unieco','=',$id_unieco)
      ->delete();
      
      return response()->json(['mensaje' => 'Elimino Correctamente']);
     }


     //********************************* */API EXAMEN *****************************************************
   public function findByRazonSocial(Request $g){
      $gapi = $g -> razon_social;
      return response()->json(ApiModel::where('raz_social',$gapi)
      ->get());
    }

    public function insertar_4(Request $request){
      $id_unieco = $request->id_unieco;
      $nom_estab = $request->nom_estab;
      $raz_social = $request->raz_social;
      $id_actividad = $request->id_actividad;
      ApiModel::insert(['id_unieco' => $id_unieco ,'nom_estab'=>$nom_estab, 'raz_social'=> $raz_social, 'id_actividad'=> $id_actividad]);
      return response()->json([
         'mensaje' => 'Registrado Correctamente',
      ]);
   }


   public function imsertar(){
      $respuesta = $this->peticion('POST',"http://saulrenato.onion/api/auth/insertar_4",[
         'headers' => [
            'Content-Type' => 'application/x-www-form-urlencoded',
            'X-Requested-With' => 'XMLHttpRequest'
         ],
         'form_params' =>[
            'id_unieco' => '111',
            'nom_estab' => 'Fortnite',
            'raz_social' => 'Fortnite',
            'id_actividad' => '1212'
         ]
      ]);

      return response()->json($datos);
   }

   public function actualizar_api($dato){
      $respuesta = $this->peticion('POST',"http://saulrenato.onion/api/auth/actualizar",[
         'headers' => [
            'Content-Type' => 'application/x-www-form-urlencoded',
            'X-Requested-With' => 'XMLHttpRequest'
         ],
         'form_params' =>[
            'id_unieco' => '111',
            'nom_vial' => 'Fortnite Lololol',
            'raz_social' => 'Fortnite lelelee'
         ]
      ]);


      $datos = json_decode($respuesta);
      return response()->json($datos);
   }


   public function eliminar_api($dato){
      $respuesta = $this->peticion('PUT',"http://saulrenato.onion/api/auth/eliminar",[
         'headers' => [
            'Content-Type' => 'application/x-www-form-urlencoded',
            'X-Requested-With' => 'XMLHttpRequest'
         ],
         'form_params' =>[
            'id_unieco' => '111'
         ]
      ]);
      $datos = json_decode($respuesta);
      return response()->json($datos);
   }

}
?>