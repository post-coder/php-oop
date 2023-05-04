<?php

class User {
  public $name;
  public $lastName;
  public $age;
  public $address;
  protected $discount = 0;

  function __construct(string $name, string $lastName, int $age, Address $address) {
    $this->name = $name;
    $this->lastName = $lastName;
    $this->age = $age;
    $this->address = $address;

    $this->setDiscount();
  }

  public function setDiscount() {
    if($this->age > 30) {
      $this->discount = 20;
    } else {
      $this->discount = 0;
    }
  }

  public function getDiscountPercentage() {
    return $this->discount . "%";
  }

  public function getDiscount() {
    return $this->discount;
  }

}
