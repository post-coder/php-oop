<?php

class User {
  public $name;
  public $lastName;
  public $age;
  public $address;
  public $discount = 0;

  function __construct(string $name, string $lastName, int $age, Address $address) {
    $this->name = $name;
    $this->lastName = $lastName;
    $this->age = $age;
    $this->address = $address;

    if($age > 30) {
      $this->discount = 20;
    }
  }
}

class PremiumUser extends User {
  public $membership;

  function __construct($name, $lastName, $age, $address, $membership)
  {
    parent::__construct($name, $lastName, $age, $address);

    $this->membership = $membership;
  }

  public function setDiscount() {
    if($this->age > 30) {
      $this->discount = 50;
    } else {
      $this->discount = 10;
    }
  }
}