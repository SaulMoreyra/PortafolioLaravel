<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--link href="localhost:8000/public/css/main.css" rel="stylesheet" type="text/css"-->
    
    <title>Practica 2</title>
</head>
<body>
    <table border="1px">
       <!--'razon_social','giro','domicilio_fiscal','RFC','estado','anio_ingreso','bandera'--->
        <tr>
            <td>ID</td>
            <td>Razon Social</td>
            <td>Giro</td>
            <td>Domicilio Fiscal</td>
            <td>RFC</td>
            <td>Estado</td>
            <td>Año Ingreso</td>
            <td>Bandera</td>
            <td id = "campo_activo">Accion</td>
        </tr>
        @foreach ($usuario as $c)
            <tr>
            <td>{{ $c->id }}</td>
            <td>{{ $c->razon_social }}</td>
            <td>{{ $c->giro }}</td>
            <td>{{ $c->domicilio_fiscal }}</td>
            <td>{{ $c->RFC }}</td>
            <td>{{ $c->estado }}</td>
            <td>{{ $c->anio_ingreso }}</td>
            <td>{{ $c->bandera }}</td>
            <td id= "dark"><a href="/ferreteria/ver/{{ $c->id }}">[   VER   ]</a></td>
            <td id= "dark"><a href="/ferreteria/update_view/{{ $c->id }}">[   EDITAR   ]</a></td>
            <td id= "dark"><a href="/ferreteria/delete_view/{{ $c->id }}">[   ELIMINAR   ]</a></td>
            <td id= "dark"><a href="/ferreteria/delete_view_flag/{{ $c->id }}">[   ELIMINAR BANDERA   ]</a></td>
            </tr>
        @endforeach
    </table>

    <br>
    <a href="/ferreteria/insertar_view">[   NUEVO   ]</a>
</body>
</html>