<?php

require_once './class.valida-form.php';

class Form{

	//protected $nome, $sexo, $email, $telefone, $dt_nasc;
	private $dados = array();

	public function setDados($user){

		if( !empty($user) ){
			$this->dados = new ValidaForm($user);
		}else
		return FALSE;

	}

	/*
	public function mostraDados(){
		echo 'Cliente ' .$this->nome ."<br />";
		echo 'Email ' .$this->email ."<br />";
		echo 'Telefone ' .$this->telefone ."<br />";
		echo 'Sexo ' .$this->sexo ."<br />";
		echo 'Data Nascimento ' .$this->dt_nasc ."<br />";
		//var_dump($this->sexo);
	}
	*/

}