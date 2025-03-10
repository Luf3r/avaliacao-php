<?php

$dataAtual = new DateTime();

$diasDaSemana = [
    0 => 'Domingo',
    1 => 'Segunda-feira',
    2 => 'Terça-feira',
    3 => 'Quarta-feira',
    4 => 'Quinta-feira',
    5 => 'Sexta-feira',
    6 => 'Sábado'
];

$mesesDoAno = [
    1 => 'Janeiro',
    2 => 'Fevereiro',
    3 => 'Março',
    4 => 'Abril',
    5 => 'Maio',
    6 => 'Junho',
    7 => 'Julho',
    8 => 'Agosto',
    9 => 'Setembro',
    10 => 'Outubro',
    11 => 'Novembro',
    12 => 'Dezembro'
];

$numeroDiaSemana = (int)$dataAtual->format('w');
$diaDoMes = $dataAtual->format('d');
$numeroMes = (int)$dataAtual->format('n');
$ano = $dataAtual->format('Y');

$dataFormatada = $diasDaSemana[$numeroDiaSemana] . ", " . $diaDoMes . " de " . $mesesDoAno[$numeroMes] . " de " . $ano;

echo $dataFormatada;

?>