<?php
require "./assets/functions.php";

session_start(); //Iniciar o mantener abierta una sesión
echo $normal_var;
echo "<br>";
echo $_SESSION["session_var1"];
$numero = 456321456.4576;
echo "<br>";

$_SESSION["session_var2"] = $numero;
pDump($_SESSION);
echo "<br>";

?>

<a href="intr_vars_sesion.php">Ir a la intro de las variables de sesión </a> || <a href="mas_vars_sesion.php"> Ir a más variables de sesión</a>