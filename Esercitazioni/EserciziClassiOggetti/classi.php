<?php 

/* Definisci una classe `Prodotto` con le proprietà `nome`, `prezzo`. 
Crea un oggetto e stampa i valori delle proprietà. */


class Prodotto {
    public $nome;
    public $prezzo;
    public $percentuale;
    public function descrizioneArticolo(string $nome, string $prezzo) {
        return "L' articolo ".$nome." costa ".$prezzo."€";
    }
    public function applicaSconto($percentuale) {
        $sconto = $this->prezzo * $percentuale / 100;
        $this->prezzo = $this->prezzo - $sconto;
    }
}

$newProduct = new Prodotto(); //creo un oggetto della classe Prodotto

$newProduct->nome = "Prodotto 1";
$newProduct->prezzo = 10;
$newProduct->percentuale = 50;


echo $newProduct->descrizioneArticolo($newProduct->nome, $newProduct->prezzo);
echo $newProduct->applicaSconto( $newProduct->percentuale);















?>