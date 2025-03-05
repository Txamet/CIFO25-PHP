<?php
function pDump($variable)
{
  echo "<pre>";
  var_dump($variable);
  echo "</pre>";
}

$cantantes = ["Josele Santiago", "Justin Sullivan", "Chrissie Hynde", "YoMismo"];
$numeros = [1, 2, 5, 8, 3, 4];

// ORDENAR

pDump($numeros);
sort($numeros);
pDump($numeros);

pDump($cantantes);
sort($cantantes);
pDump($cantantes);

// Añadir elementos array
$cantantes[] = "Natos";
pDump($cantantes);
array_push($cantantes, "Waor");
pDump($cantantes);
$cantantes[] = "Otro";
pDump($cantantes);

// Eliminar elementos array
array_pop($cantantes); // ultimo elemento
pDump($cantantes);
unset($cantantes[2]); 
pDump($cantantes);

// Aleatorio
$indice = array_rand($cantantes);
echo $cantantes[$indice];

// Dar la vuelta
pDump(array_reverse($numeros));

// Buscar dentro de un array
$resultado = array_search('Natos',$cantantes);
pDump($resultado);

// Clonar un array con merge(Unir)
$original = [1, 2, 3];
$copy = array_merge([],$original);
pDump($original);
pDump($copy);

// Clonar un array con slice
$copy2 = array_slice($original,0);
pDump($copy2);
pDump($original);


// comprobar un key
$animales = ["perro" => "Bruce", "gato" => "Schmeichel"];
if (array_key_exists('perro', $animales)) {
  echo "Tengo un perro llamado $animales[perro]";
}

echo "<br>";
$animales = ["perro", "gato", "oso"];
// Comprobar valores. Este caso muestra que tengo un perro:
if (in_array("perro", $animales)) {
  pDump($animales);
  echo "Tengo un $animales[0] de mascota";
}

echo "<br><hr/>";

// Codificar como JSON {"nom": "value"}
$prueba1 = json_encode($animales);

echo "<br><hr/>";
pDump($prueba1);
echo "<br><hr/>";
echo $prueba1;
echo "<br><hr/>";
$prueba2 = json_decode($prueba1);
pDump($prueba2);
echo "<br><hr/>";

foreach ($prueba2 as $key => $value) {
echo "$key = $value";
echo "<br>";
}

echo "<br><hr/>";

foreach ($prueba2 as $value) {
echo "$value";
echo "<br>";
}

// Crear arrays asociativos a partir de 2 arrays
$keys = ['cielo', 'tierra', 'mar'];
$values = ['azul', 'verde', 'turquesa'];
$new_array = array_combine($keys, $values);
pDump($new_array);
echo "<br>";

// Recorrer un array aplicando una funcion callback al array
function alCubo($numero) {
  return $numero * $numero * $numero;
}

$a = [1, 2, 3, 4, 5];
$result = array_map('alCubo',$a);
pDump($result);
echo "<br>";

/* array_map("param1: la funcion o accion que ejecutara", "param2:array a recorrer, opcional rango del array a recorrer) */

range(1, 10);
// En PHP, la función range() se utiliza para crear un array que contiene un rango de elementos. En el caso de range(1, 10), se genera un array con los números enteros del 1 al 10, inclusive.
$result2 = array_map(function ($n) {
  return ($n * $n * $n);
}, $a);

pDump($result2);
echo "<br>";

$result3 = array_map(fn ($n) => $n * $n * $n, range($a[1], $a[3]));
pDump($result3);
echo "<br>";

$array = ['Apple', 'BANANA', 'Mango', 'orange', 'GRAPES'];
$result5 = array_map(fn($element) => strtolower($element), $array);
pDump($result5);
echo "<br>";

echo "<br>";
// NULL como primer parametro,  permita no  llamar a la funcion callback y permite unir dos arrays en uno multiarray
$employeeNames = ['john', 'mark', 'lisa'];
$employeeEmails = ['john@example.com', 'mark@example.com', 'lisa@example.com', 'uuu@ooo.com'];
$res = array_map(null, $employeeNames, $employeeEmails);
pDump($res);
echo "<br>";

// Codificar como JSON {"nom": "value"}
$string_res = json_encode($res);
echo "<br>";
pDump($string_res);
echo "<br>";
echo $string_res;
echo "<br>";

// Codificar como JSON {"nom": "value"}
$agenda = [
  ['nombre' => 'Pepe', 'email' => 'email@email.com'],
  ['nombre' => 'Pepon', 'email' => 'otro@email.com'],
  ['nombre' => 'Jose', 'email' => 'mas1@email.com'],
  'nombre' => 'Antonio'
];
$agenda_string = json_encode($agenda);
echo "<br>";
pDump($agenda_string);
echo "<br>";
echo $agenda_string;
echo "<br>";
?>