<?php

function sacar ($conta, $valoraSacar)
{
    if ($valoraSacar > $conta['saldo']) {
        exibemsg ("Voce não tem Saldo");
    } else {
        $conta['saldo'] -= $valoraSacar;
    }
return $conta;
}
function exibemsg ($msg){
    echo $msg .PHP_EOL;
}

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
        'saldo'=>15000,
    ]
];
$contas_correntes['123.456.748-55'] = sacar ($contas_correntes['123.456.748-55'], 2500);

foreach ($contas_correntes as $a => $conta) {
    exibemsg ($a . "  R$ " . $conta['saldo'] ." ".  $conta['titular']);
}
