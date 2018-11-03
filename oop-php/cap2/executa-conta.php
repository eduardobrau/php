<?php

include_once './classes/class.conta.php';

$conta = new Conta('43432',12,'12/01/2000','Eduardo','as12',12.120);
echo 'Meu saldo inicial é: ' .$conta->obterSaldo().'<br/>';
//$conta = NULL;
echo 'Estou depositando R$ 5.000 ' .$conta->Depositar(5.000).'<br/>';
echo 'meu novo saldo é R$ '. $conta->obterSaldo();
