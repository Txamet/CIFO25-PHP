<?php

$numero = 9;
function tabla($numero) {
  echo "<h3>Tabla de multiplicar del número: $numero</h3>";
  for ($i = 0; $i <= 10; $i++) {
    $operacion = $numero * $i;
    echo "$numero x $i = $operacion <br>";
  }
}

tabla($numero);

echo "<hr>";

function calculadora($numero1, $numero2, $negrita = false) {
  $suma = $numero1 + $numero2;
  $resta = $numero1 - $numero2;
  $multi = $numero1 * $numero2;
  $division = $numero1 / $numero2;

  $cadena_texto = "";

  if ($negrita) {
    $cadena_texto .= "<strong>";
  }

  $cadena_texto .= "Suma de $numero1 y $numero2 es igual a $suma <br>";
  $cadena_texto .= "Resta de $numero1 y $numero2 es igual a $resta <br>";
  $cadena_texto .= "Multiplicación de $numero1 y $numero2 es igual a $multi <br>";
  $cadena_texto .= "división de $numero1 y $numero2 es igual a $division <br>";

  if ($negrita) {
    $cadena_texto .= "</strong>";
  }

  $cadena_texto .= "<hr>";

  return $cadena_texto;
}

$numero1 = 10;
$numero2 = 20;
echo calculadora($numero1, $numero2, $negrita = true);


function getNombre($nombre) {
  $texto = "El nombre es: $nombre";
  return $texto;
}

function getApellidos($apellidos) {
  $texto = "Los apellidos son: $apellidos";
  return $texto;
}

function setNombreApellidos($nombre, $apellidos) {
  $texto = getNombre($nombre) . " y " . getApellidos($apellidos) . "<br>";
  return print ($texto);
}

setNombreApellidos("Pepe", "Perolillos Piñon");
echo getNombre("Paco");

echo "<hr>";

//Funciones anónimas
// Podemos insertar la sintaxis de las funciones en variables, el valor de la variable es el resultado de la función. Para ejecutar la variable se ha de llamar como si fuera una función.

$saludo = function () {
  echo "Hola, ¿qué tal ?";
};

$saludo();
echo "<br>";

$nom = "Pepe";
$cognoms = "Pepez";

$saludodos = function () {
  global $nom, $cognoms;
  //return print("Hola $nom $cognoms");
  $result = "Hola $nom $cognoms";
  return print($result);
  //return $result;
};

echo"<br><hr>";
$saludodos();
echo"<br><hr>";
$cognoms = "Peponez";

//Funciones flecha
$saludar = fn() => "Hola que tal : $nom $cognoms <br>";
echo $saludar();
echo "<br><hr>";
?>