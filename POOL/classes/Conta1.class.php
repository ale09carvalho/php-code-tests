<?php
class Conta {
    public $Agencia;
    public $Codigo;
    public $DataDeCriacao;
    public $Titular;
    public $Senha;
    public $Saldo;
    public $Cancelada;
    
    function Retirar($quantia) {
        if ($quantia > 0) {
            $this->Saldo -= $quantia;
        }
    }
    
    function Depositar($quantia) {
        if ($quantia > 0) {
            $this->Saldo += $quantia;
        }
    }
    
    function ObterSaldo() {
        return $this->Saldo;
    }
}

?>
