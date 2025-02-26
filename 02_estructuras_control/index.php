<?php
//Ejemplo 1
$color = "verde";

if ("rojo" == $color) {
  echo "EL COLOR ES ROJO";

} else {
  echo "el color es $color";
}
echo "<hr>";

//Ejemplo 2
$nombre = "Perico Perolillos";
$ciudad = "Almería";
$continente = "Europa";
$edad = 9;
$mayoria_edad = 18;

if ($edad >= $mayoria_edad) {
  echo "<h1>$nombre es mayor de edad</h1>";

  if ("Madrid" == $ciudad) {
    echo "<h2>Vive en $ciudad</h2>";
  } else {
    echo "<h2>No vive en Madrid</h2>";
  }
} else {
  echo "<h2>$nombre NO es mayor de edad";

  if ("Madrid" == $ciudad) {
    echo "<h2>Vive en $ciudad</h2>";
  } else {
    echo "<h2> No vive en Madrid</h2>";
  }
}
echo "<hr>";

//Ejemplo 3
$dia = 2;

if ($dia == 1) {
  echo "LUNES";
} else if ($dia == 2) {
  echo "MARTES";
} else if ($dia == 3) {
  echo "MIÉRCOLES";
} else if ($dia == 4) {
  echo "JUEVES";
} else if ($dia == 5) {
  echo "VIERNES";
} else {
  echo "Es finde";
}

echo "<hr>";


//Ejemplo 4
$dia = 1;

switch ($dia) {
  case 1:
    echo "LUNES";
    break;
  case 2:
    echo "MARTES";
    break;
  case 3:
    echo "MIÉRCOLES";
    break;
  case 4:
    echo "JUEVES";
    break;
  case 5:
    echo "VIERNES";
    break;
  default:
    echo "ES FIN DE SEMANA";  
}

echo "<hr>";


//Ejemplo 5
$edad1 = 18;
$edad2 = 67;
$edad_oficial = 17;

if ($edad_oficial >= $edad1 && $edad_oficial <= $edad2) {
  echo "ESTÁ EN EDAD DE TRABAJAR";
} else {
  echo "NO PUEDE TRABAJAR";
}

echo "<hr>";


//condicionales con varias opciones en la primera evaluación
$pais = "Inglaterra";

if ($pais == "México" || $pais == "Colombia" || $pais == "Costa Rica") {
  echo "Habla español";
} else {
  echo "No se habla español";
}

echo "<hr>";


//Operador condicional o ternario
$pais = "Vanuato";
echo ($pais == "México" || $pais == "Colombia" || $pais == "Costa Rica") ? "En $pais se habla español" : "En $pais se habla Bislama";

?>