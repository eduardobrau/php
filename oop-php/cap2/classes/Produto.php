<?php 
class Produto //implements OrcavelInterface  
{ 
	private $descricao; 
	private $estoque; 
	private $preco;
	private $fabricante; 
	private $caracteristicas; 
	 
	public function __construct($descricao, $estoque, $preco){ 
    $this->descricao = $descricao; 
    $this->estoque = $estoque; 
    $this->preco = $preco;  
	} 
	 
	public function getDescricao(){ 
	  return $this->descricao; 
	} 
	/*Perceba a expressão 'Fabricante' na frente do nome
	do parâmetro $f esse conceito chama-se indução ao tipo
	(type hinting). Ao utilizarmos esse recurso, estamos
	indicando explicitamente qual deverá ser o tipo da 
	variável a ser recebida para evitar erros.*/
	public function setFabricante( Fabricante $f ){ 
	  $this->fabricante = $f; 
	} 
	 
	public function getFabricante(){ 
	  return $this->fabricante; 
	} 
	
	public function setCaracteristica( $nome, $valor ){ 
	  $this->caracteristicas[] = new Caracteristica($nome, $valor); 
	} 
	 
	public function getCaracteristicas(){ 
	  return $this->caracteristicas; 
	}
	
	public function getPreco() { 
	  return $this->preco; 
	}
} 
