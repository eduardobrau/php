<?php

class ValidaForm{

	private $erro = NULL;
	

	private function validaDados($dados){

		$i = 0;

		foreach ($dados as $key => $value) {

			switch ($key) {
				//Só vai retornar false caso a variável seja inicializada com um valor diferente de zero.
				case 'nome':
					( empty($value) ) ? $this->erro[$i] = $key : '';
				break;
				case 'sexo':
					( empty($value) ) ? $this->erro[$i] = $key : '';
				break;
				case 'email':
					( empty($value) ) ? $this->erro[$i] = $key : '';
				break;
				case 'telefone':
					( empty($value) ) ? $this->erro[$i] = $key : '';
				break;
				case 'data_nascimento':
					( empty($value) ) ? $this->erro[$i] = $key : '';
				break;
				
			}

		$i++;

		}

		if( isset($this->erro) ) return $this->erro;
		//else $this->unset($this->erro);

	}

	public function show_error($dados){
		var_dump( $this->valida_dados($dados) );
	}


}