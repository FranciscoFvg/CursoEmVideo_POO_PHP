<?php
require_once './ControladorLutador.php';

class Lutador implements ControladorLutador{
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;
    
    function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates) {
        $this->nome = $nome;
        $this->nacionalidade = $nacionalidade;
        $this->idade = $idade;
        $this->altura = $altura;
        $this->setPeso($peso);
        $this->vitorias = $vitorias;
        $this->derrotas = $derrotas;
        $this->empates = $empates;
    }

        function getNome() {
        return $this->nome;
    }

    function getNacionalidade() {
        return $this->nacionalidade;
    }

    function getIdade() {
        return $this->idade;
    }

    function getAltura() {
        return $this->altura;
    }

    function getPeso() {
        return $this->peso;
    }

    function getCategoria() {
        return $this->categoria;
    }

    function getVitorias() {
        return $this->vitorias;
    }

    function getDerrotas() {
        return $this->derrotas;
    }

    function getEmpates() {
        return $this->empates;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setNacionalidade($nacionalidade) {
        $this->nacionalidade = $nacionalidade;
    }

    function setIdade($idade) {
        $this->idade = $idade;
    }

    function setAltura($altura) {
        $this->altura = $altura;
    }

    function setPeso($peso) {
        $this->peso = $peso;
        $this->setCategoria();
    }

    private function setCategoria() {
        if ($this->getPeso() < 52.2) {
            $this->categoria = 'Inválido';
        } elseif ($this->getPeso() <= 70.3) {
            $this->categoria = 'Leve';
        } elseif ($this->getPeso() <= 83.9) {
            $this->categoria = 'Médio';
        } elseif ($this->getPeso() <= 120.2){
            $this->categoria = 'Pesado';
        }else{
            $this->categoria = 'Inválido';
        }
    }

    function setVitorias($vitorias) {
        $this->vitorias = $vitorias;
    }

    function setDerrotas($derrotas) {
        $this->derrotas = $derrotas;
    }

    function setEmpates($empates) {
        $this->empates = $empates;
    }

    public function apresentar() {
        echo '#---------------Apresentação------------------#';
        echo '<p>Lutador: ' . $this->getNome() . '.</p>';
        echo '<p>Origem: ' . $this->getNacionalidade() . '.</p>';
        echo '<p>' . $this->getIdade() . ' anos.</p>';
        echo '<p>' . $this->getAltura() . ' m de altura.</p>';
        echo '<p>Pesando: ' . $this->getPeso() . '.</p>';
        echo '<p>Ganhou: ' . $this->getVitorias() . ' lutas.</p>';
        echo '<p>Perdeu: ' . $this->getDerrotas() . ' lutas.</p>';
        echo '<p>Empatou: ' . $this->getEmpates() . ' lutas.</p>';
        
    }

    public function empatarLuta() {
        $this->setEmpates($this->getEmpates() + 1);
    }

    public function ganharLuta() {
        $this->setVitorias($this->getVitorias() + 1);
    }

    public function perderLuta() {
        $this->setDerrotas($this->getDerrotas() + 1);
    }

    public function status() {
        echo '<p>' . $this->getNome() . '</p>';
        echo '<p>É um peso ' . $this->getCategoria() . '</p>';
        echo '<p>' . $this->getVitorias() . ' vitórias.</p>';
        echo '<p>' . $this->getDerrotas() . ' derrotas.</p>';
        echo '<p>' . $this->getEmpates() . ' empates.</p>';
    }

}