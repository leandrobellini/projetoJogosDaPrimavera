<?php
	session_start();

	if(isset($_SESSION['login_admin'])){

		include("../db.php");

		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$telefone = $_POST['telefone'];
		$usuario = $_POST['usuario'];
		$senha = md5($_POST['senha']);
		$representante = $_POST['representante'];
		$cargo = $_POST['cargo'];
		$rg = $_POST['rg'];
		$id = $_POST['id'];

		$query = "UPDATE `escolas` SET `nome`='$nome',`email`='$email',`telefone`='$telefone',`usuario`='$usuario',`senha`='$senha',`representante`='$representante',`cargo`='$cargo',`rg`='$rg' WHERE id = '$id' ";

		mysql_query($query) or die(mysql_error());

		mysql_close($db) or die(mysql_error());;

		header("location:editar_escola.php?id=$id");

	}else{
		header("location:index.php");
	}


?>