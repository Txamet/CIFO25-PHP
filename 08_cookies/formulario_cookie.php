<!DOCTYPE html>
<html lang="es">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Formulario Inicio Sesion</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
 
<form class="container col-md-8 col-lg-4" action="envio_cookie.php" method="get">

<div class="mb-3">
 <label for="nombre" class="form-label">Nombre:</label>
 <input type="text" name="nombre" id="nombre_id" class="form-control" placeholder="Introduce tu nombre" value="">
</div>
<div class="mb-3">
<label for="mail" class="form-label">Correo electrónico: </label>
<input type="email" class="form-control" name="mail" id="mail_id" placeholder="nombre@dominio.com" value="">

</div>
<button type="reset" class="btn btn-danger">Reset</button>
<input type="submit" class="btn btn-success" value="Enviar" name="enviar">
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>