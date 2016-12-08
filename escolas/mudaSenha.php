<?php
	session_start();

 	/* Usuário logado! */
	if(isset($_SESSION['login_escolas'])){
		include("../db.php");

		$id_escola = $_SESSION['id_escola'];
		$senha = md5($_POST['senha']);
		$senha1 = md5($_POST['nova']);


		//verificando senha atual

		$query = "SELECT * FROM escolas WHERE senha = '$senha' AND id = '$id_escola'";

		$resultado = mysql_query($query) or die(mysql_error());

		if(mysql_num_rows($resultado) == 0){
			echo "erro_senha_atual";
			die();
		}

		$query = "UPDATE `escolas` SET `senha`='$senha1' WHERE id = '$id_escola'";
		$resultado = mysql_query($query) or die(mysql_error());

		mysql_close($db) or die(mysql_error());;


		echo "ok";
	}else{
		echo "error";
	}

?>