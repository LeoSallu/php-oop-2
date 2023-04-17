<?php

class Categorie {
    public $categorie;
    function __construct(string $_categoria)
    {
        $this -> categorie = $_categoria;
    }
}
$cane = new Categorie('Cane');
$gatto = new Categorie('Gatto');
$uccello = new Categorie('Uccello');
$pesce = new Categorie('Pesce');



