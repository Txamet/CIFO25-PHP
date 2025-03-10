<?php
/*
Ejercicio 9. Escribir un programa con PHP que añada valores a un array ya existente, mientras que su longuitud sea menor a 15 y luego mostrarlo por pantalla.
*/

/* $array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

function addValue ($valor) {
  //array_push($array, $valor);
  $array[] = $valor;
} */
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ejercicio 9</title>
  </head>
  <body>
    <form action="" method="get">
      <label for="valor">Escribe un número:</label>
      <input type="number" name="valor"/>
      <input type="submit" value="Enviar datos" />
    </form>
    <br>
    <div id="answer">
      <?php
        //global $array;
        $array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
        $result = "El array actual contiene: $array";
        foreach($array as $key => $value) {
              $result .= " $value ";
        }

        if (isset($_GET["valor"]) ) {
          if (count($array) <= 15) {
            //addValue($_GET["valor"]);
            $array[] = $_GET["valor"];

           /*  foreach($array as $key => $value) {
              $result .= " $value ";
            } */
            $value = $_GET["valor"];
            $result .= " $value ";
            echo $result;

          } else {
            $result .= ". No puede haber más de 15 números en la array.";
            echo $result;
          }  
        }
      ?>
    </div>
  </body>
</html>