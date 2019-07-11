<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
</head>
<body>
    {!! Form::Label('ID: ')!!}
    <br>
    {!! Form::text('id',$variable ->id) !!}
    <br>
    {!! Form::Label('Razon Social: ')!!}
    <br>
    {!! Form::text('razon_social',$variable->razon_social)!!}
    <br>
    {!! Form::Label('RFC: ')!!}
    <br>
    {!! Form::text('RFC',$variable->RFC)!!}
    <br>
    {!! Form::Label('Nombre Dueño: ')!!}
    <br>
    {!! Form::text('nombre_dueno',$variable->nombre_dueno)!!}
    <br>
    {!! Form::Label('Direccion Dueño: ')!!}
    <br>
    {!! Form::text('direccion_dueno',$variable->direccion_dueno)!!}
    <br>
    {!! Form::Label('Tipo Empresa: ')!!}
    <br>
    {!! Form::text('tipo_empresa',$variable->tipo_empresa)!!}
    <br>
    {!! Form::Label('Telefono: ')!!}
    <br>
    {!! Form::text('telefono',$variable->telefono)!!}
    <br>
    {!! Form::Label('Fecha Ingreso: ')!!}
    <br>
    {!! Form::text('fecha_ingreso',$variable->fecha_ingreso)!!}
    <br>
</body>
</html>