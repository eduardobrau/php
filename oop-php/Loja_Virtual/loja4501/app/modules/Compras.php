<?php

class Compras {
	protected $banco;
	protected $carrinho;
	
	public function __construct() {
		$this->banco = Banco::instanciar();
		$this->carrinho = new Carrinho;
	}
	
	public function adicionar() {
		$this->carrinho->adicionarProduto($_GET['id']);
		header("Location: index.php?module=compras&action=carrinho");
	}
	
	public function carrinho() {
		if(isset($_POST['esvaziar'])) {
			$this->carrinho->esvaziarCarrinho();
		}

		if(isset($_POST['atualizar'])) {
			// Para cada produto em nosso carrinho, chamaremos o método de alteração de quantidade
			foreach($_POST['produto'] as $chave => $produto) {
				$this->carrinho->alterarQuantidade($produto, $_POST['quantidade'][$chave]);
			}
			
			// Caso o checkbox de remoção tenha sido marcado
			if(isset($_POST['remover'])) {
				// Itere entre os valores marcados e chame o método de remoção com o value do checkbox
				foreach($_POST['remover'] as $produto) {
					$this->carrinho->removerProduto($produto); 
				}
			}
		}

		if(isset($_POST['compra'])) {
			foreach($_POST['produto'] as $key => $value) {
				$quantidade = $_POST['quantidade'][$key];
				$produto = $this->banco->ver("livros", "*", "id = $value");
				
				// Criamos um dado pré-formatado com informações da compra. A partir daqui, podemos chamar um método de uma classe de boleto, cartão ou PagSeguro
				$compras[] = "[{$quantidade}-{$produto[0]['id']}-{$produto[0]['titulo']}-{$produto[0]['preco']}]";
			}
			
			$compras = implode(', ', $compras); // Unimos nossos dados pré-formatados, separados por vírgulas, para cada produto comprado
			$this->carrinho->esvaziarCarrinho();
			die("Compramos os itens: $compras"); // Mostramos na tela os itens comprados
		}
		
		return $this->carrinho->listarProdutos();
	}
}
