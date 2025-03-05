<?php
function volver() {
  echo "TE QUERIAS COLAR";
  /*
  header('Location: crea_sesiones.php');
  */
  header("refresh:4;url=crea_sesiones.php");
}

if (!isset($_GET['enviar'])) {
  volver();
  exit();
}

if (

  isset($_GET['nombre']) && empty($_GET['nombre']) || isset($_GET['mail']) && empty($_GET['mail'])
  
  ) {
  volver();
  exit();
} else {
  $nombre=$_GET['nombre'];
  $mail=$_GET['mail'];

  $myArray = ['nombre' => $_GET['nombre'], 'mail' => $_GET['mail']];

  foreach ($myArray as $key => $value) {
    echo "<li>$key = $value</li>";
  }

  session_start();
  setcookie("nombre", $nombre, time() + (60 * 60 * 24 * 365));
  $_SESSION['nombre'] = $nombre;
  $_SESSION['mail'] = $mail;
  header("refresh:10;url=verifica_sesion.php");

}

?>