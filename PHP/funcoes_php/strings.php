<?php
	//strtolower
	//$texto = "Curso Completo de PHP";
	//echo strtolower($texto)."<br>";

	//strtoupper
	//$texto = "Curso Completo de PHP";
	//echo strtoupper($texto)."<br>";

	//ucfirst
	//$texto = "curso completo de PHP";
	//echo ucfirst($texto)."<br>";	

	//strlen
	//$texto = "Curso Completo de PHP";
	//echo strlen($texto)."<br><br>";

	/*$cpf = isset($_POST['CPF']) ? $_POST['CPF']:"";
	$total_str_cpf = strlen($cpf);
	if($total_str_cpf !== 11 AND $cpf != ""){
		echo "CPF Inválido";
	}*/

	//str_replace
	/*$texto = "186.300.788-05";
	$cpf = str_replace(".", "", $texto);
	$cpf = str_replace("-", "", $cpf);
	echo $cpf;*/

	//substr
	$texto = "Entenda porque seu smartphone esquenta tanto, se voce tem um smartphone";
	$noticia = substr($texto, 0, 71);
	echo $noticia."...";

 ?>

 <form method="post" action="">
 	<label>CPF
 		<input type="text" name="CPF">
 		<input type="submit" value="Cadastrar">
 </form>