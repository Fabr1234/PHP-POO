<?php
require_once 'Animal.php';
class Reptil extends Animal {
    private $corEscama;


    public function alimentar() {
        echo "Comendo vegetais";
    }

    public function emitirSom() {
        echo "Som de reptil";
    }

    public function locomover() {
        echo "Rastejando";
    }

}
