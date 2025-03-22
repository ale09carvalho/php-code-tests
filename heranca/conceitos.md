Orientaçao a Objeto - encapsulamento do codigo em classes orienta a uma maior organizaçoa.
Um dos maiores beneficio e o reuso.
reutilizar partes de codigo ja definidas nos da maior agilidade.

HERANÇA - EM OO - Compartilhamento  de atributos e comportamentos entre classes de uma mesma árvore.
Classes inferiores - herdam todas as propriedades e os métodos das classes superiores - as superclasses-

Foi criada a classe GENERICA CONTA - aproveitando seu codigo-fonte cria-se mais 2 classes especificas:
ContaCorrente e ContaPoupança.

--CONTA---------------
Agencia
Codigo
DataCriação
Titular
Senha
Saldo
Cancelada
--METODO-----------------
Retirar()
Depositar()
ObterSaldo()

==>ContaCorrente ---------------==>ContaPoupança
   Limite                -         Aniversario
--METODO--                        --METODOtodo--
Retirar(quantia)      -           Retirar(quantia)

POLIMORFISMO EM OO - "Muitas formas"
Permite que classes derivadas de uma mesma superclasse tenha métodos iguais ( com a mesma nomeclatura e paramentros)
porem com comportamentos difenrentes, redefinidos em cada uma de suas classes-filha.

EXEMPLOS: CLASSES  ContaCorrente e ContaPoupança ---- possuem o mesmo método ---METODO Retirar(quantia)
mas COMPORTAMENTO diferentes em ambas:
No caso da ContaPoupança --- verifica se ha saldo if ($this->Saldo >= $quantia)
No caso da ContaCorrente --- verifica se a retirada esta dentro do limite da operaçao alem de debitar imposto CPMF

-----------------------SAIDA DE DADOS------------------------
Manipulando o objeto Carlos da Silva :
Manipulando a conta de: Carlos da Silva
O saldo atual é 1 é R$ 500
O saldo atual da conta 1 é R$ 700
O saldo atual da conta 1 é R$ 595

Manipulando a conta de: Carlos da Silva
O saldo atual é 2 é R$ 500
O saldo atual da conta 2 é R$ 700
O saldo atual da conta 2 é R$ 600

Objeto Conta CC.1234.56 finalizado...
Objeto Conta PP.1234.56 finalizado...
Objeto Carlos da Silva finalizado...


