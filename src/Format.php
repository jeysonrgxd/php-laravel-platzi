<?php

namespace Text;

class Format
{
   public static function upperText($value)
   {

      return mb_strtoupper($value, "UTF-8");
   }

   public static function lowerText($value)
   {

      return mb_strtolower($value, "UTF-8");
   }
}
