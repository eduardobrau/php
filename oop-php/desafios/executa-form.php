<?php

include_once './class.form.php';

//$cliente->setDados($sexo='Masculino');
//$cliente->showDados();
$user = array(
	'nome'						=>'Eduardo',
	'sexo' 						=> 'Masculino',
	'email'						=> 'mail.com',
	'telefone' 				=> 12202,
	'data_nascimento' => ''

	);

$form = new Form;
$form->setDados($user);
var_dump($form);




