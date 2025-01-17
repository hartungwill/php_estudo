<?php


function exibeMensagem($mensagem){
    echo $mensagem . PHP_EOL;
}

function sacar(array $conta, float $valorASacar): array
{
    if ($valorASacar > $conta['saldo']) {
        exibeMensagem("Você não pode sacar este valor");
    } else {
        $conta['saldo'] -= $valorASacar;
    }

    return $conta;
}

function depositar(array $conta, float $valorADepositar): array 
{
    if ($valorADepositar > 0) {
        $conta['saldo'] += $valorADepositar;
    } else {
        exibeMensagem("Depósitos precisam ser positivos");
    }

    return $conta;
}

function titularComLetrasMaiusculas(array &$conta) 
{
    echo 'titularComLetrasMaiusculas()' . PHP_EOL;
    echo $conta['titular'] . PHP_EOL;

    $conta['titular'] = mb_strtoupper($conta['titular']);
}