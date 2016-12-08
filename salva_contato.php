<?php

	include('db.php');

	$nome = $_POST['nome'];
	$assunto = $_POST['assunto'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone'];
	$mensagem = $_POST['mensagem'];

	date_default_timezone_set('America/Sao_Paulo'); 
	$data =  date("d/m/y h:i:s");

	$query = "INSERT INTO `contato`(`nome`, `email`, `telefone`, `assunto`, `mensagem`,`data`,`visualizado`) VALUES ('$nome','$email','$telefone', '$assunto', '$mensagem','$data','0');";
	mysql_query($query) or die(mysql_error());

	header("location:index.php");

?>