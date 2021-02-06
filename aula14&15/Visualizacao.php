<?php
require_once './Video.php';
require_once './Gafanhoto.php';

class Visualizacao{
    private $espectador;
    private $filme;
    
    function __construct($espectador, $filme) {
        $this->espectador = $espectador;
        $this->filme = $filme;
        $this->espectador->viuMaisUm();
        $this->filme->setViews($this->filme->getViews() + 1);
    }
    
    function getEspectador() {
        return $this->espectador;
    }

    function getFilme() {
        return $this->filme;
    }

    function setEspectador($espectador) {
        $this->espectador = $espectador;
    }

    function setFilme($filme) {
        $this->filme = $filme;
    }
    
    public function avaliar() {
        $this->filme->setAvaliacao(5);
        echo '<p>Avaliei normal!</p>';
    }

    public function avaliarNota($nota) {
        $this->filme->setAvaliacao($nota);
        echo '<p>Avaliei com nota!</p>';
    }

    public function avaliarPorc($porcentagem) {
        $nota = $porcentagem / 10;
        $this->filme->setAvaliacao($nota);
        echo '<p>Avaliei com porcentagem!</p>';
    }
    
}