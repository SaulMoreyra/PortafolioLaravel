<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        {!!Form::open(array('url'=>'insertar5','method'=>'POST','autocomplete'=>'off'))!!}
        
        {!!Form::label('RFC: ') !!}
        {!!Form::text('rfc',null)!!}
        <br>
        {!!Form::label('CURP: ') !!}
        {!!Form::text('curp',null)!!}
        <br>
        {!!Form::label('Número de Control: ') !!}
        {!!Form::text('ncontrol',null)!!}
        <br>
        {!!Form::label('Materia 1: ')!!}
        {!!Form::select('materia1', array('Español' => 'Español', 'Matematicas' => 'Metematicas', 'Ingles' => 'Inglés'), null)!!}
        <br>
        {!!Form::label('Materia 2: ')!!}
        {!!Form::select('materia2', array('Español' => 'Español', 'Matematicas' => 'Metematicas', 'Ingles' => 'Inglés'), null)!!}
        <br>
        {!!Form::label('Materia 3: ')!!}
        {!!Form::select('materia3', array('Español' => 'Español', 'Matematicas' => 'Metematicas', 'Ingles' => 'Inglés'), null)!!}
        <br>
        {!!Form::label('Calificacion 1: ') !!}
        {!!Form::text('calif1',null)!!}
        <br>
        {!!Form::label('Calificacion 2: ') !!}
        {!!Form::text('calif2',null)!!}
        <br>
        {!!Form::label('Calificacion 3: ') !!}
        {!!Form::text('calif3',null)!!}
        <br>
        {!!Form::label('Promedio: ') !!}
        {!!Form::text('promedio',null)!!}
        <br>
        {!!Form::label('Fecha: ') !!}
        {!!Form::date('fecha',null)!!}
        <br><br>

        {!!Form::submit('Registrar',['rfc'=>'grabar','curp'=>'grabar',
            'ncontrol'=>'grabar','materia1'=>'grabar','materia2'=>'grabar','materia3'=>'grabar',
            'calif1'=>'grabar','calif2'=>'grabar','calif3'=>'grabar','promedio'=>'grabar','fecha'=>'grabar',
            'content'=>'<span>Registrar<span>'])!!}

        {!!Form::close()!!}
    </body>
</html>