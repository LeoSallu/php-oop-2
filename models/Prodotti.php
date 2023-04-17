<?php

class Prodotti {
    public $prodotti;
    function __construct(array $_prodotto)
    {
        $this -> prodotti = $_prodotto;
    }
}
$prodotti = new Prodotti(['Cibo','Giochi','Accessori','Altro']);
var_dump($prodotti);