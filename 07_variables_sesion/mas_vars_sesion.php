<?php

session_start();
echo $_SESSION["session_var1"];
echo "<br>";

echo $_SESSION["session_var2"];
echo "<br>";

?>

<a href="intr_vars_sesion.php">Ir a la intro de las variables de sesión </a> || <a href="uso_var_sesion.php">Ir a uso de variables de sesión </a>
<?php session_destroy(); ?>