<?php

// como la carga de depencias de terceros es utilizado casi siempre en proyectos grandes es por eso que para no tener error en duplicacion de funciones usamos la verificacion de funcion function_exists
if (!function_exists('upper')) {

   function upper($value)
   {
      return Text\Format::upperText($value);
   }
}

if (!function_exists('lower')) {

   function lower($value)
   {
      return Text\Format::lowerText($value);
   }
}
