<?php
require_once 'Lutador.php';
class Ficha implements Lutador {
    private $nome;
    private $nascionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categotia;
    private $vitorias;
    private $derrotas;
    private $empates;
    public function getNome() {
        return $this->nome;
    }

    public function getNascionalidade() {
        return $this->nascionalidade;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function getAltura() {
        return $this->altura;
    }

    public function getPeso() {
        return $this->peso;
    }

    public function getCategotia() {
        return $this->categotia;
    }

    public function getVitorias() {
        return $this->vitorias;
    }

    public function getDerrotas() {
        return $this->derrotas;
    }

    public function getEmpates() {
        return $this->empates;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function setNascionalidade($nascionalidade): void {
        $this->nascionalidade = $nascionalidade;
    }

    public function setIdade($idade): void {
        $this->idade = $idade;
    }

    public function setAltura($altura): void {
        $this->altura = $altura;
    }

    public function setPeso($peso): void {
        $this->peso = $peso;
        $this->setCategoria($peso);
    }

    public function setCategoria($peso): void {
       
        switch ($peso) 
        {
            case $peso >= 57.6 && $peso < 61.2 :
                $this->categotia = "Peso Mosca";
                break;
            case $peso >= 61.2 && $peso < 68.8 :
                $this->categotia = "Peso Galo";
                
                break;
            case $peso >= 68.8 && $peso < 70.3 :
                $this->categotia = "Peso pena";
                break;
            case $peso >= 70.3 && $peso < 77.1 :
                $this->categotia = "Peso leve";
                break;
            case $peso >= 77.1 && $peso < 83.9 :
                $this->categotia = "Peso meio-medio";
                break;
            case $peso >= 83.9 && $peso < 93 :
                $this->categotia = "Peso medio";
                break;
            case $peso >= 93 && $peso < 120.2 :
                $this->categotia = "Peso meio-pesado";
                break;
            case $peso >= 120.2:
                $this->categotia = "Peso pesado";
                break;
        }

    }

    public function setVitorias($vitorias): void {
        $this->vitorias = $vitorias;
    }

    public function setDerrotas($derrotas): void {
        $this->derrotas = $derrotas;
    }

    public function setEmpates($empates): void {
        $this->empates = $empates;
    }
    
    public function __construct($nome, $nascionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates) {
        $this->nome = $nome;
        $this->nascionalidade = $nascionalidade;
        $this->idade = $idade;
        $this->altura = $altura;
        $this->peso = $peso;
        $this->vitorias = $vitorias;
        $this->derrotas = $derrotas;
        $this->empates = $empates;
        $this->setCategoria($peso);
    }

        public function MostraBasico() {
        echo "Nome: ". $this->getNome()."<br>Nascionalidade: ". $this->getNascionalidade()."<br>Idade: ". $this->getIdade()."<br>";
        printf("Peso: %.2f Kg", $this->getPeso());
        printf("<br>Altura: %.2f<br>", $this->getAltura());
        
    }

    public function MostraCategoria() 
    {
        echo "Categotiria: ".$this->getCategotia();
    }

    public function MostraHistorico() {
        echo "<br>Vitorias: ". $this->getVitorias();
        echo "<br>Derrotas: ". $this->getDerrotas();
        echo "<br>Empates: ". $this->getEmpates();
    }

    public function MostraPesoAltura() {
        
    }

    public function EmpataLuta() {
        $this->setEmpates($this->getEmpates()+1);
    }

    public function GanharLuta() {
        $this->setVitorias($this->getVitorias()+1);
    }


    public function PerderLuta() {
        $this->setDerrotas($this->getDerrotas()+1);
    }

}
