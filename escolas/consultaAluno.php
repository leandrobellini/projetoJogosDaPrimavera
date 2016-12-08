<?php //Retorna dados dos alunos cadastrados na modalidade X //Retorna Nome e RG
		//Usado para exibir os alunos já cadastrados nas modalidades
	session_start();
	if(!isset($_SESSION['login_escolas'])){
		die(); //sai...
	}


	include("../db.php");

	$id_categoria = $_GET['id_categoria'];
	$id_modalidade = $_GET['id_modalidade']; 
	$id_escola = $_SESSION['id_escola'];


	$query = "SELECT nome_aluno, rg,nascimento FROM modalidade_aluno WHERE id_categoria = '$id_categoria' AND id_modalidade = '$id_modalidade' AND id_escola = '$id_escola'";
	$resultado = mysql_query($query) or die(mysql_error());

	$rows = array();

	while($row = mysql_fetch_assoc($resultado)){ 
		$rows[] = $row;
	}

	echo json_encode($rows);

	mysql_close($db) or die(mysql_error());


?>