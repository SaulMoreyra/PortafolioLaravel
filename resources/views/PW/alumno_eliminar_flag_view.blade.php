<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Practica 2</title>
</head>
<body>
   
    {!!Form::open(array('url' => 'alumno_eliminar_flag/'.$uno->id, 'method' => 'PUT','autocomplete' => 'off'))!!}

    {!! Form::Label('Nombre: ')!!}
    <br>
    {!! Form::text('nombre',$uno->nombre)!!}
    <br>
    {!! Form::Label('Apellido Paterno: ')!!}
    <br>
    {!! Form::text('apellidoP',$uno->apellidoP)!!}
    <br>
    {!! Form::Label('Apellido Materno: ')!!}
    <br>
    {!! Form::text('apellidoM',$uno->apellidoM)!!}
    <br>
    {!! Form::Label('Edad: ')!!}
    <br>
    {!! Form::text('edad',$uno->edad)!!}
    <br>
    {!! Form::Label('Direccion: ')!!}
    <br>
    {!! Form::text('direccion',$uno->direccion)!!}
    <br>
    {!! Form::Label('Telefono: ')!!}
    <br>
    {!! Form::text('telefono',$uno->telefono)!!}
    <br>

    {!!Form::submit('Eliminar', ['content' => '<span>Eliminar por bandera</span>'])!!}

        
    {!!Form::close()!!}
</body>
</html>