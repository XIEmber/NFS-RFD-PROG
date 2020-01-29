<?php

class Voiture
{
  public $nbrRoues;
  public $nbrPlaces;
  public $masse;
  public $vitesse = 0;
  public $couleur;

  public function __construct(float $m, string $c)
  {
    $this->masse = abs($m);
    $this->couleur = $c;
  }
  public function calculerEnergieCinetique()
  {
    0.5 * $this->masse * $this->vitesse ** 2;
  }
  public function afficherMessageDebile()
{
  echo"Prête à monter en voiture Accroche ta ceinture S'il-te-plaît, mens à ton père AAAH AHHH OUUUH AHHHH OUUUUH AHHH OUHH AHH OUU HAHAH OU AHH OUUU AH OUUAH OUUAH OUUAH";
  }
}


 ?>
