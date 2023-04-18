<?php
trait Disponibilità {
    private $disponibilità;
    function get_disp(){
        return $this->disponibilità;
    }
    function set_disp($_disponibilità){
        return $this->disponibilità=$_disponibilità;
    
    }
}
// function multiplication($int){
//     if(!is_int($int)){
//         throw new Exception('Non funziona');
//     }
//     return $int*5;
// }
// try{
//     echo multiplication('Errore');
// } catch (Exception $e) {
// echo 'Prova' . $e->multiplication('Disponibile');
// }