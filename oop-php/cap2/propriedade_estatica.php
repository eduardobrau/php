<?php 
class Software 
{ 
    private $id; 
    private $nome; 
    public static $contador; 
    
    function __construct($nome) 
    { 
        self::$contador ++; 
        
        $this->id   = self::$contador; 
        $this->nome = $nome; 
        print "Software {$this->id} - {$this->nome} <br>\n"; 
    } 

    public function getId(){
        return self::$contador;
    }
} 

// cria novos objetos 
new Software('Dia'); 
$gimp = new Software('Gimp'); 
new Software('Gnumeric'); 
/*Através de uma instância de um objeto eu alterei o valor do 
atributo static $contador o que mostra que ele é dinâmico
como um atributo de um objeto de classe. Mas sua propriedade
está relacionada a própria classe e não a suas instâncias que
fazem uso de sua classe. Isto foi provado através dessa alteração
que refletiu diretamente na estrutura da classe que por consequencia
reflete em todos os objetos instanciado por ela.
$gimp::$contador = 6;*/
//Software::$contador = 'Teste';
echo $gimp->getId().'</br>';
echo 'Quantidade criada = ' . Software::$contador;