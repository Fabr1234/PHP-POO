<?php
require_once 'Publicação.php';
class Livro implements Publicação {
    
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;
    public function getTitulo() {
        return $this->titulo;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function getTotPaginas() {
        return $this->totPaginas;
    }

    public function getPagAtual() {
        return $this->pagAtual;
    }

    public function getAberto() {
        if ($this->aberto) 
        {
            return "Sim";
            
        }
        else
            return "Não";
    }

    public function getLeitor() {
        return $this->leitor;
    }

    public function setTitulo($titulo): void {
        $this->titulo = $titulo;
    }

    public function setAutor($autor): void {
        $this->autor = $autor;
    }

    public function setTotPaginas($totPaginas): void {
        $this->totPaginas = $totPaginas;
    }

    public function setPagAtual($pagAtual): void {
        $this->pagAtual = $pagAtual;
    }

    public function setAberto($aberto): void {
        $this->aberto = $aberto;
    }

    public function setLeitor($leitor): void {
        $this->leitor = $leitor;
    }
    
    public function __construct($titulo, $autor, $totPaginas, $leitor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
        $this->pagAtual = 1;
        $this->aberto = true;
        $this->leitor = $leitor;
    }

    public function Detalhes() 
    {
        printf("Titulo: %s<br>Autor: %s<br>Total de paginas: %d<br>Pagina atual: %d<br>Aberto: %s<br>Leitor: %s", $this->getTitulo(), $this->getAutor(), 
                $this->getTotPaginas(), $this->getPagAtual(), $this->getAberto(), $this->getLeitor());
    }

    public function abrir() {
        $this->setAberto(true);
        
    }

    public function avancarPag() 
    {
        if ($this->getAberto()) 
        {
            $this->setPagAtual($this->getPagAtual() + 1);
        }
        else 
        {
            echo "Abra o livro";
        }
        
    }

    public function fechar() 
    {
        $this->setAberto(false);
    }

    public function folhear($p) 
    {
        if ($p> $this->totPaginas) {
            $this->pagAtual = 0;
        }
        else
        {
            $this->pagAtual = $p;
        }
        
    }

    public function voltarPag() 
    {
        if ($this->getAberto()) 
        {
            $this->setPagAtual($this->getPagAtual() - 1);
        }
        else 
        {
            echo "Abra o livro";
        }
        
    }

}
