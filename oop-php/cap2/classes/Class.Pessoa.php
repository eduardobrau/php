<?php

/*
 * Nesta classe não foi definido um método construtor
 * da classe o que vai acarretar em iniciar as nossas
 * propriedades manualmente no ato em que criamos o objeto
 * Pessoa
 */

class Pessoa{
    /*
     * Definir as propriedades para a classe Pessoa de modo
     * generico ou seja de modo em que eu encontre essas mesmas
     * propriedades declaradas em todas as pessoas existentes.
     *
     * Definir no escopo global ou seja dentro da classe
     * mas fora dos métodos, dessa forma os métodos declarado
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
     * É somada a quantia atribuida pelo método crescer na
     * criação do objeto e somado a altura do objeto pessoa
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

//Criando nosso objeto $eduardo
$eduardo = new Pessoa;

/*
 * Atribuindo um valor a sua propriedade publica
 * altura caso não fosse publica não seria possivel
 * acessar a propriedade de fora da classe e precisaria 
 * criar um metodo publico para manipular essa propriedade
 */
$eduardo->altura = 1.86;

$eduardo->escolaridade ='Ensino M&eacute;dio';
$eduardo->idade = 34;
$eduardo->nascimento = "19/08/1979";
$eduardo->nome = 'Eduardo Esteves';
$eduardo->rg = '21.122.122.111-8';
$eduardo->salario = 1100;

echo "Manipulando o objeto " .$eduardo->nome. "<br/>"
."Escolaridade: " .$eduardo->escolaridade.
"<br / > Forma&ccedil;&atilde;o:"
.$eduardo->formacao('Analista de Sistema')."
<br /> Forma&ccedil;o: "
.$eduardo->escolaridade."\n";
echo "<br /> Idade: "
.$eduardo->idade.
"<br /> Envelhecendo 5 anos: "
.$eduardo->envelhecer(5). $eduardo->idade;


/*
* Note que dentro de uma classe para referenciar
* um de seus membros(propriedades), basta utilizar
* da expressão $this que nada mais é que uma referencia
* do objeto da classe que a esta manipulando suas
* propriedades e metodos.
* Na linha 64 atribuimos um valor a propriedade 
* escolaridade e mostramos esse valor na linha 71
* imprimindo no navegador, já na linha 72 executamos o
* método formacao passando o seu parâmetro. Esse método
* atribui o valor passado a propriedade escolaridade
* em que neste momento já está com o valor passado
* anteriormente na memoria fazendo uma reescrita
* de seu valor.
*/

