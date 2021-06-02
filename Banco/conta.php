<?php

require_once  'depoisitar.php';
require_once  'sacar.php';
require_once  'exibemsg.php';
require_once  'letrasmaiusculas.php';
require_once  'remove.php';


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

sacar ($contas_correntes['123.456.748-55'], 2500);
depositar ($contas_correntes['123.456.748-45'], -2500);
letrasmaiusculas ($contas_correntes['123.456.748-55']);
remove($contas_correntes['123.456.748-45']);


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Contas Correntes</h1>

    <dl>
        <?php foreach($contas_correntes as $cpf => $conta) { ?>
            <dt>
                <h3><?= $conta['titular']; ?> - <?= $cpf; ?></h3>
            </dt>
            <dd>Saldo: <?= $conta['saldo']; ?></dd>
        <?php } ?>
    </dl>
</body>
</html>
