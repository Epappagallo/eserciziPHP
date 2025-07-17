<?php 

class Libro {
    public $titolo;
    public $autore;
    public $prezzo;

    public function scheda(string $titolo, string $autore, float $prezzo) {
        echo "Il libro ".$titolo." è scritto da ".$autore." e costa ".$prezzo."€";
    }
}

$newLibro = new Libro();
$newLibro->titolo = "Il Signore degli Anelli";
$newLibro->autore = "J.R.R. Tolkien";
$newLibro->prezzo = 10;

echo $newLibro->scheda($newLibro->titolo, $newLibro->autore, $newLibro->prezzo);







?>