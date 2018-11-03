<?php 
require_once 'classes/Conta.php'; 
require_once 'classes/ContaPoupanca.php'; 
require_once 'classes/ContaCorrente.php'; 

// criação dos objetos 
$contas = array(); 
/*
$contas[0]->ContaCorrente->['agencia']
*/

/* $contas vai ser um array com dois objetos distintos
ContaCorrente e ContaPoupanca*/
$contas[] = new ContaCorrente(6677, "CC.1234.56", 100, 500); 
$contas[] = new ContaPoupanca(6678, "PP.1234.57", 100); 
var_dump($contas);

/*
Inicialmente inciamos uma conta corrente com o saldo
de R$ 100,00 e ao pedirmos informação sobre essa conta
através do metodo getInfo() ela vai retornar as informações
que estão configurada na super classe Conta.php que terá
informações sobre agencia, conta e saldo que foram repassadas
através do construtor da classe ContaCorrente.php para o método
construtor da super classe Conta.php.
saldo inicial 100,00
deposito      200,00
limite cc     500,00
*/

// percorre as contas 
foreach ($contas as $key => $conta) 
{ 
	print $conta->getInfo() . "<br>\n"; 
	print "    Saldo atual: {$conta->getSaldo()} <br>\n"; 
	$conta->depositar(200); 
    print "    Depósito de: 200 <br>\n";	 
	print "    Saldo atual: {$conta->getSaldo()} <br>\n"; 
	 
	if ($conta->retirar(700)) { 
	    print "    Retirada de: 700 <br>\n"; 
	} 
	else 
	{ 
	    print "    Retirada de: 700 (não permitida)<br>\n"; 
	} 
	print "    Saldo atual: {$conta->getSaldo()} <br>\n"; 
} 