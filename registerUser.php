<?php

session_start();

require_once './Models/User.php';
require_once './Models/Address.php';

if(isset($_POST['name']) && isset($_POST['lastName']) && isset($_POST['age'])) {
  
  $newUser = new User($_POST['name'], $_POST['lastName'], $_POST['age'], new Address("Via delle stringhe", "A", "Decimali"));

  $_SESSION['users'][] = $newUser;

  header("Location: index.php");
  
}