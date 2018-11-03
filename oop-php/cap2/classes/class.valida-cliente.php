<?php

include_once './classes/class.cliente.php';

class ValidaCliente extends Cliente{
	
	function __construct($dados){
		parent::__construct($dados);
		$this->show_error($dados);
	}

	private function valida_dados($dados){

		$i = 0;

		foreach ($dados as $key => $value) {

			switch ($key) {
				case 'nome':
					( empty($value) ) ? $erro[$i] = $key : '';
				break;
				case 'sexo':
					( empty($value) ) ? $erro[$i] = $key : '';
				break;
				case 'email':
					( empty($value) ) ? $erro[$i] = $key : '';
				break;
				case 'telefone':
					( empty($value) ) ? $erro[$i] = $key : '';
				break;
				case 'data_nascimento':
					( empty($value) ) ? $erro[$i] = $key : '';
				break;
				
			}

		$i++;

		}

		if( isset($erro) )
			return $erro;

	}

	public function show_error($dados){
		var_dump( $this->valida_dados($dados) );
	}


}