<?php 
require_once 'classes/Fabricante.php'; 
require_once 'classes/Produto.php'; 

// criação dos objetos 
$p1 = new Produto('Chocolate', 10, 7); 
$f1 = new Fabricante('Chocolate Factory', 'Willy Wonka Street', '1234985235'); 

// asociação 
$p1->setFabricante( $f1 ); 

echo '<pre>'; print_r($p1); echo '</pre>';
//print 'A descrição é ' . $p1->getDescricao() . "<br>\n"; 
echo "<pre>"; var_dump($p1->getDescricao()); echo "</pre>";

print 'O fabriante é ' . $p1->getFabricante()->getNome() . "<br>\n";
//  print 'O documento do fabricante é ' . $p1->getFabricante()->documento . "<br>\n";