<?php 
$produto = new StdClass; 
$produto->descricao = 'Chocolate Amargo'; 
$produto->estoque   = 100; 
$produto->preco     = 7; 

$vetor1 = (array) $produto; 
echo '#### Debugando $vetor1 que vai receber o casting array de $produto ####'.'</br>';
print_r($vetor1);

echo '</br>';

echo '## Agora acessando um valor especifico do array por meio de seu indice $vetor1["descricao"]'.'</br>';
print $vetor1['descricao'] . "<br>\n"; 

$vetor2 = [ 'descricao' => 'Café', 'estoque' => 100, 'preco' => 7 ]; 
$produto2 = (object) $vetor2; 
print $produto2->descricao . "<br>\n";