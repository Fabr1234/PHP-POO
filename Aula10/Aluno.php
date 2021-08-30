<?php
require_once 'Pessoa.php';
class Aluno extends Pessoa
{
    private $matr;
    private $curso;
    public function getMatr() {
        return $this->matr;
    }

    public function getCurso() {
        return $this->curso;
    }

    public function setMatr($matr): void {
        $this->matr = $matr;
    }

    public function setCurso($curso): void {
        $this->curso = $curso;
    }
    
    public function __construct($matr, $curso) {
        $this->matr = $matr;
        $this->curso = $curso;
    }

    
    public function cancelarMatr() 
    {
        $this->setMatr(null);
        $this->setCurso(null);
    }
    
}
