<?php
	function exibir_boas_vindas(){
		echo "Welcome Fulano!";
	};

	function calcular_soma($x=0,$y=0){
		return $x+$y;
	};

	exibir_boas_vindas();echo "<br>";
	echo 'Soma de 3 + 5: '.calcular_soma(9,6);
?>