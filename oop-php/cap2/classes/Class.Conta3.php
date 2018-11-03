<?php


class Conta3{
    
    public $agencia, $codigo, $data_criacao, $titular;
    private $senha, $saldo, $cancelada;
    
     function __construct($agencia, $codigo, $data_criada, $titular, $senha, $saldo, $cancelada) {
        
        $this->agencia = $agencia;
        $this->codigo = $codigo;
        $this->data_criacao = $data_criada;
        $this->titular = $titular;
        $this->senha = $senha;
        $this->saldo = $saldo;
        $this->cancelada = $cancelada;
    }
    
    //public function conta($agencia, $codigo, $data_criou, $titular, $senha, $status){
    public function conta(){
        
        echo 'Cliente: ' .$this->titular. "<br />";
        echo 'Codigo: ' .$this->codigo. "<br />";
        echo 'Data Cadastrada: ' .$this->data_criacao. "<br />";
        echo 'Senha: ' .$this->senha. "<br />";
        echo 'Status da Conta: ' .$this->cancelada. "<br />";
    }
    public function retirarQuantia($quantia){
        
        $this->saldo-=$quantia;
        return $this->saldo;
    }
    
    public function depositarQuantia($quantia){
        
        $this->saldo+=$quantia;
        return $this->saldo;
    }
    
    public function obterSaldo(){
        
        return $this->saldo;
    }
}

$patricia = new Conta3('2130', 27, "12/11/2010", 'Patricia Villarin', '12356', 3212, 'Ativa' );

$patricia->conta();
echo "<br />*******\t Movimentacao Financeira do cliente: {$patricia->titular} \t****** <br />";
echo "<br />Saldo Atual: ".$patricia->saldo. "<br />";
echo "<br /> Apos deposito " .$patricia->depositarQuantia(2100). "<br />";

/*
	Nesta Classe estamos declarando algumas propriedades como private a
	propriedade mais restritiva em termos de acesso, e só pode ser acessada
	dentro da classe onde foi declarada ou por seus metodos interno essas
	regras de acesso se dá o nome de encapsulamento e serve para proteger
	os membros internos de uma classe responsabilidade essa da classe.
	E para que isso seja possível e acessivel de fora de uma classe declaramos
	como public uma metodo da classe e manipulamos essas propriedades.
	Caso contrario se for tentar acessar essas propriedades receberá algo:
	Fatal error: Cannot access private property Conta3::$saldo
*/