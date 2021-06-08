<?php

require_once 'Titular.php';
require_once 'Cpf.php';
class Conta
{
    private $titular;
    private float $saldo;
    /*STATIC palavra reservada a atributos da própria classe*/
    private static int $numeroDeContas = 0;

    /*METODO CONSTRUTOR VOID-------------------------------------------*/
    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;

        /*Palavra reservada SELF = Conta */
        self::$numeroDeContas++;
        echo "Criando Conta".PHP_EOL;

    }
    /*METODO DESTRUTOR VOID-------------------------------------------*/
    public function __destruct()
    {
        self::$numeroDeContas--;
        echo "Destruindo conta ".PHP_EOL;
    }

    /*METODO SACAR VOID-------------------------------------------*/
    public function sacar(float $valoraSacar)
    {
        if ($valoraSacar > $this->saldo) {
            echo "Saldo Insuficiente para essa operação";
            return;
        }
        $this->saldo -= $valoraSacar;
    }
    /*METODO DEPOSITAR VOID-------------------------------------------*/
    public function depositar(float $valoraDepositar)
    {
        if ($valoraDepositar < 0) {
            echo "O valor a ser depositado não pode ser negativo.";
            return;
        }
        $this->saldo += $valoraDepositar;
    }
    /*METODO TRANSFERIR VOID------------------------------------------*/
    public function trasferir(float $valoraTransferir, Conta $contaDestino)
    {
        if ($valoraTransferir > $this->saldo) {
            echo "Saldo insuficiente para essa operação";
            return;
        }
        $this->sacar($valoraTransferir);
        $contaDestino->depositar($valoraTransferir);
    }


    /*METODO RECUPERA NUMERO DE CONTAS INT--------------------------------*/
    public static function recuperaNumerosContas():int
    {
        return Conta::$numeroDeContas;
    }
    /*METODO RECUPERA SALDO FLOAT------------------------------------------*/
    public function recuperaSaldo(): float
    {
       return $this->saldo;

    }
}
