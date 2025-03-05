<?php 

if (!isset($_COOKIE['nombre']) || !isset($_COOKIE['email'])){
 header("refresh:20; url=formulario_cookie.php");
}


?>

<!DOCTYPE html>
<html lang="es">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>
 <h1>Datos Recibidos</h1>
 <p>Nombre: <?= $_COOKIE['nombre']; ?><p>
 <p>Email: <?= $_COOKIE['email']; ?><p>
 
 <p> <a href="crea_sesiones.php">Volver al formulario</a>
</body>
</html>