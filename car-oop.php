<?php

class Samochod {
  // Cechy:
  public $kolor;
  private $marka;
  public $liczbaDrzwi = 2;
  public $predkosc = 0;

  public function __construct($mojKolor, $mojaMarka) {
    // $this->kolor = 'jaskrawy';
    $this->kolor = $mojKolor;
    $this->marka = $mojaMarka;
  }

  // Akcje:
  public function jedz() {
    $this->predkosc = $this->predkosc + 20;
    echo 'Brum brum brum: ' . $this->predkosc;
  }

  public function parkuj() {
    $this->predkosc = 0;
    echo 'Zaparkowałem';
  }

  // getter
  public function getMarka() {
    return $this->marka;
  }

  // setter
  public function setMarka($value) {
    $this->marka = $value;
  }
}

$mustang = new Samochod('czerwony', 'Mustang');
// echo '<pre>';
// var_dump($mustang);
// echo '</pre>';
// echo '<br /><br />';
var_dump($mustang->kolor);
var_dump($mustang->getMarka());
echo '<br />'; // echo "\n";

$maluch = new Samochod('zielony', 'Maluch');
// $maluch->kolor = 'zielony';
var_dump($maluch->kolor);
$maluch->jedz();
echo '<br />';

$polonez = new Samochod('niebieski', 'Polonez');
var_dump($polonez->kolor);
$polonez->jedz();
$polonez->jedz();
$polonez->jedz();
$polonez->parkuj();
$polonez->jedz();
echo '<br />';
