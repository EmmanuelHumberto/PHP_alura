<?php

function remove (array &$conta)
{
    unset($conta);
    exibemsg("Conta removida com sucesso.");
}