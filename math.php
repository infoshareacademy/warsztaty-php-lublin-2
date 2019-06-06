<?php

class Math {

  static public $PI = 3.14;

  public static function getPi() {
    return self::$PI;
  }
}

echo Math::$PI;
echo Math::getPi();


