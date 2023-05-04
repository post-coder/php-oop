<?php

class PremiumUser extends User {
  // non dobbiamo inserire le vecchie proprietà
  // le eredita da sola
  
  public $membership;

  // costruttore
  // ci dice COSA DOBBIAMO SCRIVERE QUANDO ISTANZIAMO una classe PremiumUser
  function __construct(string $name, string $lastName, int $age, Address $address, string $membership) {
    
    // sintassi per utilizzare il costruttore del genitore
    parent::__construct($name, $lastName, $age, $address);
    
    // poi memorizziamo le nostre nuove variabili d'istanza
    $this->membership = $membership;

  }

  // set discount sarà diverso per gli utenti premium
  // per cambiare un metodo nella classe "figlia" ci basta ridichiararlo
  public function setDiscount() {
    if($this->age > 30) {
      $this->discount = 30;
    } else {
      $this->discount = 10;
    }
  }


  public function getMembership() {
    return "Abbonamento " . $this->membership;
  }
}