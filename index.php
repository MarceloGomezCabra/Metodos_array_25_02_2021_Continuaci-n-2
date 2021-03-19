<?php

// MÁS MÉTODOS DE ARRAY


// list() (Convierte los datos de una lista enumerada en variables individuales)

$array = array("Nike", "Violeta", 2500);
list($zapatos,$color,$precio) = $array;

print_r($color);


/* compact() (crea un array asociativo con variables o arrays siendo la "key" el nombre de la variable o array 
y el "value" el contenido de la variable)*/

$profesor = (string) "Miguel";
$universidad = (string) "Comfenalco";
$permiso = (bool) true ;
$alumnos = (array) ["Willian","Marcelo"]; 

$key = array('universidad','profesor','permiso','alumnos');
$res = compact($key);
var_dump($res);


// extract()

$array = (array) ["Nombre" => "Miguel"];

extract($array);

print_r($Nombre);






?>