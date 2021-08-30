<?php
require_once 'Pessoa.php';
class Aluno extends Pessoa {
    private $matricula;
    private $curso;
    public function __construct($nome, $idade, $sexo,$matricula, $curso) {
        Pessoa($nome, $idade, $sexo);
        $this->matricula = $matricula;
        $this->curso = $curso;
    }

    public function pagarMensalidade() {
        echo "<p>Efetuando pagamento de $this->nome";
    }
}
