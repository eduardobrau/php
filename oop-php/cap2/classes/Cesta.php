<?php 
class Cesta 
{ 
    private $time; 
    private $itens; 
    
    public function __construct( ) 
    { 
        $this->time = date('Y-m-d H:i:s'); 
        $this->itens = array(); 
    } 
    /*
    Note que o metodo addItem só aceita receber
    um parâmetro do tipo object Produto ou seja
    tem uma indução ao tipo Produto. Que por sua
    vez esse parâmetro já deve existir no ato da
    manipulação ao metodo, ou seja quando destruir
    o object Cesta o object Produto ainda vai existir
    isso porque foi criado fora da classe e o object
    Cesta não tem nenhuma resposabilidade com esta.
    */
    public function addItem( Produto $p ) 
    { 
        $this->itens[] = $p; 
    } 
    
    public function getItens() 
    { 
        return $this->itens; 
    } 
    
    public function getTime() 
    { 
        return $this->time; 
    } 
} 