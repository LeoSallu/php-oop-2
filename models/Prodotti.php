<?php
require_once __DIR__ . '/Categorie.php';
require_once __DIR__ . '/Cibo.php';
require_once __DIR__ . '/Oggetti.php';

class Prodotti{
    // use Disponibilità;
    //Inizializzazione Variabili
    private $img;
    private $prodotti;
    private $animale;
    private $prezzo;
    private $caratteristiche;
    //Funzione construct
    function __construct($_img,$_prodotto, $_animale , $_prezzo, $_caratteristiche)
    {
        $this -> img = $_img;
        $this -> prodotti = $_prodotto;
        $this -> animale = $_animale;
        $this -> prezzo = $_prezzo;
        $this -> caratteristiche = $_caratteristiche;
    }
    //Getter & Setter
    public function get_img(){
        return $this-> img;
    }
    public function set_img($_img){
        $this->img = $_img;
    }
    public function get_prodotti(){
        return $this-> prodotti;
    }
    public function set_prodotti($_prodotti){
        $this->prodotti = $_prodotti;
    }
    public function get_animale(){
        return $this-> animale;
    }
    public function set_animale($_animale){
        $this->animale = $_animale;
    }
    public function get_prezzo(){
        return $this-> prezzo;
    }
    public function set_prezzo($_prezzo){
        $this->prezzo = $_prezzo;
    }
    public function get_caratteristiche(){
        return $this-> caratteristiche;
    }
    public function set_caratteristiche($_caratteristiche){
        $this->caratteristiche = $_caratteristiche;
    }
}
// Prodotti
$royalCanin = new Cibo('img/royal.jpeg','Royal Canin Mini Adult', $cane , '43.99','545g');
$almo = new Cibo('img/almo-t.png','Almo Nature Holistic Maintenance Medium Large Tonno e Riso', $cane, '44.99','600g');
$almoCat = new Cibo('img/almo-t.jpeg','Almo Nature Cat Daily Lattina', $gatto, '34.99','545g');
$guppy = new Cibo('img/guppy.webp','Mangime per Pesci Guppy in Fiocchi', $pesce, '2.95','30g');
$wilma = new Oggetti('img/voliera-wilma.jpeg','Voliera Wilma in Legno', $uccello, '184.99','Legno');
$filtro = new Oggetti('img/filtro.jpeg','Cartucce Filtranti per Filtro EasyCrystal', $pesce,'2.29','Materiale espanso');
$kong = new Oggetti('img/kong.jpeg','Kong Classic', $cane, '13,49','Galleggia e rimbalza');
$peluche = new Oggetti('img/mouse.jpeg','Topini di peluche Trixie', $cane, '4.99','Morbido con codina in corda');
// Set classi specifiche
$royalCanin->set_ingredienti('Prosciutto e Riso');
$almo->set_ingredienti('Manzo e cereali');
$almoCat->set_ingredienti('Tonno, pollo e prosciutto');
$guppy->set_ingredienti('Pesci e sottoprodotti dei pesci, Cereali, Lieviti e Alghe');
$wilma->set_dimensioni('M: L 83 x P 67 x H 153 cm');
$filtro->set_dimensioni('ND');
$kong->set_dimensioni('8,5 cm x 10 cm');
$peluche->set_dimensioni('8,5 cm x 10 cm');
// Array prodotti
$lista = [$royalCanin, $almo, $almoCat, $guppy, $wilma, $filtro, $kong, $peluche];

