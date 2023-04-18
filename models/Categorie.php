<?php

class Categorie {
    private $categorie;
    private $icon;
    function __construct(string $_categoria, string $_icon)
    {
        $this -> categorie = $_categoria;
        $this -> icon = $_icon;
    }
    public function get_categoria(){
        return $this->categorie;
    }
    public function set_categoria($_categorie){
        $this-> categorie=$_categorie;
    }
    public function get_icon(){
        return $this->icon;
    }
    public function set_icon($_icon){
        $this-> icon=$_icon;
    }
    public function get_all(){
        return"{$this->icon} {$this->categorie}";
    }

}

