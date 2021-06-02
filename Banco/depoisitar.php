<?php
function depositar (array $conta, float $valoraDepositar): array
{
    if($valoraDepositar < 0) {
        exibemsg("Não é possível realização de depositos com Valores negativos.");
    }else{
        $conta['saldo'] += $valoraDepositar;
    }
    return $conta;
}