<?php

include_once './classes/class.cliente.php';
include_once './classes/class.valida-cliente.php';

//$cliente->setDados($sexo='Masculino');
//$cliente->showDados();
$form = array(
	'nome'						=>'Eduardo',
	'sexo' 						=> 'Masculino',
	'email'						=> 'mail.com',
	'telefone' 				=> 12202,
	'data_nascimento' => '12'

);

$cliente = new Cliente($form);
$cliente2 = new ValidaCliente($form);
$cliente2->show_error();
//$ca = $cliente->setDados($form);



