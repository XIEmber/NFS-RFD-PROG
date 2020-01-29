<?php
class Vehicule
{

public $masse;
public $vitesse = 0;

public function calculerEnergieCinetique()
{
  return 0.5 * $this->masse * $this->vitesse ** 2;
}
}

 ?>
