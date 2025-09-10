<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Cliesntes</title>
</head>
<body>
    
    <Table>
        <thead>Clientes Registrador:</thead>
        <tr>
            <td>Nombres</td>
            <td>Apellidos</td>
            <td>Relación</td>
            <td>Telefono</td>
            <td>Correo</td>
        </tr>
        @foreach ($apoderados as $clientes)
            <tr>
                <td> {{$clientes-> nombre}}</td>
                <td> {{$clientes-> apellido}}</td>
                <td> {{$clientes-> relacion}}</td>
                <td> {{$clientes-> telefono}}</td>
                <td> {{$clientes-> correo}}</td>
                <td><button class="btn-editar">Editar</button></td>
                <td><button class="btn-contactar">Contactar</button></td>
            </tr>
        @endforeach
    </Table>
    
</body>
</html>