<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>XLIII Jogos da Primavera - Área restrita Administradores</title>

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
		if(!isset($_SESSION['login_admin'])):
			header("location:index.php");

		 /*Usuário logado! */
		else:
	?>

	<body id="bodyPrincipal">
		<?php include("../topo.html"); ?>

			<!-- Page Content -->
	    <div class="container" style="margin-top: 30px; min-height:400px; background-color: #fff; max-width: 730px;">
			<div class="row">

				<h3 class="text-center">Administrador, o que você deseja fazer?</h3>

				<div style="margin-top:30px;">
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<div class="well" style="margin-bottom: 30px; background-color: #F8F8F8;">
							<h4 class="text-center">Adicionar Escolas:</h4>
							<a href="nova_escola.php" class="btn btn-primary center-block">Adicionar</a>
						</div>

					</div>

					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<div class="well" style="margin-bottom: 30px; background-color: #F8F8F8;">
							<h4 class="text-center">Gerenciar Escolas:</h4>
							<a href="escolas.php" class="btn btn-primary center-block">Gerenciar</a>
						</div>

					</div>
					
				</div>

				<div style="margin-top:30px;">
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<div class="well" style="margin-bottom: 30px; background-color: #F8F8F8;">
							<h4 class="text-center">Escolas x Modalidades:</h4>
							<a href="escolas_modalidades.php" class="btn btn-primary center-block">Visualizar</a>
						</div>

					</div>

					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<div class="well" style="margin-bottom: 30px; background-color: #F8F8F8;">
							<h4 class="text-center">Escolas X Alunos</h4>
							<a href="escolasXalunos.php" class="btn btn-primary center-block">Visualizar</a>
						</div>

					</div>
					
				</div>


			</div>
		</div>
        


		<!-- jQuery -->
		<script src="../js/jquery-2.1.4.min.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="../js/bootstrap.min.js"></script>
	</body>

	<?php 
		endif;
	?>
</html>