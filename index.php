<?php

require 'db.php';

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
    <?php include './layout/nav.php' ?>
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