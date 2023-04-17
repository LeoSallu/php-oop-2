<?php
class Prodotti  {

    //Inizializzazione Variabili
    public $prodotti;
    public $animale;
    public $prezzo;
    public $caratteristiche;
    public $info;

    //Funzione construct
    function __construct(string $_prodotto, string $_animale,string $_prezzo, string $_caratteristiche, string $_info)
    {
        $this -> prodotti = $_prodotto;
        $this -> animale = $_animale;
        $this -> prezzo = $_prezzo;
        $this -> caratteristiche = $_caratteristiche;
        $this -> info = $_info;
    }
}
$lista = [];

$royalCanin = new Prodotti('Royal Canin Mini Adult', 'Cane', '43.99','545g','Prosciutto e Riso');
$almo = new Prodotti('Almo Nature Holistic Maintenance Medium Large Tonno e Riso', 'Cane', '44.99','600g','Tonno e Riso');
$almoCat = new Prodotti('Almo Nature Cat Daily Lattina', 'Gatto', '34.99','545g','Tonno, Pollo e prosciutto');
$guppy = new Prodotti('Mangime per Pesci Guppy in Fiocchi', 'Pesce', '2.95','30g','Pesci e sottoprodotti dei pesci, Cereali, Lieviti, Alghe');
$wilma = new Prodotti('Voliera Wilma in Legno', 'Uccello', '184.99','Legno','M: L 83 x P 67 x H 153 cm');
$filtro = new Prodotti('Cartucce Filtranti per Filtro EasyCrystal', 'Pesce', '2.29','Materiale espanso','ND');
$kong = new Prodotti('Kong Classic', 'Cane', '13,49','Galleggia e rimbalza','8,5 cm x 10 cm');
$peluche = new Prodotti('Topini di peluche Trixie', 'Gatto', '4.99','Morbido con codina in corda','8.5 cm x 10 cm');

array_push($lista, $royalCanin, $almo, $almoCat, $guppy, $wilma, $filtro, $kong, $peluche);

print_r($lista);

