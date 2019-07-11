<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
</head>
<body>
    {!!Form::open(array('url' => '03Update', 'method' => 'POST','autocomplete' => 'off'))!!}


    {!! Form::Label('ID: ')!!}
    <br>
    {!! Form::number('id',$uno->id) !!}
    <br>
    {!! Form::Label('Razon Social: ')!!}
    <br>
    {!! Form::text('razon_social',$uno->razon_social)!!}
    <br>
    {!! Form::Label('RFC: ')!!}
    <br>
    {!! Form::text('RFC',$uno->rfc)!!}
    <br>
    {!! Form::Label('Nombre Dueño: ')!!}
    <br>
    {!! Form::text('nombre_dueno',$uno->nombre_dueno)!!}
    <br>
    {!! Form::Label('Direccion Dueño: ')!!}
    <br>
    {!! Form::text('direccion_dueno',$uno->direccion_dueno)!!}
    <br>
    {!! Form::Label('Tipo Empresa: ')!!}
    <br>
    {!! Form::text('tipo_empresa',$uno->tipo_empresa)!!}
    <br>
    {!! Form::Label('Telefono: ')!!}
    <br>
    {!! Form::number('telefono',$uno->telefono)!!}
    <br>
    {!! Form::Label('Fecha Ingreso: ')!!}
    <br>
    {!! Form::text('fecha_ingreso',$uno->fecha_ingreso)!!}
    <br>

    {!!Form::submit('Actualizar', ['content' => '<span>Actualizar</span>'])!!}
    {!!Form::close()!!}
</body>
</html>