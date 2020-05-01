<?php
require_once '../vendor/autoload.php';

// Libreria para debugear desde la consola del navegador
// Se necesita el plug in Fire PHP en el navegador para que funcione
// Se recomienda su uso en Chrome
$frutas = array("manzanas", "naranjas", "sandias");
// FB Fire Bug
\FB::log($frutas);


$nombres = array("ejecutivo" => "Antonio", "empleado" => "Juan");
\FB::log($nombres);

echo "Hola Mundo!!".$nombres['ejecutivo'];
\FB::log("Muestrame en consola");

?>