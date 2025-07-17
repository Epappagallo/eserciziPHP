<?php 

class Contatore {
    public $valore;

    public function incrementa(float $valore) {
        $this->valore++;
    }

    public function pubblicaValore(float $valore) {
        echo $valore."\n";    
    }
}


$newContatore = new Contatore();
$newContatore->valore = 0;

$newContatore->pubblicaValore($newContatore->valore);
$newContatore->incrementa($newContatore->valore);
$newContatore->pubblicaValore($newContatore->valore);


?>