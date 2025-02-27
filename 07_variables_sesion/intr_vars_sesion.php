<?php
require "./assets/functions.php";


/* 
Sesión: almacena y mantiene datos (los que queramos) del usuario mientras navega en un sitio web hasta que cierra la sesión, sale del dominio que la ha creado o cierra el navegador 
*/

echo $normal_var;

session_start(); //Iniciar sesión o mantener la ya iniciada
$_SESSION["session_var1"] = "yo soy una variable de sesión";

pDump($_SESSION);

echo "<br>";

echo $_SESSION["session_var1"];
echo "<br>";

echo $_SESSION["session_var2"];

pDump($_SESSION);
?>

<a href="uso_var_sesion.php">Ir a uso de variables de sesión </a> || <a href="mas_vars_sesion.php"> Ir a más variables de sesión</a>