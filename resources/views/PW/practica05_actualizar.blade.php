<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
    <body>
      {!!Form::open(array('url'=>'actualizar_datos/'.$uno->id,'method'=>'PUT','autocomplete'=>'off'))!!}
      
      {!!Form::label('ID: ') !!}
      {!!Form::text('id',$uno->id)!!}
      <br>
      {!!Form::label('RFC: ') !!}
      {!!Form::text('rfc',$uno->rfc)!!}
      <br>
      {!!Form::label('CURP: ') !!}
      {!!Form::text('curp',$uno->curp)!!}
      <br>
      {!!Form::label('Número de Control: ') !!}
      {!!Form::text('ncontrol',$uno->ncontrol)!!}
      <br>
      {!!Form::label('Materia 1: ') !!}
      {!!Form::text('materia1',$uno->materia1)!!}
      <br>
      {!!Form::label('Materia 1: ')!!}
      {!!Form::select('materia1', array('Español' => 'Español', 'Matematicas' => 'Metematicas', 'Ingles' => 'Inglés'), $uno->materia1)!!}
      <br>     
      {!!Form::label('Materia 2: ')!!}
      {!!Form::select('materia2', array('Español' => 'Español', 'Matematicas' => 'Metematicas', 'Ingles' => 'Inglés'), $uno->materia1)!!}
      <br>
      {!!Form::label('Materia 3: ')!!}
      {!!Form::select('materia3', array('Español' => 'Español', 'Matematicas' => 'Metematicas', 'Ingles' => 'Inglés'), $uno->materia1)!!}
      <br>
      {!!Form::label('Calificacion 1: ') !!}
      {!!Form::text('calif1',$uno->calif1)!!}
      <br>
      {!!Form::label('Calificacion 2: ') !!}
      {!!Form::text('calif2',$uno->calif2)!!}
      <br>
      {!!Form::label('Calificacion 3: ') !!}
      {!!Form::text('calif3',$uno->calif3)!!}
      <br>
      {!!Form::label('Promedio: ') !!}
      {!!Form::text('promedio',$uno->promedio)!!}
      <br>
      {!!Form::label('Fecha: ') !!}
      {!!Form::date('fecha',$uno->fecha)!!}
      <br><br>
      {!!Form::submit('Registrar',['id'=>'act','rfc'=>'act','curp'=>'act',
            'ncontrol'=>'act','materia1'=>'act','materia2'=>'act','materia3'=>'act',
            'calif1'=>'act','calif2'=>'act','calif3'=>'act','promedio'=>'act','fecha'=>'act',
            'content'=>'<span>Registrar<span>'])!!}
      
      {!!Form::close()!!}

  </body>
</html>