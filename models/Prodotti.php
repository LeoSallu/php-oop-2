<?php
require_once __DIR__.'/Categorie.php';
class Prodotti {
    protected $prodotti;
    protected $animale;
    protected $prezzo;
    protected $caratteristiche;
    protected $info;
    function __construct(string $_prodotto, string $_animale,int $_prezzo, string $_caratteristiche, string $_info)
    {
        $this -> prodotti = $_prodotto;
        $this -> animale = $_animale;
        $this -> prezzo = $_prezzo;
        $this -> caratteristiche = $_caratteristiche;
        $this -> info = $_info;
    }
}
$prod = new Prodotti('Royal Canin', 'Cane', '43','545g','Prosciutto e Riso');
var_dump($prod);