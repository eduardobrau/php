<?php

include_once './classes/class.pessoa2.php';

$eduardo = new Pessoa2("32.123.934.111-3", "Macos Feliciano", 2.14, 26, "12/12/2932", "Fundamental", 2390);
/*
$eduardo->altura = 1.86;
$eduardo->escolaridade ='Ensiono M&eacute;dio';
$eduardo->idade = 34;
$eduardo->nascimento = "19/08/1979";
$eduardo->nome = 'Eduardo Esteves';
$eduardo->rg = '21.122.122.111-8';
$eduardo->salario = 1100;
*/
echo "Manipulando o objeto $eduardo->nome"
. "<br /> Escolaridade: " .$eduardo->escolaridade .
        "<br / > Forma&ccedil;&atilde;o: {$eduardo->formacao('Analista de Sistema')}"
        . "<br /> Forma&ccedil;o: " .$eduardo->escolaridade."\n";
echo "<br /> Idade: " .$eduardo->idade. 
        "<br /> Envelhecendo 5 anos: " .$eduardo->envelhecer(5). $eduardo->idade;
echo "<br /> Sera que foi destruido o objeto ".$eduardo->nome. "?";

var_dump($eduardo);
