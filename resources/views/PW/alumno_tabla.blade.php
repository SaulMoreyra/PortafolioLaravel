<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <title>Practica 2</title>
</head>
<body>
    <table>
        <!--'nombre','apellidoP','apellidoM','edad','direccion','telefono','activo'-->
        <tr>
            <td>ID</td>
            <td>Nombre</td>
            <td>Apellido Paterno</td>
            <td>Apellido Materno</td>
            <td>Edad</td>
            <td>Direccion</td>
            <td>Telefono</td>
            <td>Activo</td>
            <td id = "campo_activo">Accion</td>
        </tr>
        @foreach ($usuario as $c)
            <tr>
            <td>{{ $c->id }}</td>
            <td>{{ $c->nombre }}</td>
            <td>{{ $c->apellidoP }}</td>
            <td>{{ $c->apellidoM }}</td>
            <td>{{ $c->edad }}</td>
            <td>{{ $c->direccion }}</td>
            <td>{{ $c->telefono }}</td>
            <td>{{ $c->activo }}</td>
            <td><a href="alumno_eliminar_view/{{ $c->id }}">[   ELIMINAR   ]</a></td>
            <td><a href="alumno_eliminar_view_flag/{{ $c->id }}">[   ELIMINAR BANDERA   ]</a></td>
            </tr>
        @endforeach
    </table>
</body>
</html>