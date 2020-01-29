<?php

class Voiture extends Vehicule
{
  public $nbrRoues;
  private $nbrPlaces = 5;
  public $couleur;

  public function __construct(float $m, string $c)
  {
    $this->masse = abs($m);
    $this->couleur = $c;
  }

  public function getNbrPlaces()
  {
    return $this->nbrPlaces;
  }

  public function setNbrPlaces($p)
  {
    $this->nbrPlaces = $p;
  }
  public function afficherMessageDebile()
  {
    echo "Je roule en caisse";
}
  public function __destruct()
  {
    echo"<h1>Oh oui détruit moi</h1>";
  }
}
