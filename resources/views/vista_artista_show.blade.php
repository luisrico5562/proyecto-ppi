<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver artista</title>
</head>
<body>
    <h1>{{$artista->nombre}}</h1>
    <h2>{{$artista->pais}}</h2>
    <p>{{$artista->descripcion}}</p>

    <br>
    <form action="{{route('Artista.edit', $artista)}}">
        <input type="submit" value="Editar" />
    </form>

    <br>
    <form action="{{route('Artista.index')}}">
        <input type="submit" value="Regresar" />
    </form>

</body>
</html>