<?php 
require_once 'classes/Cesta.php'; 
require_once 'classes/Produto.php'; 

// criação da cesta 
$c1 = new Cesta; 

// agregando os produtos a instancia de cesta
$c1->addItem( new Produto('Chocolate', 10, 5) ); 
$c1->addItem( new Produto('Café',     100, 7) ); 
$c1->addItem( new Produto('Mostarda',  50, 3) ); 
//var_dump($c1->intens[0]);
$itens = $c1->getItens();

echo "<pre>"; var_dump($itens); echo "</pre>";


foreach ($itens as $key => $value) {
	echo $key.'<br>'. $value. '<br>';
}

foreach ($c1->getItens() as $item) 
{ 
    print 'Item: ' . $item->getDescricao() . "<br>\n"; 
} 