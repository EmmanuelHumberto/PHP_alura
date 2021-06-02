<?php

function sacar (array &$conta, float $valoraSacar) : array
{
if ($valoraSacar > $conta['saldo']) {
exibemsg ("Voce não tem Saldo: ");

} else {
$conta['saldo'] -= $valoraSacar;
}
return $conta;
}