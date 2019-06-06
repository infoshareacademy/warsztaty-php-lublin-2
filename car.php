<?php

// Cechy:
$kolor = 'czerwony';
$marka = 'Ford';
$liczbaDrzwi = 2;

// Akcje:
// function f(x) {
//   return x * x;
// }

function jedz() {
  echo 'Brum brum brum';
}

function parkuj() {
  echo 'Zaparkowałem';
}

function debug($value) {
  echo '<pre>';
  echo $value;
  echo '</pre>';
}

// echo 'Hello world!';
debug($kolor);

debug(jedz());
