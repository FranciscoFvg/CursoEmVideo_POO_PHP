<?php
require_once './Pessoa.php';

class Aluno extends Pessoa{
    private $matr;
    private $curso;
    
    function getMatr() {
        return $this->matr;
    }

    function getCurso() {
        return $this->curso;
    }

    function setMatr($matr) {
        $this->matr = $matr;
    }

    function setCurso($curso) {
        $this->curso = $curso;
    }
    
    public function cancelarMatr(){
        echo "<p>Matricula será cancelada!</p>";
    }
}