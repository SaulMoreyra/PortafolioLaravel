<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Practica 2</title>
</head>
<body>
   <!--'razon_social','giro','domicilio_fiscal','RFC','estado','anio_ingreso','bandera'--->
    {!!Form::open(array('url' => 'ferreteria/inserta', 'method' => 'POST','autocomplete' => 'off'))!!}

    {!! Form::Label('Razón Social ')!!}
    <br>
    {!! Form::text('razon_social',null)!!}
    <br>
    {!! Form::Label('Giro: ')!!}
    <br>
    {!! Form::text('giro',null)!!}
    <br>
    {!! Form::Label('Domicilio Fiscal: ')!!}
    <br>
    {!! Form::text('domicilio_fiscal',null)!!}
    <br>
    {!! Form::Label('RFC: ')!!}
    <br>
    {!! Form::text('rfc',null)!!}
    <br>
    {!! Form::Label('Estado: ')!!}
    <br>
    {!! Form::text('estado',null)!!}
    <br>
    {!! Form::Label('Año Ingreso: ')!!}
    <br>
    {!! Form::text('anio_ingreso',null)!!}
    <br>
    {!! Form::Label('Bandera: ')!!}
    <br>
    {!! Form::text('bandera',null)!!}
    <br>


    {!!Form::submit('Registrar', ['content' => '<span>Registrar</span>'])!!}

        
    {!!Form::close()!!}
</body>
</html>