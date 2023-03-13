### [Composer](https://getcomposer.org/)

-Gestionnaire de dépendances en PHP 
-On a définit le namespace de base dans composer.json
-On a installé la librairie var-dumper `composer require --dev symfony/var-dumper`

### Classes

-C'est un moule qui va définir les objets qui seront créé à partir de cette classe
-Une classe peut avoir des attributs (des variables).
-Elle peut aussi avoir des méthodes (fonctions).
-Une classe a un constructeur qui permet d'initialiser des attributs.
-On peut instancier un objet en utilisant le mot clé `new` suivit du nom de la classe. ex : `$variable = new Personnage()`
-On accède aux attributs et fonction d'un objet en utilisant cette syntaxe `$objet->attribut`

#### Héritage
-Une classe peut hériter d'une autre en utilisant le mot clé `extends` à la suite de nom.

### Portée des attributs et des méthodes
-public => attribut ou méthode accessible partout
-protected => attribut ou méthode accessible uniquement dans la classe ou dans les classes qui en hérite
-private => attribut ou méthode accessible uniquement dans la classe

### Namespace

-On peut se représenter un namespace comme une structure de dossiers.
-Lorsqu'on utilise une classe, il faut l'importer à l'aide du mot clé `use`, sauf si on se trouve dans le même namespace.
