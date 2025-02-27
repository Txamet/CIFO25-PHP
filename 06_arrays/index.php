<?php

function pDump($variable) {
  echo "<pre>";
  var_dump($variable);
  echo "</pre>";
}


$pelicula = "Airbag";
$peliculas = ["Airbag", "Abierto hasta el amanecer", "Bad taste"];
$cantantes = ["Josele Santiago", "Justin Sullivan", "Chrissie Hynde"];

//Array asociativo
$personas = [
  "nombre" => "Óscar",
  "apellidos" => "Perolillos",
  "web" => "myweb.com"
];

echo $personas["apellidos"];


//Recorrer con FOR
echo "<h1>Listado de películas</h1>";
echo "<ul>";

for ($i = 0; $i < count($peliculas); $i++) {
  echo "<li>" . $peliculas[$i] . "</li>";
}
echo "</ul>";


//Recorrer con FOREACH
echo "<h1>Listado de cantantes</h1>";
echo "<ul>";

foreach ($cantantes as $cantante) {
  echo "<li>" . $cantante . "</li>";
}
echo "</ul>";

echo "<hr>";

echo "<h1>Listado de personas</h1>";
echo "<ul>";

foreach($personas as $key => $value) {
  echo "<li>$key = $value</li>";
}
echo "</ul>";


//Arrays multidimensionales
$agenda = [
  "uno" =>
    ["nombre" => "Pepe", "apellidos" => "Perez", "email" => "email@email.com"],
    ["nombre" => "Pepon", "email" => "otro@email.com"],
    ["nombre" => "Jose", "email" => "mas1@email.com"],
  "nombre" => "Antonio",
   5,
];

foreach($agenda as $key => $value) {
  if (is_array($value)) {
    foreach($value as $indice => $valor) {
      echo "$indice - $valor <br>";
    }
  } else {
    echo "$key - $value <br>";
  }
}
?>