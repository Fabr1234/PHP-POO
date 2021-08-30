<?php
require_once 'Animal.php';
class Mamifero extends Animal {
    private $corPelo;
    
    
    public function alimentar() {
        echo "Mamando";
    }

    public function emitirSom() {
        echo "som de mamifero";
    }

    public function locomover() {
        echo "Correndo";
    }

}
