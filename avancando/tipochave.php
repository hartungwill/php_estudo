<?php

// https://www.php.net/manual/pt_BR/language.types.array.php
// https://www.php.net/manual/pt_BR/types.comparisons.php

$array = [
    1 => 'a',
    '1' => 'b',
    1.5 => 'c',
    true => 'd',
    'qualquer_coisa' => 'Teste'
];

foreach ($array as $item) {
    echo $item .    PHP_EOL;
}