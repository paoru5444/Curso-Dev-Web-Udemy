<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<title>Mensagens divertidas</title>
	</head>

	<body>
		<?php 
			#int
				$valor_inteiro = 1;
				echo $valor_inteiro;
				echo "<br>";
			#float
				$valor_fracionado = 10.7;
				echo $valor_fracionado;
				echo "<br>";
			#boolean	
				echo $estado = true; //false
				echo "<br>";
			#strings
				$valor_inteiro = 8;
				$texto = "Curso php - $valor_inteiro";
				echo $texto;
				echo "<br>";
			#arrays1
				$arrays = ["Array Banana e ", $texto];
				echo $arrays[0].$arrays[1];

			#Arrays2
				/*$mensagens_divertidas[1]= 'Estou fazendo as contas aqui e esse mes naot me jeito..';
				$mensagens_divertidas[2]= 'As 3 coisas que as mulheres mais gostam de ouvir...';
				$mensagens_divertidas[3]= 'Cara feia para mim é espelho';
				$mensagens_divertidas[4]= 'Estou tão carente que o churrasqueiro fala "Coração?" e eu...';
				$mensagens_divertidas[5]= 'O casamento é um relacionamento a dois onde um...';

				var_dump($mensagens_divertidas);
				echo "<br>";
				echo "<br>";
				print_r($mensagens_divertidas);
				echo "<br>";
				echo "<br>";
				echo $mensagens_divertidas[3];
				echo "<br>";
				print $mensagens_divertidas[4];*/

				/*$mensagens_divertidas = array(1 =>'Estou fazendo as contas aqui 	e esse mes naot me jeito..', 2=>  'As 3 coisas que as mulheres mais gostam de ouvir...', 3=> 'Cara feia para mim é espelho', 4 => 'Estou tão carente que o churrasqueiro fala "Coração?" e eu...', 5 => 'O casamento é um relacionamento a dois onde um...');*/

				$teste = 8;
				$mensagens_divertidas = array(1 =>true, 2 => $teste, 3 => 7.5, 4 => 'Estou tão carente que o churrasqueiro fala "Coração?" e eu...', 5 => 'O casamento é um relacionamento a dois onde um...');

				var_dump($mensagens_divertidas);
		?><br>
		
	</body>
</html>