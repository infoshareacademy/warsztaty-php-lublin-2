<?php

class User {
  private $firstName;
  private $lastName;
  private $email;

  public function __construct($firstName, $lastName, $email) {
    $this->firstName = $firstName;
    $this->lastName = $lastName;
    $this->email = $email;
  }

  public function __toString() {
    return "$this->firstName $this->lastName, $this->email";
    return "{$this->firstName} {$this->lastName}, {$this->email}";
    return $this->firstName . ' ' . $this->lastName . ', ' . $this->email;
  }

}

$user = new User('Janko', 'Muzykant', 'janko@wp.pl');
echo $user;
