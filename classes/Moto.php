<?php

final class Moto extends Vehicule
{
  public $nbrRoues = 2;
  public $couleur;

function calculerForceCentrifuge($r)
{
  return 0.5 * $this->masse * $this->vitesse **2) / $r;
}
}
