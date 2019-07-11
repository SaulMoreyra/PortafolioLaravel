<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script type="text/javascript" src="../js/cargar_materias.js"></script>
    
</head>
<body>
    {!!Form::open(array('url' => 'ajax/insertar_alumno', 'method' => 'POST','autocomplete' => 'off'))!!}
    <table>
        <tr>
            <td>{!! Form::Label('Nombre: ')!!}</td>
        </tr>
        <tr>
            <td> {!! Form::text('nombre',null)!!}</td>
        </tr>
        <tr>
            <td>
                {{Form::select('idsemestre',$semestre,null,
                    ['id' => 'select-semestre','placeholder'=>'SELECCIONE'])}}
            </td>
        </tr>
        <tr>
            <td>
                <select name="idmateria" id="select-materia">
                    <option value="SELECCIONE">SELECCIONE</option>
                </select>   
            </td>
        </tr>
        <tr><td>{!!Form::submit('Registrar', ['content' => '<span>Registrar</span>'])!!}</td></tr>
    </table>
    {!!Form::close()!!}
</body>
</html>