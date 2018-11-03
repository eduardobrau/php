<?php 
class ContaCorrente extends Conta 
{ 
    protected $limite; 
    
    public function __construct($agencia, $conta, $saldo, $limite) 
    { 
        /*Método constutor da super classe Conta.php vai ser setado no 
        momento da instancia da classe filha ContaCorrente mas ela 
        não terá o valor do $limite que vai ser setada e acessivel
        somente nesta classe e por classes que a extenderem.*/

        parent::__construct($agencia, $conta, $saldo); 
        $this->limite = $limite; 
    } 
    
    public final function retirar($quantia) 
    { 
        if ( ($this->saldo + $this->limite) >= $quantia ) { 
            $this->saldo -= $quantia; // retirada permitida 
        } 
        else { 
            return false; // retirada não permitida 
        } 
        return true; 
    } 
}