<?php
require_once "assets/functions.php";
//Vista de resultado que muestra desde el controller  lo necesario
$nombre = saneadoreitor($_POST['nombre']);
$apellidos = saneadoreitor($_POST['apellidos']);
$edad = saneadoreitor((int) $_POST['edad']);
$email = saneadoreitor($_POST['email']);
$pass = saneadoreitor($_POST['pass']);
//si hay errores vuelve a la vista index con los mensajes de feedback.php
if ('ok' != $error) {
      header("Location:../index.php?error=$error");
}
session_start();
$_SESSION['nombre'] = $nombre;
$_SESSION['apellidos'] = $apellidos;
$_SESSION['edad'] = $edad;
$_SESSION['email'] = $email;
$_SESSION['pass'] = $pass;
require_once "views/feedback.tpl";
?>
