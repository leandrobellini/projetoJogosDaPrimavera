<?php
	$servidor = "localhost";
	$nomeBanco = "jogos_primavera";
	$usuarioBanco = "root";
	$senhaBanco = "aloja*";  //$senhaBanco = "aloja*";

	$db = mysql_connect($servidor, $usuarioBanco, $senhaBanco) or die(mysql_error());
	mysql_query("SET NAMES 'utf8'");
	mysql_query("SET character_set_connection=utf8");
	mysql_query("SET character_set_client=utf8");
	mysql_query("SET character_set_results=utf8");
	
	mysql_select_db($nomeBanco, $db);
?>