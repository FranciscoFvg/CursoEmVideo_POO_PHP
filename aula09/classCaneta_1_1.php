<?php

class Caneta{
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;
    
    public function __construct($modelo,$cor,$ponta,$carga,$tampada) {
        $this->setModelo($modelo);
        $this->setCor($cor);
        $this->setPonta($ponta);
        $this->setCarga($carga);
        $this->setTampada($tampada);
        $this->tampar();
    }
            
    function getModelo() {
        return $this->modelo;
    }

    function getCor() {
        return $this->cor;
    }

    function getPonta() {
        return $this->ponta;
    }

    function getCarga() {
        return $this->carga;
    }

    function getTampada() {
        return $this->tampada;
    }

    function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    function setCor($cor) {
        $this->cor = $cor;
    }

    function setPonta($ponta) {
        $this->ponta = $ponta;
    }

    function setCarga($carga) {
        $this->carga = $carga;
    }

    function setTampada($tampada) {
        $this->tampada = $tampada;
    }

        
    public function rabiscar(){
        if ($this->tampada == true) {
            echo 'ta tampada';
        }else{
            echo 'estou rabiscando';
        }
        
    }
    
    public function tampar(){
        $this->tampada = true;
    }
    
    public function destampar(){
        $this->tampada = false;
    }
}