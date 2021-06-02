<?php

require_once  'depoisitar.php';
require_once  'sacar.php';
require_once  'exibemsg.php';

$contas_correntes = [
    '123.456.748-45'=>[
        'titular'=>'jose',
        'cpf'=>'123.456.748-45',
        'saldo'=>1000,
    ],
    '123.456.748-94'=> [
        'titular'=>'Amanda',
        'cpf'=>'123.456.748-94',
        'saldo'=>1000,
    ],
    '123.456.748-55'=>[
        'titular'=>'Jasson',
        'cpf'=>'123.456.748-55',
        'saldo'=>2000,
    ]
];

$contas_correntes['123.456.748-55'] = sacar ($contas_correntes['123.456.748-55'], 2500);
$contas_correntes['123.456.748-45'] = depositar ($contas_correntes['123.456.748-45'], -2500);

foreach ($contas_correntes as $a => $conta) {
    exibemsg (
        "Conta: ". "$a \n".
        "Saldo: R$"."{$conta['saldo']} \n".
        "Titular:"."{$conta['titular']}".PHP_EOL
    );
}
