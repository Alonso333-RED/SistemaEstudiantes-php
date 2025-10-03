<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if ($data) { ?>
    <h1>Estudiante Encontrado</h1>
    <table border="1" >
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Apellido1</th>
            <th>Apellido2</th>
            <th>Run</th>
            <th>Curso</th>
        </tr>
            <tr>
                <th><?php echo $data->estudiante_id ?></th>
                <th><?php echo $data->nombre ?></th>
                <th><?php echo $data->apellido1 ?></th>
                <th><?php echo $data->apellido2 ?></th>
                <th><?php echo $data->run ?></th>
                <th><?php echo $data->curso ?></th>
            </tr>
    </table>
    <?php } else { ?>
        <h1>No se encontro el estudiante</h1>
    <?php } ?>
</body>
</html>