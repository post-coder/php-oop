<?php

require './Models/Address.php';
require './Models/User.php';






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

// var_dump($users);

