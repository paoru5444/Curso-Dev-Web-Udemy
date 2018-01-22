<?php
	function do_fracasso(){
		$and;
		if(isset($_POST['nome']) && empty($_POST['nome'])){
			$and = " e ";
			echo "Preencha o nome completo".$and;
		}
		if(isset($_POST['cpf']) && empty($_POST['cpf']) ){
			$and = " e ";
			echo "Preencha o CPF".$and;
		}

		if(isset($_POST['cpf']) && !is_numeric($_POST['cpf']) ){
			$and = " e ";
			echo "Apenas numeros no CPF";
		}
	}

	function do_sucesso(){
		if (isset($_POST['cpf']) && is_numeric($_POST['cpf']) && isset($_POST['nome']) && !empty($_POST['nome']) && !empty($_POST['cpf'])){
		echo "Cadastrado com sucesso!";
		}
	}
?>
<div id="mod" align="center"><?php do_sucesso(); ?></div><br>
<div id="mod2" align="center"><?php do_fracasso(); ?></div><br>
<form method="post" action="">
	<label>Nome Completo:
	<input type="text" name="nome">

	<label>CPF:
	<input type="text" name="cpf">

	<input type="submit" value="Cadastrar">
</form>
<style>
	#mod{
		width: 100%;
		margin: 0 ;
		background-color: #90f1a3;
		<?php if (!do_sucesso()): ?>
			display: none;
		<?php endif ?>
	}

	#mod2{
		width: 100%;
		margin: 0 ;
		background-color: #ff7373;
		<?php if (!do_facasso()): ?>
			display: none;
		<?php endif ?>
	}
</style>

