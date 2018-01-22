<?php 
	/*$valor = 'null';
	if (isset($valor) ){
		echo "variavel iniciada";
	}else {
		echo "variável nao iniciada";
	}*/

	//true -> '', 0, "0", false, null, array()
	/*$valor = array(1 => "Valor");
	if(empty($valor)){
		echo "Variável vazia";
	}else{
		echo "Variavel ok";
	}*/

	//is_numeric()
	$valor = "50";
	if (is_numeric($valor)) {
		echo "O valor é um número";
	}else {
		echo "O valor não é um numero!";
	}
?>