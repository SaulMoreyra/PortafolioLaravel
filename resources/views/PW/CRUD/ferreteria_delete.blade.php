<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Practica 2</title>
</head>
<body>
   <!--'razon_social','giro','domicilio_fiscal','RFC','estado','anio_ingreso','bandera'--->
    {!!Form::open(array('url' => 'ferreteria/delete/'.$uno->id, 'method' => 'PUT','autocomplete' => 'off'))!!}

    {!! Form::Label('Razón Social ')!!}
    <br>
    {!! Form::text('razon_social',$uno->razon_social)!!}
    <br>
    {!! Form::Label('Giro: ')!!}
    <br>
    {!! Form::text('giro',$uno->giro)!!}
    <br>
    {!! Form::Label('Domicilio Fiscal: ')!!}
    <br>
    {!! Form::text('domicilio_fiscal',$uno->domicilio_fiscal)!!}
    <br>
    {!! Form::Label('RFC: ')!!}
    <br>
    {!! Form::text('rfc',$uno->RFC)!!}
    <br>
    {!! Form::Label('Estado: ')!!}
    <br>
    {!! Form::text('estado',$uno->estado)!!}
    <br>
    {!! Form::Label('Año Ingreso: ')!!}
    <br>
    {!! Form::text('anio_ingreso',$uno->anio_ingreso)!!}
    <br>
    {!! Form::Label('Bandera: ')!!}
    <br>
    {!! Form::text('bandera',$uno->bandera)!!}
    <br>


    {!!Form::submit('Eliminar', ['content' => '<span>Eliminar</span>'])!!}

        
    {!!Form::close()!!}
</body>
</html>