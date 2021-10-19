<?php

$data = new DateTime();

echo $data->format('d-m-Y H:i:s') . PHP_EOL;

echo '-----DateInterval-----';
/**
 * P -> representação de Período: vem antes de dia, mês, ano e semana
 * Y anos
 * M meses
 * D dias
 * W semanas
 * T -> representação de Tempo:vem antes de hora, minuto e segundo
 * H horas
 * M minutos
 * S segundos
 */

$intervalo = new DateInterval('PT5M'); //add um período de 5 minutos
$data->add($intervalo); //sub ->subtrai
var_dump($data);

?>