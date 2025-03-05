<?php 
//error_reporting(E_ERROR);

//Desactivar toda notificación de error
error_reporting(0);

//Notificar solamente errores de ejecución
//error_reporting(E_ERROR | E_WARNING | E_PARSE);

//Notificar E_NOTICE también puede ser bueno (para informar de variables)
//no inicializadas o capturar errores en nombres de variables...)
//error_reporting(E_ALL ^ E_NOTICE);

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