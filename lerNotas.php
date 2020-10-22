<?php

$delimitador = ',';
$cerca = '"';

$f = fopen('notas.csv', 'r');
if ($f) {

    $cabecalho = fgetcsv($f, 0, $delimitador, $cerca);

    while (!feof($f)) {


        $linha = fgetcsv($f, 0, $delimitador, $cerca);
        if (!$linha) {
            continue;
        }


        $registro = array_combine($cabecalho, $linha);


        echo $registro['nome'].PHP_EOL;
        echo $registro['nota'].PHP_EOL;

    }
    fclose($f);
}