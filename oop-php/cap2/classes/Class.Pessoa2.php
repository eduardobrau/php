<?php

class Pessoa2{
    /*
     * Definir as propriedades para a classe Pessoa de modo
     * generico ou seja de modo em que eu encontre essas mesmas
     * propriedades declaradas em todas as pessoas existentes.
     *
     * Definir no escopo global ou seja dentro da classe
     * mas fora dos métodos dessa forma os métodos declarado
     * dentro da classe poderão manipular essas propriedades.
     *
     */
    public $rg;
    public $nome;
    public $altura;
    public $idade;
    public $nascimento;
    public $escolaridade;
    public $salario;
    
    /*
     * Iniciando as propriedades com as variaveis passada
     * como parâmetros ao metodo construtor da classe
     */
    
    function __construct($rg, $apelido, $altura, $idade, $nascimento, $escolaridade, $salario) {
        $this->rg = $rg;
        $this->nome = $apelido;
        $this->altura = $altura;
        $this->idade = $idade;
        $this->nascimento = $nascimento;
        $this->escolaridade = $escolaridade;
        $this->salario = $salario;
    }
    /*
     * Um método destrutor ou finalizador é um
     * metodo mágico que é executado automaticamente
     * quando o objeto manipulado é desalocado da
     * memória, quando atribuimos o valor NULL, quando
     * destruimos ele manualmente com o metodo unset
     * e em última instância quando o programa é finalizado.
     * Serve para finalizar conexões do banco de dados ou
     * exlclui arquivos temporário criado durante o ciclo
     * de vida do objeto e entre outras circustância.
    */
    function __destruct() {
        echo "<br /> Destruido o objeto {$this->nome} ";
    }
    /*
     * É somada a quantia atribuida pelo método crescer
     * na criação do objeto e somado a altura do objeto pessoa
     */
    public function crescer($centimetro){
        if($this->altura > 0){
            $this->altura +=$centimetro;
        }
    }
    /*
     * Recebe a escolaridade informada pelo usuário
    */
    public function formacao($escolaridade){
        $this->escolaridade = $escolaridade;
        //return $this->escolaridade;
        
    }
    
    public function envelhecer($anos){
        $this->idade += $anos;
                
    }
    
    
}
