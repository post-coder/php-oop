<?php


/**
 * Indirizzo completo
 */
class Address {
    public $via;
    public $numero;
    public $citta;
    public $provincia;

    // proprietà statiche
    // le proprietà statiche non possono cambiare e devono per tanto essere definite sin da subito
    // come in questo caso
    public static $stato = "Italia";
    
    /**
     * __construct
     *
     * @param  string $_via
     * @param  string $_numero
     * @param  string $_citta
     * @param  string $_provincia
     */
    function __construct($_via, $_numero, $_citta, $_provincia) {
        $this->via = $_via;
        $this->numero = $_numero;
        $this->citta = $_citta;
        $this->provincia = $_provincia;
    }

    
    /**
     * Restituisce la stringa completa dell'indirizzo, già formattata
     *
     * @return string
     */
    public function getFullAddress() {

        return $this->via . ' ' . $this->numero . ', ' . $this->citta . ', ' . $this->provincia . '. ' . self::$stato;

    }



    public static function getInstructions() {
        return "Per compilare correttamente l'indirizzo devi fornire via, numero, città e provincia.";
    }
}








// classe:
// un progetto che definisce le linee guida per avere uno (o tanti) OGGETTI


// il nome della classe deve essere indicato in PascalCase
// ovvero deve iniziare con una lettera maiuscola e tutte le altre parole
// al suo interno devono iniziare per maiuscola
/**
 * Questa classe gestisce un singolo utente
 */
class User {
    // le proprietà delle classi si chiamano attributi

    // la sintassi per definire gli attributi che condivideranno i nostri oggetti è leggermente diversa
    public $nome;
    public $email;
    public $annoNascita;
    public $lavoro;
    public $sconto;

    public $indirizzo;

    // ogni utente ha una proprietà statica $race
    // queste proprietà non possono essere cambiate, non sono relative ad un singolo utente, ma alla CLASSE.
    public static $race = "Human";


    // come possiamo obbligare lo sviluppatore a realizzare un oggetto della nostra classe
    // che abbia per forza determinate proprietà già compilate

    // ad esempio: vorrei che TUTTI gli utenti abbiano per forza 
    // la proprietà nome, email e anno di nascita compilate

    // funzione costruttore    


        
    /**
     * __construct
     *
     * @param  string $_nome
     * @param  string $_email
     * @param  int $_annoNascita
     */   
    function __construct($_nome, $_email, $_annoNascita) {
        // dentro il costruttore mettiamo tutte le istruzioni che vanno a "compilare" 
        // gli attributi della nostra classe
        $this->nome = $_nome;
        $this->email = $_email;
        $this->annoNascita = $_annoNascita;

    }





    // possiamo far eseguire azioni ai nostri utenti
    public function saluta() {
        echo "Ciao! Sono " . $this->nome;
    }

    public function setSconto($eta) {
        if($eta > 65) {
            $this->sconto = 40;
        } else {
            $this->sconto = 0;
        }
    }
}



// oggetto di una classe
// concretizzazione di una classe
// quando prendiamo una classe, seguiamo le sue regole e realizziamo un oggetto


// ci creiamo prima un'istanza (o oggetto) di classe Address
$user1Address = new Address("Via dei Funghi", 10, 'Regno dei Funghi', 'NintendoLand');


// istanzio un oggetto di classe User
// passiamo l'indirizzo nella creazione dell'oggetto User
$user1 = new User("Mario", "mario@mail.com", 1985);
$user1->indirizzo = $user1Address;

// var_dump($user1);






// oppure possiamo creare un nuovo elemento Address direttamente dentro il costruttore dell'utente
$user2 = new User("Luigi", "luigi@mail.com", 1985);





// creo un array di utenti
$users = [
    $user1,
    $user2,
    new User("Francesco", "totti@gmail.com", '1981'),
];

var_dump($users);



// __________________________________________________________________________________________________



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - OOP</title>
</head>
<body>
    <hr>
    <h1>Utenti</h1>

    <small>
        <?php echo Address::getInstructions() ?>
    </small>

    <ul>
        <?php
        foreach($users as $user) {

            echo "
            <li>
                " . $user->nome . ", " . $user->email . ", " . $user->lavoro . "<br>
                " . $user->indirizzo?->getFullAddress() . "
            </li>";

        }
        ?>
    </ul>
</body>
</html>