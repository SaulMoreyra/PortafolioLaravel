<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Practica 2</title>
</head>
<body>
   
    {!! Form::Label('Nombre: ')!!}
    <br>
    {!! Form::text('nombre',$variable->nombre)!!}
    <br>
    {!! Form::Label('Apellido Paterno: ')!!}
    <br>
    {!! Form::text('apellidoP',$variable->apellidoP)!!}
    <br>
    {!! Form::Label('Apellido Materno: ')!!}
    <br>
    {!! Form::text('apellidoM',$variable->apellidoM)!!}
    <br>
    {!! Form::Label('Edad: ')!!}
    <br>
    {!! Form::text('edad',$variable->edad)!!}
    <br>
    {!! Form::Label('Direccion: ')!!}
    <br>
    {!! Form::text('direccion',$variable->direccion)!!}
    <br>
    {!! Form::Label('Telefono: ')!!}
    <br>
    {!! Form::text('telefono',$variable->telefono)!!}
    <br>
</body>
</html>