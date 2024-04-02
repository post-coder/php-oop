<?php
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