<?php

if (! isset($argv[1])) {
    die('Por favor insira um parâmetro');
}

$input = $argv[1];
$pares = array_map(fn ($par) => strlen($par) < 2 ? "$par$" : $par, str_split($input, 2));

echo str_replace(',', ', ',
    str_replace('"', "'", json_encode($pares))
);