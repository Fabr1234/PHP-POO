<?php
require_once 'Aluno.php';
class Bolsista extends Aluno {
    private $bolsa;
    public function getBolsa() {
        return $this->bolsa;
    }

    public function setBolsa($bolsa): void {
        $this->bolsa = $bolsa;
    }

    public function __construct($nome, $idade, $sexo,$matricula, $curso,$bolsa) {
        Aluno($nome, $idade, $sexo,$matricula, $curso);
        $this->bolsa = $bolsa;
    }

    
    public function renovarBolsa() {
        echo "<p>Bolsa renovada</p>";
    }
    
    public function pagarMensalidade() {
        echo "<p>$this->nome possui bolsa de estudos! Desconto pendente</p>";
    }
}
