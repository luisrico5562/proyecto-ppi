<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artistas</title>
</head>
<body>
    <h1>VER ARTISTAS</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>|</th>
            <th>Nombre</th>
            <th>|</th>
            <th>País</th>
        </tr>
        @foreach ($artistas as $artista)
        <tr>
            <th>{{$artista->id}}</th>
            <th>|</th>
            <th><a href="{{route('Artista.show', $artista)}}">{{$artista->nombre}}</a></th>
            <th>|</th>
            <th>{{$artista->pais}}</th>
        </tr>
        @endforeach
    </table>
    
    <br>
    <form action="{{route('Artista.create')}}">
        <input type="submit" value="Agregar artista" />
    </form>
</body>
</html>