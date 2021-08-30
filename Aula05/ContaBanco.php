<?php

class ContaBanco {
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;
    public function __construct() {
        $this->setSaldo(0);
        $this->setStatus(true);
    }

    public function getNumConta() {
        return $this->numConta;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function getDono() {
        return $this->dono;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setNumConta($numConta): void {
        $this->numConta = $numConta;
    }

    public function setTipo($tipo): void {
        $this->tipo = $tipo;
    }

    public function setDono($dono): void {
        $this->dono = $dono;
    }

    public function setSaldo($saldo): void {
        $this->saldo = $saldo;
    }

    public function setStatus($status): void {
        $this->status = $status;
    }
    
    public function abrirConta($t) 
    {
        $this->setTipo($t);
        $this->setStatus(true);
        if($t == "CC")
        {
            $this->setSaldo(50);
        }
        elseif ($t == "CP") 
        {
            $this->saldo = 150;
        }
    }
    public function fecharConta()
    {
        if($this->getSaldo()>0)
        {
            echo "<p>Conta ainda com saldo!<br>Retire no caixa ou agencia mais proximo";
        }
        elseif ($this->getSaldo()<0) 
        {
            echo "<p>Debito ainda não quitado<br>Realize o pagamento ou vá até uma agencia realizar uma negociação";
        }
        else {
            $this->setStatus(false);
        }
    }
    public function depositar($v)
    {
        if ($this->getStatus()) 
        {
            $this->setSaldo($this->getSaldo() + $v);
        }
        else 
        {
            echo "<p>Conta fechada<br>Desposito cancelado.</p>";
        }
    }
    public function sacar($v)
    {
         if ($this->getStatus()) 
         {
             if($this->getSaldo() >= $v)
             {
                 $this->setSaldo($this->getSaldo() - $v);
             }
             else 
             {
                 echo "<p>Saldo insuficiente<br>Saque cancelado.</p>";
             }
         }
         else 
        {
            echo "<p>Conta fechada<br>Saque cancelado.</p>";
        }
    }
    public function pagarMensal()
    {
        if ($this->getTipo() == "CC") 
        {
            $v = 12;
        }
        elseif ($this->getTipo() == "CP") 
        {
            $v = 20;
        }
        if ($this->getStatus())
        {
            $this->setSaldo($this->getSaldo() - $v);
        }
        else 
        {
           echo "<p>Conta fechada<br>Operação Cancelada.</p>" ;
        }
    }
    

}
