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
		<link rel="stylesheet" type="text/css" href="../css/bootstrap-select.min.css">


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
			include_once("../db.php");
	?>

	<body id="bodyPrincipal">
		<?php include("../topo.html"); ?>

			<!-- Page Content -->
	    <div class="container" style="margin-top: 30px; min-height:600px; background-color: #fff; max-width: 730px;">

			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h3 class="text-center">...</h3>
				</div>
			</div>
		</div>




		<?php
			include("footer.php");
		?>
	    

		<!-- jQuery -->
		<script src="../js/jquery-2.1.4.min.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="../js/bootstrap.min.js"></script>

		<script src="../js/bootstrap-select.min.js"></script>

	</body>

	<?php 
		endif;
	?>
</html>