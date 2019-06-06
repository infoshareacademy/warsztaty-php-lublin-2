<?php

class Car {
  // Properties:
  public $color;
  private $brand;
  public $numberOfDoors = 2;
  public $speed = 0;

  public function __construct($myColor, $myBrand) {
    // $this->color = 'jaskrawy';
    $this->color = $myColor;
    $this->brand = $myBrand;
  }

  // Akcje:
  public function drive() {
    $this->speed = $this->speed + 20;
    echo 'I am driving: ' . $this->speed;
  }

  public function park() {
    $this->speed = 0;
    echo 'Parked';
  }

  // getter
  public function getBrand() {
    return $this->brand;
  }

  // setter
  public function setBrand($value) {
    $this->brand = $value;
  }
}

$mustang = new Car('czerwony', 'Mustang');
// echo '<pre>';
// var_dump($mustang);
// echo '</pre>';
// echo '<br /><br />';
var_dump($mustang->color);
var_dump($mustang->getBrand());
echo '<br />'; // echo "\n";

$maluch = new Car('zielony', 'Maluch');
// $maluch->color = 'zielony';
var_dump($maluch->color);
$maluch->drive();
echo '<br />';

$polonez = new Car('niebieski', 'Polonez');
var_dump($polonez->color);
$polonez->drive();
$polonez->drive();
$polonez->drive();
$polonez->park();
$polonez->drive();
echo '<br />';
