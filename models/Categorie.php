<?php

class Categorie {
    public $categorie;
    function __construct(string $_categoria)
    {
        $this -> categorie = $_categoria;
    }
}
$category = new Categorie('Cane','Gatto','Ucello','Pesce');
