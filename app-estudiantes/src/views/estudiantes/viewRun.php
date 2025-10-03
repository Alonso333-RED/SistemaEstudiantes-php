<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Ingrese run estudiante</h2>
    <form action="<?php echo BASE_URL."?controller=estudiantecontroller&action=postRun" ?>" method="post">     
        <input type="text" name="run" placeholder="12345678-9">
        <button type="submit">Buscar</button>
    </form>
</body>
</html>