<?php
session_start();

if (!isset($_SESSION['nombre']) || !isset($_SESSION['mail']))
{
  header("refresh:3;url=crea_sesiones.php");
};

?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Verificacion de sesiones</title>
</head>
<body>
<h1>Datos recibidos</h1>
<p>Nombre: <?= $_SESSION['nombre']; ?></p>
<p>Correo: <?= $_SESSION['mail']; ?></p>

<?php ?>

  
</body>
</html>