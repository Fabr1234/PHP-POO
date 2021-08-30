<?php
require_once 'Lutador.php';
require_once 'Ficha.php';
class Luta 
{
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovado;
    public function getDesafiado(): Lutador {
        return $this->desafiado;
    }

    public function getDesafiante(): Lutador {
        return $this->desafiante;
    }

    public function setDesafiado(Lutador $desafiado): void {
        $this->desafiado = $desafiado;
    }

    public function setDesafiante(Lutador $desafiante): void {
        $this->desafiante = $desafiante;
    }
    public function getRounds() {
        return $this->rounds;
    }

    public function getAprovado() {
        return $this->aprovado;
    }

    public function setRounds($rounds): void {
        $this->rounds = $rounds;
    }

    public function setAprovado($aprovado): void {
        $this->aprovado = $aprovado;
    }

        public function marcarLuta($l1, $l2) {
        if ($l1->getCategotia() === $l2->getCategotia() && ($l1 != $l2)) 
        {
            $this->aprovado = true;
            $this->desafiado = $l1;
            $this->desafiante = $l2;
        }
        else
        {
            $this->aprovado = false;
            $this->desafiado = null;
            $this->desafiante = null;
        }
    }
    public function __construct() 
    {
        
    }

    
    public function lutar() {
        if ($this->aprovado) 
        {
            $this->desafiado->MostraBasico();
            $this->desafiado->MostraCategoria();
            $this->desafiado->MostraHistorico();
            echo"</br><br>";
            $this->desafiante->MostraBasico();
            $this->desafiante->MostraCategoria();
            $this->desafiante->MostraHistorico();
            
            $vencedor = random_int(0, 2);
            switch ($vencedor) {
                case 0:
                    $this->desafiado->EmpataLuta();
                    $this->desafiante->EmpataLuta();
                break;
                case 1:
                    $this->desafiado->GanharLuta();
                    $this->desafiante->PerderLuta();
                break;
                case 2:
                    $this->desafiante->GanharLuta();
                    $this->desafiado->PerderLuta();
                break;

            }
            
                
        }
        else 
        {
            echo "Luta não aprovada";
        }
    }


}
