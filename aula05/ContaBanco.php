<?php

class ContaBanco{
    public $numConta;//int
    protected $tipo;//string -> cp ou cc
    private $dono;//string
    private $saldo;//float
    private $status;//bool
    
    function __construct() {
        $this->saldo = 0;
        $this->status = false;
        echo 'Objeto criado com sucesso.';
        echo '<br>';
    }
            
    function getNumConta() {
        return $this->numConta;
    }

    function getTipo() {
        return $this->tipo;
    }

    function getDono() {
        return $this->dono;
    }

    function getSaldo() {
        return $this->saldo;
    }

    function getStatus() {
        return $this->status;
    }

    function setNumConta($numConta) {
        $this->numConta = $numConta;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    function setDono($dono) {
        $this->dono = $dono;
    }

    function setSaldo($saldo) {
        $this->saldo = $saldo;
    }

    function setStatus($status) {
        $this->status = $status;
    }

        
    public function abrirConta($tipo){
        $this->setStatus(true);
        $this->setTipo($tipo);
        if ($this->getTipo() == 'cc') {
            $this->setSaldo(50);
            echo 'Conta corrente criada com sucesso por ' . $this->getDono() . '.';
            echo '<br>';
        }elseif($this->getTipo() == 'cp'){
            $this->setSaldo(150);
            echo 'Conta poupança criada com sucesso por ' . $this->getDono() . '.';
            echo '<br>';
        } else {
            echo 'Erro: Tipo inválido.';
            echo '<br>';
        }
    }
    public function fecharConta(){
        if ($this->getSaldo() == 0) {
            $this->setStatus(false);
            echo 'Conta de ' . $this->getDono() . ' encerrada com sucesso.';
            echo '<br>';
        }elseif ($this->getSaldo() > 0) {
            echo 'Erro: Conta ainda possui dinheiro.';
            echo '<br>';
        }else{
            echo 'Erro: Saldo negativo.';
            echo '<br>';
        }
    }
    public function depositar($valor){
        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() + $valor);
            echo 'Depósito de R$ ' .  $valor . ',00 do usuário ' . $this->getDono() . ' executado com sucesso.';
            echo '<br>';
        } else {
            echo 'Erro: Impossível depositar em conta inexistente.';
            echo '<br>';
        }
    }
    public function sacar($valor){
        if ($this->getStatus() && $this->getSaldo() >= $valor) {
            $this->setSaldo($this->getSaldo() - $valor);
            echo 'Saque de R$ ' . $valor . ',00 do usuário ' . $this->getDono() . ' executado com sucesso.';
            echo '<br>';
        }else {
            echo 'Erro: Impossível sacar (Conta inexistente ou sem saldo suficiente.)';
            echo '<br>';
        }
    }
    public function pagarMensal(){
        $ccv = 12;
        $cpv = 20;
        if ($this->getStatus()) {
            if ($this->getTipo() == 'cc' && $this->getSaldo() >=$ccv) {
                $this->setSaldo($this->getSaldo() - $ccv);
            }elseif($this->getTipo() == 'cp' && $this->getSaldo() >= $cpv){
                $this->setSaldo($this->getSaldo() - $cpv);
            }else{
                echo 'Erro: Impossível executar ação(saldo insuficiente).';
                echo '<br>';
            }
        }else{
            echo 'Erro: Impossível executar ação em conta inexistente.';
            echo '<br>';
        }
    }
    
}