<?php
	session_start();
	if(isset($_SESSION['login_escolas'])){
		/* Usuário escola logado */
		unset($_SESSION['login_escolas']);
	}elseif (isset($_SESSION['login_admin'])) {
		/* admin logado */
		unset($_SESSION['login_admin']);
	}

	header("location:index.php");
		
?>