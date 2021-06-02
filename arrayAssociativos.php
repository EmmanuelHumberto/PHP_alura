<?php

$conta1 = [
    'titular'=>'jose',
    'cpf'=>123456748945,
    'saldo'=>1000
];

$conta2 = [
    'titular'=>'Amanda',
    'cpf'=>123456748945,
    'saldo'=>1000
];

$conta3 = [
    'titular'=>'Jasson',
    'cpf'=>123456748945,
    'saldo'=>1000
];

$listacontas = [
    $conta1,
    $conta2,
    $conta3
];

for ($i=0; $i< count($listacontas); $i++){

    echo $listacontas[$i] ['titular'] .PHP_EOL;
    echo $listacontas[$i] ['cpf'] .PHP_EOL;
    echo $listacontas[$i] ['saldo'] .PHP_EOL;
}
