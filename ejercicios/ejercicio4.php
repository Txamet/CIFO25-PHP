<?php

/* 
Ejercicio 4. Recoger dos numeros por la url(Parametros GET) y hacer todas las 
 * operaciones basicas de una calculadora(suma, resta, multiplicaion y division)
 * de esos dos numeros.
 */

?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ejercicio 4</title>
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

  echo "$firstNumber + $secondNumber = " . $firstNumber + $secondNumber . "<br>";
  echo "$firstNumber - $secondNumber = " . $firstNumber - $secondNumber . "<br>";
  echo "$firstNumber x $secondNumber = " . $firstNumber * $secondNumber . "<br>";
  echo "$firstNumber / $secondNumber = " . $firstNumber / $secondNumber . "<br>";
};

?>