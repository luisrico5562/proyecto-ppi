<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar artista</title>
</head>
<body>
    <!--<form action="/Artista" method="POST">-->
    <h1>REGISTRAR ARTISTA</h1>
    <form action="{{route('Artista.store')}}" method="POST">
        @csrf

        <label for="nombre">Nombre</label><br>
        <input type="text" name="nombre"><br>
        <label for="pais">País</label><br>
        <input type="text" name="pais"><br>
        <label for="descripcion">Descripción</label><br>
        <input type="text" name="descripcion"><br>

        <br>
        <input type="submit" value="Guardar">
    </form>

    <br>
    <form action="{{route('Artista.index')}}">
        <input type="submit" value="Regresar" />
    </form>

</body>
</html>