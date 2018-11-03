<?php

class MinhaClasse{
	
	public $publica = 'public';
	protected $protegida = 'protected';
	private $privada = 'private';
	
	function imprimeAlo(){
		echo $this->publica;
		echo $this->protegida;
		echo $this->privada;
	}
}

class MinhaClasse2 extends MinhaClasse
{
    // Nós podemos redeclarar as propriedades públicas e protegidas mas não as privadas
    protected $protegida = 'Protected2';

    function imprimeAlo()
    {
        echo $this->publica ;
        echo $this->protegida ;
        echo $this->privada ;
    }
}

$obj = new MinhaClasse();
echo $obj->publica ."<br />"; // vai acessar normalmente
//echo $obj->protegida; // vai dar erro fatal caso queira acessar essa propriedade precisaria extender essa classe
//echo $obj->privada;
$obj->imprimeAlo();
	
echo "<br />******************************************** <br />";

$obj2 = new MinhaClasse2();
echo $obj2->publica; // Works
echo $obj2->privada; // Undefined
echo $obj2->protegida; // Fatal Error
$obj2->imprimeAlo(); // Mostra Public, Protected2, Undefined
