<?php
	session_start();

 	/* Usuário logado! */
	if(isset($_SESSION['login_escolas'])){
		include("../db.php");
		$id_escola = $_SESSION['id_escola'];

		$pre = $_POST['pre'];
		$mirim = $_POST['mirim'];
		$infantil = $_POST['infantil']; 

		$especial_mirim = $_POST['especialMirim'];
		$especial_infantil = $_POST['especialInfantil'];
		$especial_master = $_POST['especialMaster'];

		/* Insere os Pre-Mirim */
		foreach ($pre as $value) {
			$query = "INSERT INTO escola_categoria_modalidade (id_escola, id_categoria,id_modalidade) VALUES ('$id_escola','1','$value');";
			mysql_query($query, $db) or die(mysql_error());
		}

		/* Insere os Mirim */
		foreach ($mirim as $value) {
			$query = "INSERT INTO escola_categoria_modalidade (id_escola, id_categoria,id_modalidade) VALUES ('$id_escola','2','$value');";
			mysql_query($query, $db) or die(mysql_error());
		}

		/* Insere os Infantil */
		foreach ($infantil as $value) {
			$query = "INSERT INTO escola_categoria_modalidade (id_escola, id_categoria,id_modalidade) VALUES ('$id_escola','3','$value');";
			mysql_query($query, $db) or die(mysql_error());
		}


										/* ************* ESPECIAL ***************/
										
		foreach ($especial_mirim as $value) {
			$query = "INSERT INTO escola_categoria_modalidade (id_escola, id_categoria,id_modalidade) VALUES ('$id_escola','4','$value');";
			mysql_query($query, $db) or die(mysql_error());
		}

		/* Insere os Mirim */
		foreach ($especial_infantil as $value) {
			$query = "INSERT INTO escola_categoria_modalidade (id_escola, id_categoria,id_modalidade) VALUES ('$id_escola','5','$value');";
			mysql_query($query, $db) or die(mysql_error());
		}

		/* Insere os Infantil */
		foreach ($especial_master as $value) {
			$query = "INSERT INTO escola_categoria_modalidade (id_escola, id_categoria,id_modalidade) VALUES ('$id_escola','6','$value');";
			mysql_query($query, $db) or die(mysql_error());
		}


		mysql_close($db) or die(mysql_error());
		header("location:painel.php");
	}else{
		header("location:index.php");
	}

?>