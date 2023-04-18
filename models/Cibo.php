<?php

require_once __DIR__. '/Prodotti.php';
class Cibo extends Prodotti{
    private $ingredienti;
    public function set_ingredienti($_ingredienti){
        $this->ingredienti = $_ingredienti;
    }
    public function get_ingredienti(){
        return $this-> ingredienti;
    }
 
}