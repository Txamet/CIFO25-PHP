<!DOCTYPE html>
<html lang="es">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Cookies con PHP</title>
</head>
<body>
 <pre>
  <code>
<?php
/*
Cookies: Es un fichero que se almacena en el ordenador del usuario que visita la web, con el fin de recordar datos o rastrear el comportamiento del mismo en la web
*/

//Crear cookie
//setcookie("nombre", "valor que solo puede ser texto", caducidad, ruta, dominio);)


//Cookie basica, dura lo que dura la sesion
//setcookie("micookie", "valor de mi galleta");

//Cookie con expiración
setcookie("unyear", "Cookie de 365 dias", time() + (60 * 60 *24 *365));
setcookie("contador", $_COOKIE['contador'] + 1, time() + 10);
var_dump($_COOKIE);

?>
  </code>
</pre>
 </body>
</html>