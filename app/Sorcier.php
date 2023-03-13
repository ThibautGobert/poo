<?php

namespace App;

class Sorcier extends Personnage
{
    public int $magie;

    public function __construct(string $nom, int $vie = 100, int $force = 10)
    {
        parent::__construct($nom, $vie, $force);
        $this->magie = 20;
    }

    public function attaque(Personnage $personnage)
    {
        $personnage->vie = $this->calculDegats() - $this->magie + $this->force/2;
    }
}