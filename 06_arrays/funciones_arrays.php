<?php

function pDump($variable) {
  echo "<pre>";
  var_dump($variable);
  echo "</pre>";
}

$cantantes = ["Josele Santiago", "Justin Sullivan", "Chrissie Hynde", "Yomismo"];
$numeros = [1, 2, 5, 8, 3, 4];
pDump($numeros);


//Ordenar
sort($numeros);
pDump($numeros);

pDump($cantantes);

sort($cantantes);
pDump($cantantes);


//Añadir elementos array
$cantantes[] = "Natos Perez";
pDump($cantantes);
array_push($cantantes, "Waor");
pDump($cantantes);
$cantantes[] = "otro";
pDump($cantantes);


//Eliminar elementos array
array_pop($cantantes); //elimina el último
pDump($cantantes);

unset($cantantes[2]); //elimina el que está en el índice 2
pDump($cantantes);


//Aleatorio
$indice = array_rand($cantantes);
echo $cantantes[$indice];


//Dar la vuelta
pDump(array_reverse($numeros));


//Buscar dentro de un array
$resultado = array_search("Natos", $cantantes);
pDump($resultado);


//Contar número de elementos
echo sizeof($cantantes);
echo "<br>";
echo count($cantantes);
echo "<br>";


//Clonar una array con merge(Unir)
$original = [1, 2, 3];
$copy = array_merge([], $original);
pDump($original);
pDump($copy);


//Clonar array con slice
$original = [1, 2, 3];
$copy = array_slice($original, 0);
pDump($original);
pDump($copy);

?>