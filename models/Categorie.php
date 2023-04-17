<?php

class Categorie {
    public $categorie;
    function __construct(array $_categoria)
    {
        $this -> categorie = $_categoria;
    }
}
$category = new Categorie(['Cane','Gatto','Ucello','Pesce']);
var_dump($category);