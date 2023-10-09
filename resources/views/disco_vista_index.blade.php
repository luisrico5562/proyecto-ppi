<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>
    <h1>LISTADO DE DISCOS</h1>
    
    <table>
        <tr>
            <th>ID</th>
            <th>|</th>
            <th>Nombre</th>
        </tr>
        @foreach ($discos as $disco)
        <tr>
            <th>{{$disco->id}}</th>
            <th>|</th>
            <th>
                <a href="{{route('Disco.show', $disco)}}"> {{$disco->nombre}}</a>

                <a href="{{ route('Disco.edit', $disco) }}">
                    Editar
                </a>
                <form method="post" action="">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Borrar">
                </form>
            </th>
        </tr>
        @endforeach
    </table>

    <form action="{{ route('Disco.create')}}">
        <input type="submit" value="Registrar disco">
    </form>

</body>
</html>