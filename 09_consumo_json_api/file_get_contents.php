<?php
// Hacer el mismo ejercio del tiempo T5API que capturaba el tiempo por ciudad, de JS a PHP

$tiempo = file_get_contents("https://www.lavanguardia.com/");
echo $tiempo;
?>
