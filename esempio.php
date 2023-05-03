

// le classi

class Address {
  public $street;
  public $civicNumber;
  public $city;

  public static $country = "Italy";

  function __construct(string $street, string $civicNumber, string $city) {
    $this->street = $street;
    $this->civicNumber = $civicNumber;
    $this->city = $city;
  }

}


// definiamo la struttura dell'entita "User"
class User {
  public $name;
  public $lastName;
  public $address;
  public $isAlive = true;
  public $sconto = 0;
  public $age;

  public static $species = "Human";


  // diciamo che DOBBIAMO indicare questi dati
  // si fa con il costruttore
  function __construct(string $name, string $lastName, Address $address, int $age) {
    // una volta che ho questi dati, li gestisco (se serve) e li memorizzo
    $this->name = $name;
    $this->lastName = $lastName;
    $this->address = $address;
    $this->age = $age;

    // se volessi eseguire dei metodi di questa classe nel momento in cui istanziamo un suo oggetto
    $this->setDiscount($age);

  }

  // funzione che in base all'età, genera uno sconto diverso per ogni utente
  public function setDiscount($age) {
    if($age > 60) {
      // per accedere ad una proprietà interna della classe ho bisogno della keyword $this
      // this fa riferimento alla classe stessa
      $this->sconto = 20;
    }
  }

  // metodo NON statico che può accedere ad una proprietà STATICA
  public function getSpecies() {
    return self::$species;
  }


  // metodo STATICO, quindi possiamo utilizzarlo anche senza istanziare una classe
  public static function salute() {
    return "Hello!";
  }

}



// --------------




// richiamiamo la classe per crearne un'entità
$gabriel = new User("Gabriel", "Spanu", new Address("Via del Codice", "404", "Codici"), 27);
// voglio che si indichi nome, cognome, indirizzo e eta.
// in questo modo posso fare subito il controllo del discount


var_dump($gabriel);

$niccolo = new User("Niccolò", "Venturi", new Address("Via del Debugging", "301", "Algoritmi"), 38);

var_dump($niccolo);

echo $gabriel->name;

echo "<br>";

// accediamo ad una proprietà di una proprietà
echo $gabriel->address->city;
echo "<br>";

// sintassi per accedere ad una proprietà statica
echo User::$species;

echo "<br>";

echo Address::$country;

echo "<br>";
echo $gabriel->getSpecies();

echo "<br>";
echo User::salute();