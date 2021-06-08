<?php

require_once 'Conta.php';
require_once 'Titular.php';


$cc1 = new Conta(new Titular(new CPF('123.456.789-96'),'Emmanuel'));
echo $cc1->depositar(500).PHP_EOL;
echo $cc1->sacar(100).PHP_EOL;
echo $cc1->recuperaSaldo().PHP_EOL;
var_dump($cc1);



