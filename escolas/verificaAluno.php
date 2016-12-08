<?php
	//Verifica se aluno jah foi cadastrado em alguma modalidade...  e tmb quantas coletivas o mesmo jah está
	session_start();

 	/* Usuário logado! */
	if(isset($_SESSION['login_escolas'])){
		include("../db.php");

		$id_escola = $_SESSION['id_escola'];
		$rg = $_POST['rg'];
		$categoria = $_POST['categoria'];
		$modalidade = $_POST['modalidade'];

		//verificar se aluno nao está jah cadastrado em outra categoria
		$query = "SELECT * FROM modalidade_aluno WHERE rg = '$rg' AND id_escola = '$id_escola'";
		$resultado = mysql_query($query) or die(mysql_error());

		$aux = mysql_num_rows($resultado); 
		if($aux == 0){
			//Aluno nunca cadastrado
			echo "OK";
			die();
		}

		$row = mysql_fetch_assoc($resultado);
		$categoriaBanco = $row['id_categoria'];

		if($categoriaBanco != $categoria){
			//aluno jah estah em outra categoria
			echo "erro_categoria";
			die();
		}		


		//busco no banco todas modalidades coletivas que o aluno faz parte... excluo apenas a modalidade atual q estou cadastrando o mesmo... vejo todas os outros registros desse aluno em outras categorias/modalidades
		$query = "SELECT * FROM `modalidade_aluno` INNER JOIN `modalidade` WHERE `modalidade_aluno`.`id_modalidade` = `modalidade`.`id` AND `modalidade_aluno`.`rg` = '$rg' AND `modalidade`.`coletivo` = 1 AND `modalidade_aluno`.`id_modalidade` <> '$id_modalidade' AND id_escola = '$id_escola';";

		$resultado = mysql_query($query) or die(mysql_error());

		$modalidadeColetivas = mysql_num_rows($resultado);
		
		if($modalidadeColetivas >= 2){
			echo "erro_modalidade";
			die();
		}

		mysql_close($db) or die(mysql_error());
		echo "OK";

	}else{
		die();
	}

?>