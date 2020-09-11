<?php

namespace classes;

use classes\Prefix\Prefix;

final class App extends Prefix
{
 public static function getSomething($prefix, $name)
     {
         return $prefix->getDate(). ' ' .$name->viewAction();
     }
}

