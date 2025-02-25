<?php

function pDump($variable) {
  echo "<pre>";
  var_dump($variable);
  echo "</pre>";
}

/* echo "<h1>" . $_POST["nombre"] . " " . $_POST["apellidos"] . "</h1>";
pDump($_POST); */

//Se puede usar $_REQUEST y ya no hace falta especificar si es post o get
echo "<h1>" . $_REQUEST["nombre"] . " " . $_REQUEST["apellidos"] . "</h1>";
pDump($_REQUEST);

?>