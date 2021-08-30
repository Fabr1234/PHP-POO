<?php
require_once 'Pessoa.php';
class Usuario extends Pessoa {
    private $login, $totAssistido;
    public function __construct($nome, $idade, $sexo,$login) {
        parent::__construct($nome, $idade, $sexo);
        $this->login = $login;
        $this->totAssistido = 0;
    }
    
    public function getLogin() {
        return $this->login;
    }



}
