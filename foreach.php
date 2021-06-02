<?php

$listacontas = [
    1=>[
        'titular'=>'jose',
        'cpf'=>123456748945,
        'saldo'=>1000,
    ],
    2=> [
        'titular'=>'Amanda',
        'cpf'=>123456748945,
        'saldo'=>1000,
    ],
    3=>[
        'titular'=>'Jasson',
        'cpf'=>123456748945,
        'saldo'=>1000
    ]
];
$listacontas[] = [
        'titular'=>'Cruela',
        'cpf'=>12346748945,
        'saldo'=>1044];

foreach ($listacontas as $cpf => $conta) {
    echo $cpf ."  R$ ". $conta['saldo'] .PHP_EOL;
}