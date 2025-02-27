<?php

/* 
 Ejercicio 6. Mostrar una tabla de HTML con las tablas de multiplicar del 1 al 10.
 */


for ($numero = 1; $numero <= 10; $numero++) {
  $num = "";
  for ($cont = 0; $cont <= 10; $cont++) {
    $num .= "<tr><td>$numero x $cont = " . ($numero * $cont) . "</td></tr>";
  }

  echo "<table><thead><tr><th>Tabla del número $numero</th></tr></thead><tbody>$num</tbody></table>";
  echo "<hr>";
}

