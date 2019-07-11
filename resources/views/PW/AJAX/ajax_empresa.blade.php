<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Inserta Empresa</title>
</head>
<body>
    {!!Form::open(array('url' => 'ajax/inserta_empresa', 'method' => 'POST','autocomplete' => 'off'))!!}

    {!! Form::Label('RFC: ')!!}
    <br>
    {!! Form::text('rfc',null)!!}
    <br>

    {!! Form::Label('Razón Social ')!!}
    <br>
    {!! Form::text('razon_social',null)!!}
    <br>

    {!! Form::Label('Domicilio Fiscal: ')!!}
    <br>
    {!! Form::text('domicilio_fiscal',null)!!}
    <br>
    {!! Form::Label('Direccion Fiscal: ')!!}
    <br>
    {!! Form::text('direccion_fiscal',null)!!}
    <br>
    {!! Form::Label('Apoderado Legal: ')!!}
    <br>
    {!! Form::text('apoderado_legal',null)!!}
    <br>

    {!! Form::Label('Telefono: ')!!}
    <br>
    {!! Form::text('telefono',null)!!}
    <br>


    {!!Form::submit('Registrar', ['content' => '<span>Registrar</span>'])!!}

        
    {!!Form::close()!!}
</body>
</html>