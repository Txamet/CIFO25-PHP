<?php
//Ver este ejercicio en localhost y no servidor del Five Server
// Ejemplos de variables SuperGlobales
echo "<h2>" . $_SERVER["SERVER_NAME"] . "<h2>";
echo "<h2>" . $_SERVER["SERVER_SOFTWARE"] . "<h2>";
echo "<h2>" . $_SERVER["HTTP_USER_AGENT"] . "<h2>";
echo "<h2>" . $_SERVER["SERVER_PORT"] . "<h2>";

function pDump($variable) {
  echo "<pre>";
  var_dump($variable);
  echo "</pre>";
}

pDump($_SERVER);

?>