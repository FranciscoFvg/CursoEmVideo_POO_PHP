<?php
require_once './Controlador.php';

class ControleRemoto implements Controlador{
    private $volume;
    private $ligado;
    private $tocando;
    
    function __construct() {
        $this->setVolume(50);
        $this->setLigado(false);
        $this->setTocando(false);
    }
    
    private function getVolume() {
        return $this->volume;
    }

    private function getLigado() {
        return $this->ligado;
    }

    private function getTocando() {
        return $this->tocando;
    }

    private function setVolume($volume) {
        $this->volume = $volume;
    }

    private function setLigado($ligado) {
        $this->ligado = $ligado;
    }

    private function setTocando($tocando) {
        $this->tocando = $tocando;
    }

    
    
    public function ligar(){
        $this->setLigado(true);
    }
    public function desligar(){
        $this->setLigado(false);
    }
    public function abrirMenu(){
        echo '<p>Está ligado? ' . (($this->getLigado())?'Sim':'Não') . '</p>';
        echo '<p>Está tocando? ' . (($this->getTocando())?'Sim':'Não') . '</p>';
        echo '<p>O volume é de: ' . $this->getVolume() . '</p>';
        for ($i = 0; $i < $this->getVolume(); $i +=10) {
            echo '<strong> | </strong>';
        }
    }
    public function fecharMenu(){
        echo '<p>Fechando menu...</p>';
    }
    public function maisVolume(){
        if ($this->getLigado()) {
            $this->setVolume($this->getVolume() + 1);
            echo '<p>Volume: '. $this->getVolume() .'</p>';
        }
    }
    public function menosVolume(){
        if ($this->getLigado()) {
            $this->setVolume($this->getVolume() - 1);
            echo '<p>Volume: '. $this->getVolume() .'</p>';
        }
    }
    public function ligarMudo(){
        if ($this->getLigado() && $this->getVolume() > 0) {
            $this->setVolume(0);
        }
    }
    public function desligarMudo(){
        if ($this->getLigado() && $this->getVolume() == 0) {
            $this->setVolume(50);
        }
    }
    public function play(){
        if ($this->getLigado() && !$this->getTocando()) {
            $this->setTocando(true);
        }
    }
    public function pause(){
        if ($this->getLigado() && $this->getTocando()) {
            $this->setTocando(false);
        }
    }
    
    
}