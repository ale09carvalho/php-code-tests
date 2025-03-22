<?php
class Conta 
{
    public $Agencia;
    public $Codigo;
    public $DataDeCriacao;
    public $Titular;
    public $Senha;
    public $Saldo;
    public $Cancelada;

    // funçoes para manipular o saldo

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
//-------------------------------------------------------------------------------------------
    // metodo construtor
    // inicializa propriedades
    function __construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo, $Cancelada)
    {
        $this->Agencia = $Agencia;
        $this->Codigo = $Codigo;
        $this->DataDeCriacao = $DataDeCriacao;
        $this->Titular = $Titular;
        $this->Senha = $Senha;
       
        // chamada a outro metodo da classe
        $this->Depositar($Saldo);
        $this->Cancelada = $Cancelada;
    }

    // metodo __destruct
    // finaliza objeto
    function __destruct()
    {
        echo "Objeto Conta {$this->Codigo} finalizado...<br>";
    }   
    
}

?>
