<?php
require_once './classes/Voiture.php';

$voiture1 = new Voiture(1000,'rouge');
$voiture2 = new Voiture(2000,'vert pomme');
$voiture1->vitesse = 30;
$voiture1->vitesse = 40;

echo $voiture1->getNbrPlaces();

echo $voiture1->calculerEnergieCinetique();
echo "<br/>";
$voiture1->vitesse= 10;
echo $voiture1->calculerEnergieCinetique();

$voiture1->masse=1000;

$voiture1->afficherMessageDebile();

$voiture1->calculerEnergieCinetique();
var_dump($voiture1,$voiture2);
