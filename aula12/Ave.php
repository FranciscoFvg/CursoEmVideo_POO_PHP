<?php
require_once './Animal.php';

class Ave extends Animal{
    protected $corPena;
    
    public function locomover(){
        echo "<p>Voando.</p>";
    }
    public function alimentar(){
        echo "<p>Comendo frutas.</p>";
    }
    public function emitirSom(){
        echo "<p>Som de ave.</p>";
    }
    public function fazerNinho(){
        echo "<p>Construiu um ninho.</p>";
    }
    function getCorPena() {
        return $this->corPena;
    }

    function setCorPena($corPena) {
        $this->corPena = $corPena;
    }



}