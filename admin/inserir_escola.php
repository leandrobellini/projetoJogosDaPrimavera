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

		$query = "INSERT INTO escolas ( `nome`, `email`, `telefone`, `usuario`, `senha`, `representante`, `cargo`, `rg`) 
		VALUES('$nome','$email','$telefone','$usuario','$senha','$representante','$cargo','$rg');";

		mysql_query($query) or die(mysql_error());

		mysql_close($db) or die(mysql_error());;

		header("location:escolas.php");

	}else{
		header("location:index.php");
	}


?>