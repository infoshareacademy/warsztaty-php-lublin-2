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

if ($_POST['firstName']) {
  $user = new User($_POST['firstName'], $_POST['lastName'], $_POST['email']);
  echo $user;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <form method="POST" action="./user-form.php">
    <div>
      First name: <input type="text" name="firstName" />
    </div>
    <div>
      Last name: <input type="text" name="lastName" />
    </div>
    <div>
      Email: <input type="text" name="email" />
    </div>
    <div>
      <input type="submit" value="Send me please" />
    </div>
  </form>
</body>
</html>
