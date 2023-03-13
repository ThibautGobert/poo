<?php

use App\Personnage;
use App\Sorcier;

//use NomDeLaLibrairie\Personnage as AutrePersonnage;

require './vendor/autoload.php';


/**
 * On a défini le namespace App dans le fichier composer.json
 * Pour utiliser une classe, il faut l'importer en utilisant le mot clé "use" suivi du namespace et
 * du nom de la classe
 */

$toto = new Personnage('Toto');
$tata = new Personnage('Tata', 120, 80);

$sorcier = new Sorcier('Sorcier');

$toto->attaque($sorcier);

dd($sorcier);




