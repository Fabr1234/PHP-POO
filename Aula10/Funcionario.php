<?php
require_once 'Pessoa.php';
class Funcionario extends Pessoa
{
    private $setor;
    private $trabalhando;
    public function getSetor() {
        return $this->setor;
    }

    public function getTrabalhando() {
        return $this->trabalhando;
    }

    public function setSetor($setor): void {
        $this->setor = $setor;
    }

    public function setTrabalhando($trabalhando): void {
        $this->trabalhando = $trabalhando;
    }
    
    public function __construct($setor, $trabalhando) {
        $this->setor = $setor;
        $this->trabalhando = $trabalhando;
    }

    
    public function mudarTrabalho() 
    {
        $this->trabalhando = !$this->trabalhando;
        
    }


    
}
