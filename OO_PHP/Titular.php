<?php
require_once 'Cpf.php';

class Titular
{
   private CPF $numero;
   private string $nome;

    /*METODO CONSTRUTOR VOID-------------------------------------------*/
   public function __construct(CPF $numero, string $nome)
   {
       $this->numero = $numero;
       $this->validaNome($nome);
       $this->nome = $nome;
       echo "Contruindo Titular".PHP_EOL;
   }
    /*METODO DESTRUTOR VOID-------------------------------------------*/
   public function __destruct()
   {
       echo "Destruindo Titular".PHP_EOL;
   }

    /*METODO RECUPERA NOME STRING------------------------------------------*/
    public function recuperaNome(): string
    {
        return $this->nome;
    }
    /*METODO VALIDA NOME STRING------------------------------------*/
    private function validaNome(string $nome)
    {
        if(strlen($nome) < 5){
            echo "Nome precisa ter pelo menos 5 caracteres.";
            exit();
        }
    }

}