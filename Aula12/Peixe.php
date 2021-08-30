<?php

require_once 'Animal.php';
class Peixe extends Animal {
    private $corEscama;

    public function alimentar() {
        echo "Comendo substancia";
    }

    public function emitirSom() {
        echo "Peixe nãi faz som ";
    }

    public function locomover() {
        echo "Nadando";
    }
    
    public function soltarBolha() {
        echo "Soltou uma bolha";
        
    }

}
