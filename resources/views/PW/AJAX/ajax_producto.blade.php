<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Inserta Producto</title>
</head>
<body>
    {!!Form::open(array('url' => 'ajax/inserta_producto', 'method' => 'POST','autocomplete' => 'off'))!!}

    {!! Form::Label('Nombre: ')!!}
    <br>
    {!! Form::text('nombre',null)!!}
    <br>

    {!! Form::Label('Tipo: ')!!}
    <br>
    {!! Form::text('tipo',null)!!}
    <br>

    {!! Form::Label('Proveedor: ')!!}
    <br>
    {!! Form::text('proveedor',null)!!}
    <br>

    
    <br>
    {!! Form::Label('Precio Unitario: ')!!}
    <br>
    {!! Form::text('precio_u',null)!!}
    <br>

    {!! Form::Label('Precio Venta: ')!!}
    <br>
    {!! Form::text('precio_v',null)!!}
    <br>


    {!!Form::submit('Registrar', ['content' => '<span>Registrar</span>'])!!}

        
    {!!Form::close()!!}
</body>
</html>