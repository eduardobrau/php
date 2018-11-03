<?php
/**
 * Define MinhaClasse
 */
class MinhaClasse
{
    // Declara um construtor público
    //public function __construct() { }
    //Perceba que $mensagem está no escopo global
    //public $mensagem = "Olá eu sou um metodo público <br />";
    public $mensagem;
    // Declara um método public
    public function meuPublico() {
        return $mensagem;
	}

    // Declara um método protected
    protected function meuProtegido() {
		echo "Olá eu sou um metodo protegido posso ser acessado dentro
		da classe que fui declarado e por subclasses. <br />" ;
                //$this->meuPrivado();
	}
	
    // Declara um método private
    private function meuPrivado() {
		echo "Olá eu sou um metodo privado s&oacute; posso ser acessado dentro
			da classe que fui declarado <br />";
	}

    // Esse é public
    public function Foo()
    {
        $this->meuPublico();
        $this->meuProtegido();
        $this->meuPrivado();
    }
}

$minhaclasse = new MinhaClasse;
$minhaclasse->Foo(); // Public, Protected e Private funcionam
$minhaclasse->mensagem = "Este é um teste";
$minhaclasse->meuPublico(); // Funciona

//$minhaclasse->meuProtegido(); Erro Fatal
//$minhaclasse->meuPrivado(); // Erro Fatal