<?php

/* 
 Ejercicio 3. Escribir un programa que imprima por pantalla los cuadrados
 (un numero multiplicado por si mismo) de los 40 primeros numeros naturales.
 PD: Utilizar bucle while y for.
 */

for ($i = 1; $i <= 40; $i++) {
  echo pow($i, 2) . "<br>";
}

echo "<hr>";

$i = 1;
while ($i <= 40) {
  echo pow($i, 2) . "<br>";
  $i++;
}



