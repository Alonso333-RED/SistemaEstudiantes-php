<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Nuevo estudiante</h2>
    <form action="<?php echo BASE_URL."?controller=EstudianteController&action=editarEstudiante" ?>" method="post">
        <input type="text" name="nombre" placeholder="Nombre estudiante" value="<?php echo $data->nombre ?>">
        <input type="text" name="apellido1" placeholder="Primer apellido" value="<?php echo $data->apellido1 ?>">
        <input type="text" name="apellido2" placeholder="Segundo apellido" value="<?php echo $data->apellido2 ?>">
        <input type="text" name="run" placeholder="run" value="<?php echo $data->run ?>">
        <input type="text" name="curso" placeholder="Curso" value="<?php echo $data->curso ?>">
        <input type="hidden" name="estudiante_id" value="<?php echo $data->estudiante_id ?>">
        <button type="submit">Editar</button>
    </form>
</body>
</html>