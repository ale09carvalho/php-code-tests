<?php
    class ContaCorrente extends Conta
    {
        public $Limite;
        
        // metodo construtor (sobrescrito)
        // agora, tambem inicializa a variavel $Limite

        function __construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo, $Cancelada, $Limite)
        {
            // chamando o metodo construtor da classe-pai
            parent::__construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo, $Cancelada);
            $this->Limite = $Limite;
        }
        
        // metodo Retirar (sobrescrito)
        // verifica se $quantia retirada esta dentro do limite
        function Retirar($quantia)
        {
            //imposto sobre movimentacao financeira
            $cpmf = 0.05;

            if (($this->Saldo + $this->Limite) >= $quantia)
            {
                // executando metodo da classe-pai
                parent::Retirar($quantia);

                // retirada permitida
                // debita o imposto
                parent::Retirar($quantia * $cpmf);
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
