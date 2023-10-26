<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>VISTA DEL CLIENTE</h1>
    <form action="/Cliente" method="POST">
        @csrf

        <label for="nombre">Nombre</label><br>
        <input type="text" name="nombre"><br>
        <label for="usuario">Usuario</label><br>
        <input type="text" name="usuario"><br>
        <label for="correo">Correo</label><br>
        <input type="email" name="correo"><br>
        <label for="password">Contraseña</label><br>
        <input type="password" name="password"><br>
        <label for="direccion">Dirección</label><br>
        <textarea name="direccion" id="" cols="30" rows="10"></textarea><br>

        <input type="submit" value="Guardar">
    </form>
</body>
</html>
