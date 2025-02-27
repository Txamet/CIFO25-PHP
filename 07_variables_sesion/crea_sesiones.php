<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  <form action="" class="container col-md-8 col-lg-4" method="get">
    <div class="mb-3">
      <label for="nombre" class="form-label">Nombre:</label>
      <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Introduce tu nombre" value="<?= isset($_SESSION['nombre']) ? $_SESSION['nombre'] : ''; ?>">
    </div>
    <div class="mb-3">
      <label for="mail" class="form-label">Correo electrónico:</label>
      <input type="email" name="mail" id="mail" class="form-control" placeholder="nombre@dominio" value="<?= isset($_SESSION['mail']) ? $_SESSION['mail'] : ''; ?>">
    </div>
    <button type="reset" class="btn btn-danger">Reset</button>
    <input type="submit" value="Enviar" class="btn btn-primary" name="enviar">
  </form>
</body>
</html>