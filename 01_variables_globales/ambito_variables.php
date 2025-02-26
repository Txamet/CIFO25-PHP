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


//Variables globales
$frase = "Ni tan genio, ni tan mediocre";
$frasedos = "NNNNNNNNNoooo";
echo $frase . " - " . $frasedos;

function pruebaAmbito() {
  global $frase;
  global $frasedos;

  echo "<h1>" . $frase . " - " . $frasedos . "</h1>";
  echo "<h1>" . $GLOBALS["frase"] . " - " . $GLOBALS["frasedos"] . "</h1>";

  //variable local
  $year = 2023;
  print $year; 
  
}

echo "<br>";
pruebaAmbito();
echo "<br>";


function pAmbitoParametros($frase, $frasedos) {
  echo "<h1>" . $frase . " - " . $frasedos . "</h1>";
}

echo "<br>";
pAmbitoParametros($frase, $frasedos);
echo "<br>";


$nombre = "Perico Perolillos";
$edad = 19;
$mayoria_edad = 18;

//estructura de control, no función
if ($edad >= $mayoria_edad) {
  echo "<h2>$nombre es mayor de edad</h2>";
} else {
  echo "<h2>$nombre es menor de edad</h2>";
}

echo "<br>";
?>