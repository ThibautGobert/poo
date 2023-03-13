<?php
namespace App;

use App\Ustensile\Arme;

/**
 * Définition d'une classe Personnage
 */

class Personnage {
    public int $vie;
    public int $force;
    private string $nom;
    public Arme $arme;

    public function __construct(string $nom, int $vie = 100, int $force = 10)
    {
        $this->nom = $nom;
        $this->vie = $vie;
        $this->force = $force;
        $this->arme = new Arme();
    }
    public function attaque(Personnage $personnage)
    {
        $personnage->vie -= $this->calculDegats();
    }

    protected function calculDegats()
    {
        return $this->force + $this->arme->puissance;
    }
}