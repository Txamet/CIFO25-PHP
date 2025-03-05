<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>formulario</title>
</head>
<body>
    
    <form class="container col-md-8 col-lg-4" action="crea_cookies.php" method="post">
    
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" name="nombre" class="form-control" id="nombre" required value="<?= isset($_SESSION['nombre']) ? $_SESSION['nombre'] : ''; ?>">
    </div>

    <div class="mb-3">
        <label for="mail" class="form-label">Correo electronico</label>
        <input type="mail" name="mail" class="form-control" id="mail" required value="<?= isset($_SESSION['mail']) ? $_SESSION['mail'] : ''; ?>">
    </div>

    <button type="reset" class="btn btn-danger">Reset</button>
    <button type="submit" class="btn btn-primary" name="enviar">Enviar</button>
    
</form>
</body>
</html>
