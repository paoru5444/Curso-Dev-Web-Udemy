<?php
	
	function calcula_desconto($valor_total, $desconto){
		$valor_desconto = $valor_total * ($desconto / 100);
		$valor_com_desconto = $valor_total - $valor_desconto;
		return $valor_com_desconto;
	};
?>
