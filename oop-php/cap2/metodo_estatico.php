<?php 

class Software 
{ 
    private $id; 
    private $nome; 
    /*
     Sempre que tivermos uma propriedade estatica
     devemos acessa-la via self::$static de dentro
     da classe e Classe::$static de fora da classe.
    */
    private static $contador; 
    
    function __construct($nome) 
    { 
        self::$contador ++; 
        $this->id   = self::$contador; 
        $this->nome = $nome; 
        print "Software {$this->id} - {$this->nome} <br>\n"; 
    } 
    /*
     O mesmo metodo de acesso para propriedades estaticas
     vale também para métodos estaticos. e como a propriedade
     $contador foi encapsulada com o nivel mais restrito de
     permissão devemos criar métodos para manipular seu valor
    */
    public static function getContador() 
    { 
        return self::$contador; 
    } 
} 

// cria novos objetos 
$dia = new Software('Dia'); 
new Software('Gimp'); 
new Software('Gnumeric'); 

echo 'Quantidade criada = ' . Software::getContador();
print_r(get_class_methods($dia) );