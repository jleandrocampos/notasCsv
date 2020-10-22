<?php

$delimitador = ',';
$cerca = '"';

$dados = array(
    array('nome', 'nota'),
    array('Aluno 1', 10),
    array('Aluno 2', 5),
    array('Aluno 3', 6)
);

$f = fopen('notas.csv', 'w');
if ($f) {
    foreach ($dados as $linha) {
        fputcsv($f, $linha, $delimitador, $cerca);
    }
    fclose($f);
}