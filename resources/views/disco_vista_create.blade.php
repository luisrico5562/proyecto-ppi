<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Disco</title>
</head>
<body>
    <h1>Ingresar Disco</h1>
    <!--<form action="/Disco" method="POST">-->
    <form action="{{route('Disco.store')}}" method="POST">
        
    @csrf
        <label for="nombre">Nombre: </label><input type="text" name="nombre"><br>
        <label for="genero">Género: </label><input type="text" name="genero"><br>
        <label for="artista">Artista: </label><input type="text" name="artista"><br>
        <label for="year">Año: </label><input type="number" name="year"><br>
        <label for="precio">Precio: </label><input type="number" name="precio"><br>

        <input type="submit" value="Guardar">
</body>
</html>