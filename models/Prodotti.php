<?php
require_once __DIR__ . '/Categorie.php';

class Prodotti{
    //Inizializzazione Variabili
    private $prodotti;
    private $animale;
    private $prezzo;
    private $caratteristiche;
    private $info;

    //Funzione construct
    function __construct($_prodotto, $_animale , $_prezzo, $_caratteristiche, $_info)
    {
        $this -> prodotti = $_prodotto;
        $this -> animale = $_animale;
        $this -> prezzo = $_prezzo;
        $this -> caratteristiche = $_caratteristiche;
        $this -> info = $_info;
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
    public function get_info(){
        return $this-> info;
    }
    public function set_info($_info){
        $this->info = $_info;
    }
}
$royalCanin = new Prodotti('Royal Canin Mini Adult', $cane , '43.99','545g','Prosciutto e Riso');
$almo = new Prodotti('Almo Nature Holistic Maintenance Medium Large Tonno e Riso', $cane, '44.99','600g','Tonno e Riso');
$almoCat = new Prodotti('Almo Nature Cat Daily Lattina', $gatto, '34.99','545g','Tonno, Pollo e prosciutto');
$guppy = new Prodotti('Mangime per Pesci Guppy in Fiocchi', $pesce, '2.95','30g','Pesci e sottoprodotti dei pesci, Cereali, Lieviti, Alghe');
$wilma = new Prodotti('Voliera Wilma in Legno', $uccello, '184.99','Legno','M: L 83 x P 67 x H 153 cm');
$filtro = new Prodotti('Cartucce Filtranti per Filtro EasyCrystal', $pesce,'2.29','Materiale espanso','ND');
$kong = new Prodotti('Kong Classic', $cane, '13,49','Galleggia e rimbalza','8,5 cm x 10 cm');
$peluche = new Prodotti('Topini di peluche Trixie', $cane, '4.99','Morbido con codina in corda','8.5 cm x 10 cm');
$lista = [$royalCanin, $almo, $almoCat, $guppy, $wilma, $filtro, $kong, $peluche];

