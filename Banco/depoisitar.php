<?php
function depositar (array &$conta, float $valoraDepositar)
{
    if($valoraDepositar < 0) {
        exibemsg("Não é possível realização de depositos com Valores negativos.");
        return ;
    }
    $conta['saldo'] += $valoraDepositar;
}