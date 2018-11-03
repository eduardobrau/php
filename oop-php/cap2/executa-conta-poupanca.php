<?php

include_once './classes/class.conta-poupanca.php';

$c_poupanca = new ContaPoupanca('2311', 231, '12/12/2000', 'Eliana', '123', 23.021, '12/12/2010');
$c_poupanca->retirar(434.450);