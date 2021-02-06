<?php
require_once './Pessoa.php';

class Gafanhoto extends Pessoa {
    private $login;
    private $totAssistido;
    
    function __construct($nome, $idade, $sexo, $login) {
        parent::__construct($nome,$idade,$sexo);
        $this->login = $login;
        $this->totAssistido = 0;
    }

    
    public function viuMaisUm() {
        $this->setTotAssistido($this->getTotAssistido() + 1);
        echo '<p>Eu assisti mais um!</p>';
    }

    function getLogin() {
        return $this->login;
    }

    function getTotAssistido() {
        return $this->totAssistido;
    }

    function setLogin($login) {
        $this->login = $login;
    }

    function setTotAssistido($totAssistido) {
        $this->totAssistido = $totAssistido;
    }


}