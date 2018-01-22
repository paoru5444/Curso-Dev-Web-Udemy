<?php
	$noticias = array();

	$noticias[1]['titulo'] = 'Notícia 1';
	$noticias[1]['conteudo'] = 'Conteudo da notícia';

	$noticias[2]['titulo'] = 'Notícia 2';
	$noticias[2]['conteudo'] = 'Conteudo da notícia';

	$noticias[3]['titulo'] = 'Notícia 3';
	$noticias[3]['conteudo'] = 'Conteudo da notícia';

	#var_dump($noticias);

	#$idx = 1;
	/*while ($idx <= 3) {
		echo $noticias[$idx]['titulo'];
		echo "<br>";
		echo $noticias[$idx]['conteudo'];
		echo "<br>";
		$idx = $idx + 1;
	};*/

	/*do{	
		echo $noticias[$idx]['titulo'];
		echo "<br>";
		echo $noticias[$idx]['conteudo'];
		echo "<br>";
		$idx = $idx + 1;

	}while($idx < 4);*/

	for($i = 1; $i < 4 ; $i++){
		echo $noticias[$i]['titulo'];
		echo "<br>";
		echo $noticias[$i]['conteudo'];
		echo "<br>";
	}
?>