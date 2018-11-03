<?php
require_once 'classes/Produto.php'; 
require_once 'classes/Caracteristica.php'; 

// criação dos objetos 
$p1 = new Produto('Chocolate', 10, 7); 

// composição 
$p1->setCaracteristica( 'Cor', 'Branco' ); 
$p1->setCaracteristica( 'Peso', '2.6 Kg' ); 
$p1->setCaracteristica( 'Potência', '20 Watt RMS' ); 

echo "<pre>"; var_dump($p1); echo "</pre>";


//echo '##### Imprimindo apenas o primeiro valor do objeto Característica ###### <br>';
//echo $p1->caracteristicas[0]->nome .'<br>';

echo'### Imprimindo todos os valores do objeto Caracteristica #####<br>';
print 'Produto: ' . $p1->getDescricao() . "<br>\n"; 
foreach ($p1->getCaracteristicas() as $c) 
{ 
    print '  Característica: ' . $c->getNome() . ' -  ' . $c->getValor() . "<br>\n"; 
} 

// Debugando o objeto $p1 com var_dump($p1);
/* object(Produto)[1]
  private 'descricao' => string 'Chocolate' (length=9)
  private 'estoque' => int 10
  private 'preco' => int 7
  private 'fabricante' => null
  private 'caracteristicas' => 
    array (size=3)
      0 => 
        object(Caracteristica)[2]
          private 'nome' => string 'Cor' (length=3)
          private 'valor' => string 'Branco' (length=6)
      1 => 
        object(Caracteristica)[3]
          private 'nome' => string 'Peso' (length=4)
          private 'valor' => string '2.6 Kg' (length=6)
      2 => 
        object(Caracteristica)[4]
          private 'nome' => string 'PotÃªncia' (length=9)
          private 'valor' => string '20 Watt RMS' (length=11)
### Imprimindo todos os valores do objeto Caracteristica #####
Produto: Chocolate
CaracterÃ­stica: Cor - Branco
CaracterÃ­stica: Peso - 2.6 Kg
CaracterÃ­stica: PotÃªncia - 20 Watt RMS */