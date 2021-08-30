<?php
require_once 'Controlador.php';
class ControleRemoto implements Controlador {
    private $volume;
    private $ligado;
    private $tocando;
    private $aux;
    public function getAux() {
        return $this->aux;
    }
    public function __construct() 
    {
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }
    public function getVolume() {
        return $this->volume;
    }
    public function getLigado() {
        return $this->ligado;
    }
    public function getTocando() {
        return $this->tocando;
    }
    public function setVolume($volume): void {
        $this->volume = $volume;
    }
    public function setLigado($ligado): void {
        $this->ligado = $ligado;
    }
    public function setTocando($tocando): void {
        $this->tocando = $tocando;
    }
    public function setAux($aux): void {
        $this->aux = $aux;
    }

    public function abrirMenu() 
    {
        echo ($this->getLigado()?"ON":"OFF");
        echo "<br>Volume: ".$this->getVolume();
        
        for ($i= 0; $i<= $this->getVolume(); $i+=10)
        {
            echo " |";
        }
           
    }

    public function desligar() 
    {
        $this->ligado = false;
    }

    public function desligarMudo() 
    {
        if ($this->getLigado() && $this->getVolume() == 0 ) 
        {
            $this->setVolume($this->getAux());
        }
    }

    public function fecharMenu() 
    {
        echo "Fechando menu";
    }

    public function ligar() 
    {
        $this->ligado = true;
    }

    public function ligarMudo() 
    {
        if ($this->getLigado() && $this->getVolume() > 0 ) 
        {
            $this->setAux($this->getVolume());
            $this->setVolume(0);
        }
    }

    public function maisVolume() 
    {
        if ($this->getLigado()) 
        {
            $this->setVolume($this->getVolume() + 1 );
        }
    }

    public function menosVolume() 
    {
        if ($this->getLigado()) 
        {
            $this->setVolume($this->getVolume() - 1 );
        }
    }

    public function paly() 
    {
        if ($this->getLigado() && !($this->getTocando())) 
        {
            $this->setTocando(true);
        }
    }

    public function pause() 
    {
        if ($this->getLigado() && $this->getTocando()) 
        {
            $this->setTocando(false);
        }
    }

}
