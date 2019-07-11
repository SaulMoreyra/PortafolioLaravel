<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script type="text/javascript" src="../js/cargar_alumnos.js"></script>
    
</head>
<body>
    <table>
        <tr>
            <td>
                {{Form::select('idsexo',$sexo,null,
                    ['id' => 'select-genero','placeholder'=>'SELECCIONE'])}}
            </td>
        </tr>
        
        <tr>
            <td>
                <select name="idgenero" id="select-genero2">
                    <option value="SELECCIONE">SELECCIONE</option>
                </select>   
            </td>
        </tr>
    </table>
</body>
</html>