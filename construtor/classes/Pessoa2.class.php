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

        // funçoes da classe
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
//------------------------------------------------------------------------------
       // metodo construtor
         // inicializa propriedades
        function __construct($Codigo, $Nome, $Altura, $Idade, $Nascimento, $Escolaridade, $Salario)
        {
            $this->Codigo = $Codigo;
            $this->Nome = $Nome;
            $this->Altura = $Altura;
            $this->Idade = $Idade;
            $this->Nascimento = $Nascimento;
            $this->Escolaridade = $Escolaridade;
            $this->Salario = $Salario;
        }
        
        // metodo __destruct
        // finaliza objeto
        function __destruct()
        {
            echo "Objeto {$this->Nome} finalizado...<br>\n";
        } 
    }    
