<?php

/* 
 Ejercicio 5. Hacer un programa que muestre todos los numeros entre dos numeros
 * que nos lleguen por la URL($_GET)
 */

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
      <label for="first_number">Primer número:</label>
      <input type="number" name="first_number" />
      <label for="second_number">Segundo número:</label>
      <input type="number" name="second_number" />
      <input type="submit" value="Enviar datos" />
    </form>
    <hr>
  </body>
</html>

<?php
if (isset($_GET["first_number"]) && isset($_GET["second_number"])) {
  $firstNumber = $_GET["first_number"];
  $secondNumber = $_GET["second_number"];

  if ($firstNumber < $secondNumber){
    $counter = $firstNumber;

    while ($counter <= $secondNumber) {
      echo $counter . "<br>";
      $counter++;
    }

  } else if ($firstNumber > $secondNumber) {
    $counter = $secondNumber;

    while ($counter <= $firstNumber) {
      echo $counter . "<br>";
      $counter++;
    }

  } else {
    echo "Ambos números son iguales, así que no hay números entre ellos";
  }
}  
?>