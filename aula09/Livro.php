<?php
require_once './Publicacao.php';
require_once './Pessoa.php';

class Livro implements Publicacao{
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;
    
    function __construct($titulo, $autor, $totPaginas, $leitor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
        $this->leitor = $leitor;
        $this->pagAtual = 0;
        $this->aberto = false;
    }

    
    function getTitulo() {
        return $this->titulo;
    }

    function getAutor() {
        return $this->autor;
    }

    function getTotPaginas() {
        return $this->totPaginas;
    }

    function getPagAtual() {
        return $this->pagAtual;
    }

    function getAberto() {
        return $this->aberto;
    }

    function getLeitor() {
        return $this->leitor;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setAutor($autor) {
        $this->autor = $autor;
    }

    function setTotPaginas($totPaginas) {
        $this->totPaginas = $totPaginas;
    }

    function setPagAtual($pagAtual) {
        $this->pagAtual = $pagAtual;
    }

    function setAberto($aberto) {
        $this->aberto = $aberto;
    }

    function setLeitor($leitor) {
        $this->leitor = $leitor;
    }

        
    public function detalhes() {
        echo '<p>Livro ' . $this->getTitulo() . ' escrito por ' . $this->getAutor() . '.</p>';
        echo '<p>Páginas ' . $this->getTotPaginas() . '.</p>';
        echo '<p>Sendo lido por: ' . $this->getLeitor()->getNome() . '.</p>';
    }

    public function abrir() {
        $this->setAberto(true);
    }

    public function avancarPag() {
        $this->setPagAtual($this->getPagAtual() + 1);
    }

    public function fechar() {
        $this->setAberto(false);
    }

    public function folhear($p) {
        if ($p > $this->getTotPaginas()) {
            $this->setPagAtual(0);
        }else{
            $this->setPagAtual($p);
        }
    }

    public function voltarPag() {
        $this->setPagAtual($this->getPagAtual() - 1);
    }

}