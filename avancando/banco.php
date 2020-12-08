<?php

// não necessário - não causa fatal error
// include 'utils/funcoes.php';

// necessário - causa fatal error
require 'utils/funcoes.php';

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '123.456.789-11' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ],
    '123.256.789-12' => [
        'titular' => 'Vinicius',
        'saldo' => 100
    ]
];

// if (500 > $contasCorrentes['123.456.789-10']['saldo']) {
//     exibeMensagem("Você não pode sacar este valor");
// } else
//     $contasCorrentes['123.456.789-10']['saldo'] -= 500;


// if (500 > $contasCorrentes['123.456.789-11']['saldo']) {
//     exibeMensagem("Você não pode sacar este valor");
// } else
//     $contasCorrentes['123.456.789-11']['saldo'] -= 500;

$contasCorrentes['123.256.789-12'] = depositar(
    $contasCorrentes['123.256.789-12'],
    900
);

$contasCorrentes['123.456.789-10'] = sacar(
    $contasCorrentes['123.456.789-10'],
    500
);

$contasCorrentes['123.456.789-11'] = sacar(
    $contasCorrentes['123.456.789-11'], 
    200
);

// remove da memória
unset($contasCorrentes['123.456.789-11']);

titularComLetrasMaiusculas($contasCorrentes['123.256.789-12']);

foreach ($contasCorrentes as $cpf => $conta) {
    // exibeMensagem(
    //     "$cpf {$conta['titular']} {$conta['saldo']}"
    // );

    // list('titular' => $titular, 'saldo' => $saldo) = $conta;
    // exibeMensagem(
    //     "$cpf $titular  $saldo"
    // );

    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    exibeMensagem(
        "$cpf $titular  $saldo"
    );
}
