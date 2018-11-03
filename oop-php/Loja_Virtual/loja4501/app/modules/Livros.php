<?php

class Livros {
	protected $banco;
	protected $tabela = 'livros';
	
	public function __construct() {
		$this->banco = Banco::instanciar();
	}
	
	public function livros() {
		return $this->banco->listar($this->tabela);
	}
	
	public function inserir() {
		if($_POST) {
			$this->banco->inserir($this->tabela, $_POST);
			header("Location: index.php?module=livros&action=livros");
		}
	}
	
	public function alterar() {
		if($_POST) {
			$this->banco->inserir($this->tabela, $_POST['id'], $_POST);
			header("Location: index.php?module=livros&action=livros");
		}
		
		$dados = $this->banco->ver($this->tabela, '*', $_GET['id']);
		
		return $dados[0];
	}
	
	public function remover() {
		$this->banco->remover($this->tabela, $_GET['id']);
		header("Location: index.php?module=livros&action=livros");
	}
	
	public function ver() {		
		$dados = $this->banco->ver($this->tabela, '*', $_GET['id']);
		
		return $dados[0];
	}
}
