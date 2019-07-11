<?php

namespace app\Http\Controllers\PW_Controller;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Http\Models\PW\Practica05Model; //PARA LA BASE DE DATOS

class Practica05Controller extends Controller
	{
        public function ver_formulario()
		{
			return view('PW/Practica05_insertar');
        }

        public function insertar(request $request)
		{
			$rfc = $request->input('rfc');
			$curp = $request->input('curp');
			$ncontrol = $request->input('ncontrol');
			$materia1 = $request->input('materia1');
			$materia2 = $request->input('materia2');
            $materia3 = $request->input('materia3');
            $calif1 = $request->input('calif1');
            $calif2 = $request->input('calif2');
            $calif3 = $request->input('calif3');
            $promedio = $request->input('promedio');
            $fecha = $request->input('fecha');

            Practica05Model::create(['rfc'=>$rfc,'curp'=>$curp,'ncontrol'=>$ncontrol,
            'materia1'=>$materia1,'materia2'=>$materia2,'materia3'=>$materia3,'calif1'=>$calif1,
            'calif2'=>$calif2,'calif3'=>$calif3,'promedio'=>$promedio,'fecha'=>$fecha]);

			return redirect()->to('insetar_view5'); //insertar
        }
        
        public function edit_datos($id)
        {
            $uno = Practica05Model::where('id',$id)->take(1)->first();
            return view ('PW/practica05_actualizar')->with ('uno', $uno);
        }

        public function actualizar_datos(Request $data,$id)
        {
            $editar = Practica05Model::find($id);

            $editar->id = $data->id;
            $editar->rfc = $data->rfc;
            $editar->curp = $data->curp;
            $editar->ncontrol = $data->ncontrol;
            $editar->materia1 = $data->materia1;
            $editar->materia2 = $data->materia2;
            $editar->materia3 = $data->materia3;
            $editar->calif1 = $data->calif1;
            $editar->calif2 = $data->calif2;
            $editar->calif3 = $data->calif3;
            $editar->promedio = $data->promedio;
            $editar->fecha = $data->fecha;

            $editar->save();

            return redirect()->to('practica05_insertar');
    }

    }