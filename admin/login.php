<?php
	session_start();

	include_once("../db.php");

	$usuarioForm = $_POST['usuario'];
	$senhaForm = md5($_POST['senha']);

	
	
	$usuarioForm = preg_replace('/[^[:alpha:]_]/', '',$usuarioForm); //deixa somente letras
	$senhaForm = preg_replace('/[^[:alnum:]_]/', '',$senhaForm); //deixa somente letras e numeros


	$queryLogin = "SELECT usuario,senha FROM usuarios WHERE usuario = '$usuarioForm' AND senha = '$senhaForm'";

	$resultadoLogin = mysql_query($queryLogin) or die (mysql_error());

	$linhas = mysql_num_rows($resultadoLogin);

	if($linhas == 0){
		header("location:index.php");
	}else{
		$_SESSION['login_admin'] = true;
		header("location:painel.php");
	}

?>