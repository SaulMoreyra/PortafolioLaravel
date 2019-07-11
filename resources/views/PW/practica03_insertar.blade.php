<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
</head>
<body>
    {!!Form::open(array('url' => 'insertar03', 'method' => 'POST','autocomplete' => 'off'))!!}


    {!! Form::Label('ID: ')!!}
    <br>
    {!! Form::number('id',null) !!}
    <br>
    {!! Form::Label('Razon Social: ')!!}
    <br>
    {!! Form::text('razon_social',null)!!}
    <br>
    {!! Form::Label('RFC: ')!!}
    <br>
    {!! Form::text('RFC',null)!!}
    <br>
    {!! Form::Label('Nombre Dueño: ')!!}
    <br>
    {!! Form::text('nombre_dueno',null)!!}
    <br>
    {!! Form::Label('Direccion Dueño: ')!!}
    <br>
    {!! Form::text('direccion_dueno',null)!!}
    <br>
    {!! Form::Label('Tipo Empresa: ')!!}
    <br>
    {!! Form::text('tipo_empresa',null)!!}
    <br>
    {!! Form::Label('Telefono: ')!!}
    <br>
    {!! Form::number('telefono',null)!!}
    <br>
    {!! Form::Label('Fecha Ingreso: ')!!}
    <br>
    {!! Form::date('fecha_ingreso',null)!!}
    <br>

    {!!Form::submit('Registrar', ['content' => '<span>Registrar</span>'])!!}
    {!!Form::close()!!}
</body>
</html>