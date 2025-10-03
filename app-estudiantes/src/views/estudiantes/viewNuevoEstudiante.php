<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Nuevo estudiante</h2>
    <form action="<?php echo BASE_URL."?controller=estudiantecontroller&action=postNuevoEstudiante" ?>" method="post">
        <input type="text" name="nombre" placeholder="Nombre estudiante">
        <input type="text" name="apellido1" placeholder="Primer apellido">
        <input type="text" name="apellido2" placeholder="Segundo apellido">
        <input type="text" name="run" placeholder="run">
        <input type="text" name="curso" placeholder="Curso">
        <button type="submit">Registrar</button>
    </form>
</body>
</html>