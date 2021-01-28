<?php
require_once './Aluno.php';

class Tecnico extends Aluno{
    private $regPro;
    
    public function praticar(){
        echo "<p>Está praticando!</p>";
    }
    
    public function pagarMensalidade(){
        echo "<p>Mensalidade paga tecnico!</p>";
    }
}