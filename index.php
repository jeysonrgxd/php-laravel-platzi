<?php

require __DIR__ . '/vendor/autoload.php';

// accedemos al namespace a la clase y al metodo statico
echo "<h1>" . Text\Format::upperText("jeyson") . "</h1>";
echo "<br>";

// accedemos ala funcion desdeel helper de nuestro autoload y name space que configuramos en el composer.json
echo upper("ramos garciá") . "<br>";
echo lower("TIENE 26 AÑOS");
