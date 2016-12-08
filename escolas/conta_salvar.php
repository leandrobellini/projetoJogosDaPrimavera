<?php
	session_start();

 	/* Usuário logado! */
	if(isset($_SESSION['login_escolas'])){
		include("../db.php");

		$id_escola = $_SESSION['id_escola'];
		$nome = $_POST['nome'];
		$representante = $_POST['representante'];
		$cargo = $_POST['cargo'];
		$rg = $_POST['rg'];
		$email = $_POST['email'];
		$telefone = $_POST['tel'];


		$query = "UPDATE `escolas` SET `nome`='$nome',`email`='$email',`telefone`='$telefone',`representante`='$representante',`cargo`='$cargo',`rg`='$rg' WHERE id = '$id_escola'";

		mysql_query($query) or die(mysql_error());

		mysql_close($db) or die(mysql_error());;

		$_SESSION['nome_escola'] = $nome;

		echo "ok";
	}else{
		echo "error";
	}

?>