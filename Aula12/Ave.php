<?php

require_once 'Animal.php';
class Ave extends Animal {
    private $corPena;

    public function alimentar() {
        echo "Comendo frutas";
    }

    public function emitirSom() {
        echo "Som de ave ";
    }

    public function locomover() {
        echo "Voando";
    }
    
    public function fazerNinho() {
        echo "Fez um ninho";
        
    }

}
