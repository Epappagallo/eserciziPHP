<?php

class Studente {
    public $nome;
    public $voto;

    public function promosso(string $nome, float $voto) {
        return $voto >= 6 ? print("Lo studente ".$nome." è promosso") : print("Lo studente ".$nome." non è promosso");
    }
}

$studente = new Studente();
$studente->promosso("Mario", 7.5); 


?>