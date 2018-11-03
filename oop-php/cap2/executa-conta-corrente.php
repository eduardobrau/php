<?php

include_once './classes/class.conta-corrente.php';

$c_corrente = new ContaCorrente('2311', 231, '12/12/2000', 'Eliana', '123', 23.021, 3.400);

$mensagem1='Retirei da conta a quantia de 14.000 ';
$mensagem1.='acrescido de mais 5% ';
$mensagem1.='o que me restou R$ ';

echo 'Saldo inicial Conta é: ' .$c_corrente->obterSaldo() . '<br>';
$c_corrente->retirar(14.000);
echo $mensagem1 . $c_corrente->obterSaldo(). '<br/>';
