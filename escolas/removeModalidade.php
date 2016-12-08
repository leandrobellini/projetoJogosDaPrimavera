<?php
	//Verifica se aluno jah foi cadastrado em alguma modalidade...  e tmb quantas coletivas o mesmo jah está
	session_start();

 	/* Usuário logado! */
	if(isset($_SESSION['login_escolas'])){
		include("../db.php");

		$id_escola = $_SESSION['id_escola'];
		$categoria = $_POST['categoria'];
		$modalidade = $_POST['modalidade'];


		$query ="DELETE FROM `escola_categoria_modalidade` WHERE id_escola = '$id_escola' AND id_categoria = '$categoria' AND id_modalidade = '$modalidade';";

		$resultado = mysql_query($query) or die(mysql_error());

		$query ="DELETE FROM `modalidade_aluno` WHERE id_escola = '$id_escola' AND id_categoria = '$categoria' AND id_modalidade = '$modalidade';";

		$resultado = mysql_query($query) or die(mysql_error());
		
		mysql_close($db) or die(mysql_error());

		echo $resultado;

	}else{
		die();
	}

?>