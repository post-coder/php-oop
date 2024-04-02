<?php
// classe:
// un progetto che definisce le linee guida per avere uno (o tanti) OGGETTI


// il nome della classe deve essere indicato in PascalCase
// ovvero deve iniziare con una lettera maiuscola e tutte le altre parole
// al suo interno devono iniziare per maiuscola
class User {
    // le proprietà delle classi si chiamano attributi

    // la sintassi per definire gli attributi che condivideranno i nostri oggetti è leggermente diversa
    public $nome;
    public $email;
    public $annoNascita;
    public $lavoro;
    public $sconto;


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
     * @return void
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





// istanzio un oggetto di classe User
$user1 = new User("Mario", "mario@mail.com", "1985");


// best practice: evitare di avere proprietà in più tra oggetti
// ovvero proprietà che non siano definite nella classe
$user1->lavoro = "Idraulico";
$user1->setSconto(80);

// var_dump($user1);








$user2 = new User("Luigi", "luigi@mail.com", 1985);
$user2->setSconto(35);
// var_dump($user2);




// creo un array di utenti
$users = [
    $user1,
    $user2,
    new User("Peach", "princess@mail.com", 1990)
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

    <ul>
        <?php
        foreach($users as $user) {

            echo "
            <li>
                ". $user->nome . ", " . $user->email . ", " . $user->lavoro . "
            </li>";

        }
        ?>
    </ul>
</body>
</html>