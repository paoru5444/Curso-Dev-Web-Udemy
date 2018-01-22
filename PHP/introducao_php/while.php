<?php
	$num = 0;
	while($num < 10){
		
		$num = $num + 1;
		
		if($num == 5 OR $num ==7){
			continue;
		};

		echo '<br>';
		echo "Olá visitante numero ".$num;
	};
?>