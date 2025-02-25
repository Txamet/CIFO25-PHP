<?php

/* 
Variables globales: son las que se declaran fuera de una función y están disponibles tanto fuera de las funciones de manera normal como dentro usando la palabra global o la palabra superglobal $GLOBALS["nombre_variable"].

Variables locales: son las que se definen dentro de una función y no pueden ser usadas fuera de la función. Están disponibles dentro de la función a no ser que hagamos un return y se muestren como resultado devuelto por la función.
*/

$fo2;
$foo = "Contenido de ejemplo GLOBAL";

function test() {
  $foo = "variable local";
  global $fo2;

  echo "{$foo} en el ámbito global: {$GLOBALS['foo']}<br>";
  echo '$foo en el ámbito simple: ' . $foo . "<br>";
  echo "$fo2 en el ámbito global: $fo2 <br>";
}

$fo2 = "Contenido de ejemplo con global";
test();
?>