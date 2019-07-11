<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VER PRODUCTO</title>
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script type="text/javascript" src="../js/cargar_productos.js"></script>
    
</head>
<body>
    <table>
        <tr>
            <td>{!! Form::Label('NOMBRE: ')!!}</td>
            <td>
                {{Form::select('id',$nombres,null,
                    ['id' => 'select-id','placeholder'=>'SELECCIONE'])}}
            </td>
        </tr>

        <tr>
            <td>{!! Form::Label('TIPO: ')!!}</td>
            <td>
                <select name="tipo" id="select-tipo">
                    <option value="SELECCIONE">SELECCIONE</option>
                </select>   
            </td>
        </tr>

        <tr>
            <td>{!! Form::Label('PROVEEDOR: ')!!}</td>
            <td>
                <select name="proveedor" id="select-proveedor">
                    <option value="SELECCIONE">SELECCIONE</option>
                </select>   
            </td>
        </tr>

        <tr>
                <td>{!! Form::Label('PRECIO UNITARIO: ')!!}</td>
            <td>
                <select name="precio_u" id="select-preciou">
                    <option value="SELECCIONE">SELECCIONE</option>
                </select>   
            </td>
        </tr>  
        
        <tr>
                <td>{!! Form::Label('PRECIO VENTA: ')!!}</td>
            <td>
                <select name="precio_v" id="select-preciov">
                    <option value="SELECCIONE">SELECCIONE</option>
                </select>   
            </td>
        </tr>  
    </table>

    <!--'id','nombre','tipo','proveedor','precio_u','precio_v'-->
</body>
</html>