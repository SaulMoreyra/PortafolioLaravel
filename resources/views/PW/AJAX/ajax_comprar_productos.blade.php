<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>COMPRAR PRODUCTO</title>
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script type="text/javascript" src="../js/vender_productos.js"></script>
    
</head>
<body>
    <table>
        <tr>
            <td>{!! Form::Label('PRODUCTO: ')!!}</td>
            <td>
                {{Form::select('id',$nombres,null,
                    ['id' => 'select-id','placeholder'=>'SELECCIONE'])}}
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
        <tr>
            <td>{!! Form::Label('CANTIDAD: ')!!}</td>
            <td>
                <select name="cantidad" id="select-cantidad">
                    <option value="SELECCIONE">SELECCIONE</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>   
            </td>
        </tr> 
        
        <tr>
            <td>{!! Form::Label('TOTAL: ')!!}</td>
            <td>
                <select name="precio_v" id="select-total">
                    <option value="SELECCIONE">SELECCIONE</option>
                </select> 
            </td>
        </tr> 
    </table>

    <!--'id','nombre','tipo','proveedor','precio_u','precio_v'-->
</body>
</html>