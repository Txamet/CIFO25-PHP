<?php

function volver()
{
 echo "SE SIENTE. TE QUERIAS COLAR";
 //header('Location: crea_sesiones.php') //URL barra de direcciones
 header('refresh:4; url=formulario_cookies.php'); //URL barra de direcciones
}


if (!isset($_REQUEST['enviar'])){
 volver();
 exit();
}

if((isset($_REQUEST['nombre']) && empty($_REQUEST['nombre'])) || (isset($_REQUEST['mail']) && empty($_REQUEST['mail']))) {
 volver();
}else {
 
$nombre = $_REQUEST['nombre'];
$mail = $_REQUEST['mail'];
$myArray = ['nombre' => $_REQUEST['nombre'], 'mail' => $_REQUEST['mail']];

foreach ($myArray as $key => $value) {
 echo "<li>$key = $value </li>";

}

setcookie("nombre", $nombre, time() + 10); //ESTO NO VA, es puramente informativo.
setcookie("email", $mail, time() + 10);
var_dump($_COOKIE);

header("refresh:5; url=verifica_cookie.php");
}



