<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista de Estudiantes</h1>
    <a href="<?php echo BASE_URL."?controller=EstudianteController&action=viewNuevoEstudiante" ?>">Nuevo estudiante</a> <br>
    <a href="<?php echo BASE_URL."?controller=EstudianteController&action=viewRun" ?>">Buscar estudiante</a>
    <table border="1" >
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Apellido1</th>
            <th>Apellido2</th>
            <th>Run</th>
            <th>Curso</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
        <?php foreach($estudiantes as $e) { ?>
            <tr>
                <th><?php echo $e->estudiante_id ?></th>
                <th><?php echo $e->nombre ?></th>
                <th><?php echo $e->apellido1 ?></th>
                <th><?php echo $e->apellido2 ?></th>
                <th><?php echo $e->run ?></th>
                <th><?php echo $e->curso ?></th>
                <th><a href="<?php echo BASE_URL."?controller=EstudianteController&action=viewEditarEstudiante&id=$e->estudiante_id" ?>">Editar</a></th>
                <th><a href="<?php echo BASE_URL."?controller=EstudianteController&action=eliminarEstudiante&id=$e->estudiante_id" ?>">Eliminar</a></th>
            </tr>
        <?php } ?>
    </table>
</body>
</html>