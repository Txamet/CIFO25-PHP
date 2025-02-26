<?php

function pDump($variable) {
  echo "<pre>";
  var_dump($variable);
  echo "</pre>";
}

//FOR

$resultado = 0;
for ($i = 0; $i <= 10; $i++) {
  $resultado += $i;
  //$resultado = $resultado + $i;
  print("$resultado<br>");
}
pDump($resultado);
echo "<h1>El resultado final es: $resultado</h1>";

?>

<form action="" method="get">
  <label for="numero">Introduce un número</label>
  <input type="number" name="numero" id="numero">
  <input type="submit" value="Enviar">
</form>

<?php

if (isset($_GET["numero"]) && is_numeric($_GET["numero"])) {
  $numero = $_GET["numero"];
} else {
  $numero = 1;
}

echo "<h2>Tabla de multiplicar del número $numero</h2>";
$num = "";

for ($cont = 0; $cont <= 10; $cont++) {
  $num .= "$numero x $cont = " . ($numero * $cont) . "<br>";
}

echo "$num<br>";
pDump($num);

/* 
foreach ($varArray as $value) {
sentencias;
}
*/

echo "<hr>";
$marcas_motos = ["Honda", "Yamaha", "Suzuki", "Kawasaki", "Ducati"];

echo $marcas_motos[4] . "<br>";
echo "$marcas_motos[2]<br>";

echo "<hr>";

foreach ($marcas_motos as $value) {
  echo "$value<br>";
}

echo "<hr>";

/* 
foreach ($varArray as $key => $value) {
  sentencias;
}
*/

foreach ($marcas_motos as $key => $value) {
  echo ($key + 1) . "- $value<br>";
}

echo "<hr>";

$marcas_motos_asoc = [
  "Honda" => "Vmax",
  "Yamaha" => "Rd250",
  "Suzuki" => "S500",
  "Kawasaki" => "Kamikaze",
  "Ducati" => "Scarver500"
];

pDump($marcas_motos_asoc);

echo $marcas_motos_asoc["Honda"];
echo "<br>";
echo $marcas_motos_asoc["Suzuki"];
echo "<hr>";

$m = "";
foreach ($marcas_motos_asoc as $key => $value) {
  $m .= $key . ": $value<br>";
}

echo $m;

?>