<?php
require_once './Aluno.php';

class Bolsista extends Aluno{
    private $bolsa;
    
    function getBolsa() {
        return $this->bolsa;
    }

    function setBolsa($bolsa) {
        $this->bolsa = $bolsa;
    }
    
    public function renovarBolsa(){
        echo "<p>bolsa renovada!</p>";
    }
    
    public function pagarMensalidade(){
        echo "<p>Mensalidade paga bolsista!</p>";
    }
}