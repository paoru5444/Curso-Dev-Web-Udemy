<?php
	//date = Y - m - d   Y = 2015   y=15
	$data = date("d-m-Y H:i:s");

	//strtotime
	$date_inicial = '2015-04-08';
	$data_final = '2015-04-059';
	$time_inicial = strtotime($date_inicial);
	$time_final = strtotime($data_final);
	$diferenca_times = $time_final - $time_inicial;

	$diaSegundos = 24*60*60;
	$diferenca_dias = $diferenca_times / $diaSegundos;
	echo $diferenca_dias;

?>