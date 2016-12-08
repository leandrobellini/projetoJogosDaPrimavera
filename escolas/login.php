<?php
	session_start();

	include_once("../db.php");

	$usuarioForm = $_POST['usuario'];
	$senhaForm = md5($_POST['senha']);

	$usuarioForm = preg_replace('/[^[:alnum:]_]/', '',$usuarioForm); //deixa somente letras e numeros	
	$senhaForm = preg_replace('/[^[:alnum:]_]/', '',$senhaForm); //deixa somente letras e numeros


	$queryLogin = "SELECT * FROM escolas WHERE usuario = '$usuarioForm' AND senha = '$senhaForm'";

	$resultadoLogin = mysql_query($queryLogin) or die (mysql_error());

	$linhas = mysql_num_rows($resultadoLogin);

	if($linhas == 0){
		mysql_close($db) or die(mysql_error());
		header("location:index.php");
	}else{
		$_SESSION['login_escolas'] = true;
		$row = mysql_fetch_assoc($resultadoLogin);
		$_SESSION['id_escola'] = $row['id'];
		$_SESSION['nome_escola'] = $row['nome']; 
		mysql_close($db) or die(mysql_error());
		header("location:painel.php");
	}

?>