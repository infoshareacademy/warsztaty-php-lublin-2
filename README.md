# PHP7 OOP

Object programing is a king of programming which is not procedural :)

## Before we begin
Make sure you have php installed. Try to type in your terminal:

```bash
php -v
```

And you should have information about our PHP version (should be 7.0 and above).

Second find to check your programs is to run local dev server:

```bash
php -S localhost:8002
```

and open your browser typing `http://localhost:8002` as url address and provide path to the file. E. g. `http://localhost:8002/car.php`

## First class
You can create blueprints and place similar tasks into "classes".

Why would you use that?

Because in bigger projects you may have to reuse somebody else's code

Classes -> Objects

Methods & properties

![Car Blueprint](./img/for-mustang-shelby-gt-2007-blueprint.png "Blueprint")

Implementation:
![Car Blueprint](./img/ford-mustang-shelby-gt500.jpg "Mustang 2017")
![Car Blueprint](./img/the-2018-ford-mustang-shelby-gt500-is-a-car-worth-waiting-for-feature-car-and-driver-photo-677154-s-original.jpg "Mustang 2017")
![Car Blueprint](./img/14040e771dc8e14227256e06412f31922694ee46.1200.jpeg "Mustang 2007")

Properties: color, speed, size
Methods: acceleration, behaviour

```php
<?php

class Car {
  public $color;

  public function acceleration() {
    echo 'Brooom';
  }
}

$mustang = new Car;
print('<pre>');
print($mustang);
print('</pre>');
$mustang->acceleration();
```


## Objects and scope

```php
<?php

class Car {
  // properites
  public $color;

  // methods
  public function acceleration() {
    echo 'Brooom';
  }
}

$mustang = new Car;
// var_dump($mustang);
print('<pre>');
print($mustang);
print('</pre>');
$mustang->acceleration();
```


## Constructor and destructor
Classes which have a `__construct` method call this method on each newly-createdobject, so it is suitable for any initialization that the object may need before it is used.

PHP destructor (`__destruct`) allows you to clean up resources before PHP releases the object from the memory.


```php
<?php

class BankAccount {

  private $accountNumber;
  private $totalBalance;

  public function __construct($accNo, $balance) {
    $this->accountNumber = $accNo;
    $this->totalBalance = $balance;
  }

}

$ewaAccount = new BankAccount(14, 2000);

var_dump($ewaAccount);

```

## By value and by reference
clone + __toString

```php
<?php

class User {
  private firstName;
  private lastName;

  public function __construct($firstName, $lastName) {
    $this->firstName = $firstName;
    $this->lastName = $lastName;
  }

  public function __toString() {
    return $this->firstName . ' ' . $this->lastName;
  }
}

```

```php
<?php

$var1 = 3;
$var2 =& $var1;

echo ++$var1;
echo --$var2;
```

```php
<?php

class Car {

}

$car = new Car;

$secondCar = clone $car;
```

## What is inheritance?

* methods can be overridden
* you can inherit only from one class
* the parents method will not be called when overriding a method
* final keyword

## Type hinting

```
<?php

function setModel(string $model) {}
function hasSunRoof(bool $value): bool {}
function setDoorNum(int $num) {}
```

## The static keyword
Declaring class properties or methods as static makes them accessible without needing an instantiation of the class.

```php

<?php

class Math {

  static public $PI = 3.14;

  public static function getPi() {
    return self::$PI;
  }
}

echo Math::$PI;
echo Math::getPi();

```


## Anonymous Classes
## Interfaces
## Interfaces vs abstract methods
