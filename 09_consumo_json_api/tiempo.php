<?php 
//error_reporting(E_ERROR);

//Desactivar toda notificación de error
error_reporting(0);

//Notificar solamente errores de ejecución
//error_reporting(E_ERROR | E_WARNING | E_PARSE);

//Notificar E_NOTICE también puede ser bueno (para informar de variables)
//no inicializadas o capturar errores en nombres de variables...)
//error_reporting(EALL ^ E_NOTICE);

//Notificar todos los errores de PHP (ver el registro de cambios)
//errror_reporting(E_ALL);

//Notificar todos los errores de PHP
//error_reporting(-1);

//Lo mismo que error_reporting(E_ALL);
//ini_set("error_reporting, E_ALL);

//header("Content-type:text/html;charset=\"utf-8\"");

$prevision = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] === "GET" && !empty($_GET["ciudad"])) {
  $ciudad = $_GET["ciudad"];
  $ciudad = isset($ciudad) ? $ciudad : "";

  $urlContents = file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=" . $ciudad . "&appid=61b1ef1bbdead1137b27bd8addf995af&units=metric&lang=es");

  if (!$urlContents) {
    $error = "No hemos encontrado la ciudad";

  } else {
    $array = json_decode($urlContents, true);

    $prevision = "El tiempo en " . $ciudad . " es actualmente ' " . $array["weather"][0]["description"] . " ' ";
    $temperaturaEnCelsius = $array["main"]["temp"];
    $prevision .= ". La temperatura es de " . intval($temperaturaEnCelsius) . "&deg;C";
    $tempMin = $array["main"]["temp_min"];
    $tempMax = $array["main"]["temp_max"];
    $prevision .= " oscilando entre " . intval($tempMin) . "&deg;C de mínima y " . intval($tempMax) . "&deg;C de máxima.";
  }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <title>¿qué tiempo hace?</title>
  <style type="text/css">
    html {
      background: url("https://picsum.photos/1200/1000/?blur=2") no-repeat center center fixed;
      background-size: cover;
    }

    body {
      background: none;
      min-height: 100vh;
    }

    .w3-container {
      text-align: center;
    }

    input {
      margin: 20px 0;
    }

    #previsionTiempo {
      margin-top: 30px;
    }

    h1, label {
      color: white;
      font-weight: 800;
      -webkit-text-stroke: 1px black;
    }

    label {
      font-size: 20px;
    }

    fieldset {
      display: flex;
      flex-flow: column;
      justify-content: center;
      align-items: center;
    }

    input {
      width: 50vh;
    }

  </style>
</head>
<body>
  <main class="w3-container w3-display-middle">
    <h1>¿Qué tiempo hace?</h1>
    <form class="w3-margin">
      <fieldset class="w3-padding w3-margin">
        <label for="ciudad">Introduce el nombre de una ciudad:</label>
        <input type="text" class="w3-padding" id="ciudad" name="ciudad" placeholder="Por ej. Londres, Tokyo" value="">
      </fieldset>
      <button type="submit" class="w3-button w3-black">Enviar</button>
    </form>
    <div id="previsionTiempo">
      <?php
      if ($prevision) {
        echo '<div class="w3-panel w3-green w3-padding-24" role="alert">' . $prevision . '</div>';
      } else if ($error != "") {
        echo '<div class="w3-panel w3-red w3-padding-24" role="alert">' . $error . '</div>';
      }
      ?>
    </div>
  </main>
</body>
</html>