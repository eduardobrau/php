<?php
class Conta
{
    public $agencia;
    public $codigo;
    public $dataDeCriacao;
    public $titular;
    public $senha;
    public $saldo;
    public $cancelada;

    /* método construtor
     * inicializa propriedades
     */
    function __construct($agencia, $codigo, $dataDeCriacao, $titular, $senha, $saldo)
    {
        $this->agencia = $agencia;
        $this->codigo = $codigo;
        $this->dataDeCriacao = $dataDeCriacao;
        $this->titular = $titular;
        $this->senha = $senha;
        // chamada a outro método da classe
        $this->Depositar($saldo);
        $this->cancelada = FALSE;
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
    function __destruct()
    {
        echo "<br/> Objeto Conta {$this->codigo} de {$this->titular} finalizada...<br>\n";
    }

    /* método Retirar
    * diminui o Saldo em $quantia
    */
    function retirar($quantia)
    {
        if ($quantia > 0){
             $this->saldo -= $quantia;
         }
    }

    /* método Depositar
    * aumenta o Saldo em $quantia
    */
    function depositar($quantia)
    {
         if ($quantia > 0)
         {
             $this->saldo += $quantia;
         }
    }

    /* método ObterSaldo
    * retorna o Saldo Atual
    */
    function obterSaldo()
    {
         return $this->saldo;
    }
}

