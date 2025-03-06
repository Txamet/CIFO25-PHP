<?php
/*
Ejercicio 8. Hacer un programa en PHP que tenga un array con 8 numeros enteros no consecutivos ni ordenados y crear una función que haga lo siguiente:
- Recorrerlo y mostrarlo al final del bucle imprimiendo la variable que contiene todo el recorrido
- Ordenarlo de menor a mayor y mostrarlo
- Mostrar su longitud (cuantos elementos tiene)
- Buscar algun elemento (buscar por el parametro que me llegue por la url)
- Mostrar el indice del elemento que buscamos
*/

$array = [5, 2, 4, 3, 6, 1, 8, 7];

echo "Lista de números de la array: <br>";

foreach($array as $key => $value) {
  echo $value . "<br>";
}

echo "<br>";
echo "<hr>";
echo "<br>";

echo "Lista de números ordenados de la array: <br>";
$copy = array_merge([], $array);
sort($copy);
foreach($copy as $key => $value) {
  echo $value . "<br>";
}

echo "<br>";
echo "<hr>";
echo "<br>";

echo "Longitud de la array: " . count($array) . "<br>";

echo "<br>";
echo "<hr>";
echo "<br>";


?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ejercicio 5</title>
  </head>
  <body>
    <form action="" method="get">
      <label for="valor">Primer número:</label>
      <input type="number" name="valor"/>
      <input type="submit" value="Enviar datos" />
    </form>
    <br>
    <div id="answer">
      <?php
        
        
        if (isset($_GET["valor"]) ) {
          $result = array_search($_GET["valor"], $array);
          
          if (!$result) {
            echo "El valor no está en el array ";
          } else {
            echo "El valor está en la posición $result del array.";
          }
          
        } else {
          echo "";
        }
      ?>
    </div>
  </body>
</html>

<?php

echo "<br>";
echo "<hr>";
echo "<br>";
?>