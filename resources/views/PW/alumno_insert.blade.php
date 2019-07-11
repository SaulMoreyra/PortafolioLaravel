<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Practica 2</title>
</head>
<body>
   
    {!!Form::open(array('url' => 'insertar', 'method' => 'POST','autocomplete' => 'off'))!!}

    {!! Form::Label('Nombre: ')!!}
    <br>
    {!! Form::text('nombre',null)!!}
    <br>
    {!! Form::Label('Apellido Paterno: ')!!}
    <br>
    {!! Form::text('apellidoP',null)!!}
    <br>
    {!! Form::Label('Apellido Materno: ')!!}
    <br>
    {!! Form::text('apellidoM',null)!!}
    <br>
    {!! Form::Label('Edad: ')!!}
    <br>
    {!! Form::text('edad',null)!!}
    <br>
    {!! Form::Label('Direccion: ')!!}
    <br>
    {!! Form::text('direccion',null)!!}
    <br>
    {!! Form::Label('Telefono: ')!!}
    <br>
    {!! Form::text('telefono',null)!!}
    <br>

    {!!Form::submit('Registrar', ['content' => '<span>Registrar</span>'])!!}

        
    {!!Form::close()!!}
</body>
</html>