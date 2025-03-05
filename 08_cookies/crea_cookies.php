<?php
function volver() {
  header("refresh:1;url=form_crea_cookies.php");
}

if (!isset($_REQUEST['enviar'])) {
  volver();
  exit();
}

if (

  isset($_REQUEST['nombre']) && empty($_REQUEST['nombre']) || isset($_REQUEST['mail']) && empty($_REQUEST['mail'])
  
  ) {
  volver();
  exit();
} else {
  $nombre=$_REQUEST['nombre'];
  $mail=$_REQUEST['mail'];

  setcookie("nombre", $nombre, time() + (30));
  setcookie("mail", $mail, time() + (30));
  header("refresh:1;url=verifica_cookies.php");

}

?>