<?php
    class Pessoa 
    {
        //atributos
        public $Codigo;
        public $Nome;
        public $Altura;
        public $Idade;
        public $Nascimento;
        public $Escolaridade;
        public $Salario;

        // metodo Crescer
        // almenta altura em $centimetros

        function Crescer($centimetros)
        {
            if ($centimetros > 0)
            {
                //adicionar uma qtd de centímetros à altura de um objeto dentro de um método de uma classe.
                //incrementando a propriedade Altura do objeto
                $this->Altura += $centimetros;
            }
        }

        //metodo formar
        //altera a escolaridade para $titulacao
        function Formar($titulacao)
        {
            $this->Escolaridade = $titulacao;
        }

        //metodo envelhecer
        //aumenta a idade em $anos
        function Envelhecer($anos)
        {
            if ($anos > 0)
            {
                $this->Idade += $anos;
            }
        }   

    }
?>
