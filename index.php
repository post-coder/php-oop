<?php

require_once './Models/User.php';
require_once './Models/Address.php';

$gabriel = new User("Gabriel", "Spanu", 27, new Address("Via del codice", "404", "Codici"));
$christian = new User("Christian", "Ark", 81, new Address("Via dell'array", "21", "Letterali"));
$kevin = new User("Kevin", "Pumpkin", 71, new Address("Via delle stringhe", "A", "Decimali"));
// var_dump($gabriel);

// popolo un array di utenti
$users[] = $gabriel;
$users[] = $christian;
$users[] = $kevin;


// session_start();

// if(!isset($_SESSION['users'])) {
//   $_SESSION['users'] = $users;
// }


?>


<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP OOP</title>

  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<body>
  <?php
  include './Views/partials/header.php';
  ?>
  <div class="container pt-2">
    <h1>
      Utenti
      <small>(in <?php echo Address::getCountry('ita') ?>)</small>
    </h1>

    <table class="table">

      <thead>
        <tr>
          <th>Nome</th>
          <th>Cognome</th>
          <th>Età</th>
          <th>Indirizzo</th>
          <th>Sconto</th>
          <th>Tipologia</th>
        </tr>
      </thead>
      
      <tbody>
        
        <?php 

          foreach($users as $singleUser) {
            ?>
            <tr>
              <td><?php echo $singleUser->name ?></td>
              <td><?= $singleUser->lastName ?></td>
              <td><?= $singleUser->age ?></td>
              <td><?= $singleUser->address->getFullAddress() ?></td>
              <td><?= $singleUser->discount ?>%</td>
              <td><?php echo get_class($singleUser) == "User" ? '' : 'premium'?></td>
            </tr>
            <?php
          }
          
        
        ?>

      </tbody>

    </table>




  </div>
  
  <?php
  include './Views/partials/footer.php';
  ?>
  <!-- bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>