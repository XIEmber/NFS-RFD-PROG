<?php
require_once './classes/Voiture.php';

$voiture1 = new Voiture(1000,'rouge');


$voiture1->afficherMessageDebile();

var_dump($voiture1);
