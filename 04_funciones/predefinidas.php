<?php

function pDump($variable) {
  echo "<pre>";
  var_dump($variable);
  echo "</pre>";
}

//Debuggear con var_dump() o print_r()
$nombre = "Óscar Perolillos";
pDump($nombre);

//Fechas
echo date("d-m-Y");
echo "<br>";
echo date("Y-m-d");
echo "<br>";
echo time(); //segundos desde 1-1-1970

//Matemáticas
echo "<br>";
echo "Raíz cuadrada de 10: " . sqrt(10);

echo "<br>";
echo "Raíz cuadrada de 10: " . number_format(sqrt(10), 2); //equivalente al .toFixed()

echo "<br>";
echo "Número aleatorio entre 10 y 40: " . rand(10, 40);

echo "<br>";
echo "Número pi: " . pi();

echo "<br>";
echo "Número pi: " . number_format(pi(), 2);

echo "<br>";
echo "Redondear: " . round(7.891234, 2); // y redondea hacia arriba si es mayor que 5 y hacia abajo si es menor que 5

//fijar como string
$valor = 100.56789;
echo "<br>";
echo "$valor, sin fijar decimales";
echo "<br>";
echo bcdiv($valor, "1", 2);
echo "<br>";
echo bcdiv($valor, "1", 3);
echo "<br>";
echo bcdiv($valor, "1", 4);
echo "<br>";

//fijar como número
echo number_format($valor, 2);
echo "<br>";
echo number_format($valor, 3);
echo "<br>";
echo number_format($valor, 4);
echo "<br>";

//Más funciones generales
$nombre2 = "Pepe";
echo gettype($nombre2);

//Detectar tipado
echo "<br>";
if (is_string($nombre2)) {
  echo "Esa variable es un string";
}

echo "<br>";
if (!is_float($nombre2)) {
  echo "La variable nombre2 no es un número";
}

//Comprobar si existe una variable
echo "<br>";
if (isset($nombre2)) {
  echo "La variable existe";
} else {
  echo "La variable no existe";
}

//Limpiar espacios
echo "<br>";
$frase = "       mi contenido      ";
pDump(trim($frase));
echo trim($frase);

//Eliminar variables / índices
echo "<br>";
$year = 2025;
echo var_dump($year);
unset($year); //elimina la variable
//var_dump($year);

//Comprobar variable vacia

$texto = "    hh     ";
echo "<br>";
if(empty(trim($texto))) {
  echo "La variable texto está vacia.";
} else {
  echo "La variable texto TIENE CONTENIDO";
}
echo "<br>";

//Contar caracteres de un string
$cadena = "12345";
echo strlen($cadena);
echo "<br>";

//Encontrar caracter
$frase = "La vida es bella";
echo strpos($frase, "i"); // devuelve la posición en la que encuentra por primera vez una letra
echo "<br>";

//Reemplazar palabras de un string
$frase = str_replace("vida", "moto", $frase);
echo $frase;
echo "<br>";

//MAYUSCULAS y minusculas
echo strtoupper($frase);
echo "<br>";
echo strtolower($frase);
echo "<br>";

//Funciones para limpiar valores recogidos en inputs
// limio espacios o caracteres a ambos lados
$data1 = "    \tEste texto es de prueba\t \.    ";
$data2 = "  \r\t  Este también      ";
echo $data1 . "<br>";
echo $data2 . "<br>";
$texto = "       hh      ";
$trimmed1 = trim($data1);
$trimmed2 = trim($data2);

echo $trimmed1 . "<br>";
echo $trimmed2 . "<br>";
echo "<br>";

$data = "   \tEste texto es de prueba\t  \.  ";
function sanitize($data) {
  trim($data);
  $data = stripslashes($data); // elimina del texto los caracteres contrabarra ( \ )
  $data = htmlspecialchars($data); //convierte etiquetas html en texto, así el navegador lo reconoce como texto en vez de etiqueta html
  print $data;
}

echo sanitize($data);



?>