<?php
require_once './Animal.php';

class Reptil extends Animal{
    protected $corEscama;
    
    public function locomover(){
        echo "<p>Rastejando.</p>";
    }
    public function alimentar(){
        echo "<p>Comendo vegetais.</p>";
    }
    public function emitirSom(){
        echo "<p>Som de reptil.</p>";
    }

    function getCorEscama() {
        return $this->corEscama;
    }

    function setCorEscama($corEscama) {
        $this->corEscama = $corEscama;
    }


}