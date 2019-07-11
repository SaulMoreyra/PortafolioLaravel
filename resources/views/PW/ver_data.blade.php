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
    {!! Form::Label('Nombre: ')!!}
    <br>
    {!! Form::text('nombre',$variable->nombre)!!}
    <br>
</body>
</html>