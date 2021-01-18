<?php
require_once './ControladorLuta.php';
require_once './Lutador.php';

class Luta implements ControladorLuta{
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;
    
    function getDesafiado() {
        return $this->desafiado;
    }

    function getDesafiante() {
        return $this->desafiante;
    }

    function getRounds() {
        return $this->rounds;
    }

    function getAprovada() {
        return $this->aprovada;
    }

    function setDesafiado($desafiado) {
        $this->desafiado = $desafiado;
    }

    function setDesafiante($desafiante) {
        $this->desafiante = $desafiante;
    }

    function setRounds($rounds) {
        $this->rounds = $rounds;
    }

    function setAprovada($aprovada) {
        $this->aprovada = $aprovada;
    }

        
    public function lutar(){
        if ($this->getAprovada()) {
            $this->getDesafiante()->apresentar();
            $this->getDesafiante()->apresentar();
            $vencedor = rand(0, 2);
            switch ($vencedor) {
                case 0:
                    echo 'Empatou!';
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();
                    break;
                case 1:
                    echo $this->desafiado->getNome();
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                    break;
                case 2:
                    echo $this->desafiante->getNome();
                    $this->desafiado->perderLuta();
                    $this->desafiante->ganharLuta();
                    break;
            }
        }else{
            echo 'Luta não pode aocntecer.';
        }
    }
    public function marcarLuta($desafiante ,$desafiado){
        if ($desafiante->getCategoria() == $desafiado->getCategoria() && $desafiante != $desafiado) {
            $this->setAprovada(true);
            $this->setDesafiante($desafiante);
            $this->setDesafiado($desafiado);
        }else{
            $this->setAprovada(false);
            $this->setDesafiante(NULL);
            $this->setDesafiado(NULL);
        }
    }
}