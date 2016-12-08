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
			include_once("../db.php");
	?>

	<body id="bodyPrincipal">
		<?php include("../topo.html"); ?>

			<!-- Page Content -->
	    <div class="container containerPrincipal" >
			<legend  class="text-center">Escolha uma categoria:</legend>

			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<p> <strong>Pré-Mirim:</strong> Nascidos entre 2004/2005 | <strong>Mirim:</strong> Nascidos entre 2002/2003 | <strong>Infantil:</strong> Nascidos entre 1999/2001</p>
					
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3">
					<div class="well" style="background-color: #F8F8F8;">
							<h4 class="text-center">Pré-Mirim</h4>
							<a href="cadastroAlunosPre.php" class="btn btn-primary center-block glyphicon glyphicon-plus"> Cadastrar</a>
						</div>

						<div class="well" style="background-color: #F8F8F8;">
							<h4 class="text-center">Mirim</h4>
							<a href="cadastroAlunosMirim.php" class="btn btn-primary center-block glyphicon glyphicon-plus"> Cadastrar</a>
						</div>

						<div class="well" style="background-color: #F8F8F8;">
							<h4 class="text-center">Infantil</h4>
							<a href="cadastroAlunosInfantil.php" class="btn btn-primary center-block glyphicon glyphicon-plus"> Cadastrar</a>
						</div>

						<div class="well" style="background-color: #F8F8F8;">
							<h4 class="text-center">Especial</h4>
							<a href="cadastroAlunosEspecial.php" class="btn btn-primary center-block glyphicon glyphicon-plus"> Cadastrar</a>
						</div>
				</div>

				


			</div>




			<a href="painel.php"><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Voltar</button></a>
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