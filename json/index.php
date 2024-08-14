
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guardar Persona</title>
</head>
<body>
    <form action="guardar-persona.php" method="POST">

    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre">

    <label for="apellidos">Apellidos</label>
    <input type="text" name="apellidos" id="apellidos">

    <label for="cumpleanios">Cumpleaños</label>
    <input type="date" name="cumpleanios" id="cumpleanios">

    <button type="submit">Enviar</button>

    </form>
</body>
</html>