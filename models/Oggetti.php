<?php

require_once __DIR__. '/Prodotti.php';
class Oggetti extends Prodotti{
    private $dimensioni;
    public function set_dimensioni($_dimensioni){
        $this->dimensioni = $_dimensioni;
    }
    public function get_dimensioni(){
        return $this-> dimensioni;
    }
 
}