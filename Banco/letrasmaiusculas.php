<?php
/*Converte todas as letras de uma strig em letas maiusculas*/

function letrasmaiusculas(array &$conta): array
{
       $conta['titular'] = mb_strtoupper($conta['titular']);

       return $conta;

}