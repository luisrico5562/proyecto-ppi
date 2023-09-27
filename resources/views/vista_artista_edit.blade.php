<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar artista</title>
</head>
<body>
    <!--<form action="/Artista" method="POST">-->
    <h1>EDITAR ARTISTA</h1>
    <form action="{{route('Artista.update', $artista)}}" method="POST">
        @csrf
        @method('PATCH')

        <label for="nombre">Nombre</label><br>
        <input type="text" name="nombre" value="{{$artista->nombre}}"><br>
        <label for="pais">País</label><br>
        <input type="text" name="pais" value="{{$artista->pais}}"><br>
        <label for="descripcion">Descripción</label><br>
        <input type="text" name="descripcion" value="{{$artista->descripcion}}"><br>

        <br>
        <input type="submit" value="Guardar">
    </form>

    <br>
    <form action="{{route('Artista.destroy', $artista)}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="Eliminar" />
    </form>

    <br>
    <form action="{{route('Artista.show', $artista)}}">
        <input type="submit" value="Regresar" />
    </form>

</body>
</html>