<?php

class Address {
  public $street;
  public $number;
  public $city;


  // queste proprietà NON FANNO PARTE degli oggetti, bensì della singola classe
  public static $country = "Italy";

  function __construct(string $street, string $number, string $city) {
    $this->street = $street;
    $this->number = $number;
    $this->city = $city;
  }

  // metodo per ottenere in forma stringa l'indirizzo completo
  public function getFullAddress() {
    return "{$this->street}, {$this->number}, {$this->city}";
  }


  // metodo statico

  public static function getCountry(string $language) {
    switch($language) {

      case 'ita': 
        return "Italia";
        break;

      case 'fra':
        return "Italie";
        break;
        
      default:
        return "Italy";
        break;
    }
  }

}