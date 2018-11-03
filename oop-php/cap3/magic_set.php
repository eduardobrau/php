<?php 
class Titulo 
{ 
    private $dt_vencimento, $valor, $juros, $multa; 
    
    public function __set($propriedade, $valor) 
    { 
        print "Tentou gravar $propriedade = $valor. Use setValor()<br>\n"; 
    } 
    
    public function setValor($valor) 
    { 
        if (is_numeric($valor)) { 
            $this->valor = $valor; 
        } 
    } 
} 
 
$titulo = new Titulo;
/*
 * Este atributo só pode ser acessado dentro da classe a qual pertence
 * então automaticamente o script vai verificar se existe um método
 * magico __set() antes de dar um erro fatal, caso haja ele recebe
 * automaticamente dois parâmetros a $propriedade e o seu valor
 * neste caso o método seta o atributo valor ao primeiro parâmetro e
 * o valor atribuido a propriedade valor sera setado internamente como
 * segundo parâmetro.
*/
$titulo->valor = 12345;