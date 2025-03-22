<?php
    class ContaPoupanca extends Conta
    {
       public $Aniversario;

       // metodo construtor (sobrescrito)
       // agora, tambem inicializa a variavel $Aniversario

       function __construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo, $Cancelada, $Aniversario)
       {
           // chamando o metodo construtor da classe-pai
           parent::__construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo, $Cancelada);
           $this->Aniversario = $Aniversario;
       }

         // metodo Retirar (sobrescrito)
         // verifica se ha saldo para retirar tal quantia
            function Retirar($quantia)
            {
                if ($this->Saldo >= $quantia)
                {
                    // executando metodo da classe-pai
                    parent::Retirar($quantia);
                }
                else
                {
                    echo "Retirada não permitida... <br>";
                    return false;
                }

                // retirada permitida
                return true;
            }
    }
?>
