<!DOCTYPE HTML>
<html lang="es">
	<head>
		<meta charset="utf-8" />
		<title>Validación de formularios PHP</title>
	</head>
	<body>
		<h1>Validar formularios en PHP</h1>


		<form method="POST" action="controller/validator.php">
        <!-- envia al controller la información -->
			<label for="nombre">Nombre</label><br/>
			<input type="text" name="nombre" value="<?= isset($nombre)? $nombre : ''; ?>"
             ><br/>

			<label for="apellidos">Apellidos</label><br/>
			<input type="text" name="apellidos"  value="<?=isset($apellidos) ? $apellidos : '';?>"><br/>

			<label for="edad">Edad</label><br/>
			<input type="text" name="edad" value="<?=isset($edad) ? $edad : '';?>" ><br/>

			<label for="email">Email</label><br/>
			<input type="text" name="email" value="<?=isset($email) ? $email : '';?>"><br/>

			<label for="pass">Contraseña</label><br/>
			<input type="password" name="pass" value="<?=isset($pass) ? $pass : '';?>"><br/>
        <!-- los inputs a su vez recogen los datos ya válidos en cada envio -->
			<input type="submit" name="enviar" value="Enviar" />
		</form>
	</body>
</html>
