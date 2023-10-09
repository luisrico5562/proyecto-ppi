<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Disco</title>
</head>
<body>
    <h1>Modificar disco</h1>
    <!--<form action="/Disco" method="POST">-->
    <form action="{{ route('Disco.update', $disco)}}" method="POST">
        
    @csrf
    @method('PATCH')
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" value="{{ $disco->nombre}}"><br>
        <label for="genero">Género: </label>
        <input type="text" name="genero" value="{{ $disco->genero}}"><br>
        <label for="artista">Artista: </label>
        <input type="text" name="artista" value="{{ $disco->artista}}"><br>
        <label for="year">Año: </label>
        <input type="number" name="year" value="{{ $disco->year}}"><br>
        <label for="precio">Precio: </label>
        <input type="number" name="precio" value="{{ $disco->precio}}"><br>

        <input type="submit" value="Modificar datos">
</body>
</html>