<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>XLIII Jogos da Primavera - Área restrita Escolas</title>

		<!-- Bootstrap CSS -->
		<link href="../css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="../css/estilo.css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

		
	</head>

	<?php /* Usuário nao logado! */
		if(!isset($_SESSION['login_escolas'])):
			header("location:index.php");

		 /*Usuário logado! */
		else:
	?>

	<body id="bodyPrincipal">
		<?php 
			/* Verificando se é o primeiro acesso da escola... */
			include("../db.php");

			$id_escola = $_SESSION['id_escola'];
			$query = "SELECT * FROM escola_categoria WHERE id_escola = '$id_escola'";

			$resultado = mysql_query($query, $db);

			if(mysql_num_rows($resultado) == 0){
				/* Primeiro acesso da escola... */
				header("location:painel_primeiro_acesso.php");
			}

			/* Escola jah fez cadastro de categorias... */

			include("../topo.html"); 

			mysql_close($db) or die(mysql_error());

		?>

			<!-- Page Content -->
	    <div class="container" style="margin-top: 30px; min-height:600px; background-color: #fff; max-width: 730px;">
			<div class="row">

				kkkk


			</div>
		</div>



	    <?php
			include("footer.php");
		?>
        


		<!-- jQuery -->
		<script src="../js/jquery-2.1.4.min.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="../js/bootstrap.min.js"></script>
	</body>

	<?php 
		endif;
	?>
</html>