<?php
require_once './Animal.php';

class Peixe extends Animal{
    protected $corEscama;
    
    public function soltarBolha(){
        echo "<p>Soltou uma bolha!</p>";
    }
    
    public function locomover(){
        echo "<p>Nadando.</p>";
    }
    public function alimentar(){
        echo "<p>Comendo substâncias.</p>";
    }
    public function emitirSom(){
        echo "<p>Não tem som.</p>";
    }

    function getCorEscama() {
        return $this->corEscama;
    }

    function setCorEscama($corEscama) {
        $this->corEscama = $corEscama;
    }


}