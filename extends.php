<?php

require_once './Models/User.php';
require_once './Models/Address.php';
require_once './Models/PremiumUser.php';

$pippo = new User("Pippo", "Cane", 29, new Address("Via del Codice", 404, "Codici"));

var_dump($pippo);

$topolino = new PremiumUser("Topolino", "Topo", 29, new Address("Via del Codice", 404, "Codici"), "plus");
// $topolino = new PremiumUser("Topolino", "Topo", 38, new Address("Via del Codice", 404, "Codici"), "premium");


var_dump($topolino);

echo $pippo->getDiscountPercentage();
echo "<br>";
echo $topolino->getDiscountPercentage();
echo "<br>";

