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
			include_once("../db.php");
	?>

	<body id="bodyPrincipal">
		<?php include("../topo.html"); ?>

			<!-- Page Content -->
	    <div class="container" style="margin-top: 30px; padding-bottom: 20px; min-height:600px; background-color: #fff; max-width: 730px;">
			

			<div class="row" style="padding: 20px;">
				<legend class="text-center">Adicionar nova escola:</legend>
				<div class="col-md-8">
					<form action="inserir_escola.php" method="POST" role="form">
				
					<div class="form-group ">
						<label for="">Nome:</label>
						<input type="text" class="form-control" id="nome" name="nome">
					</div>

					<div class="form-group ">
						<label for="">E-mail:</label>
						<input type="text" class="form-control" id="email" name="email">
					</div>

					<div class="form-group ">
						<label for="">Telefone:</label>
						<input type="text" class="form-control" id="telefone"  name="telefone">
					</div>

					<div class="form-group ">
						<label for="">Representante:</label>
						<input type="text" class="form-control" id="representante" name="representante">
					</div>

					<div class="form-group ">
						<label for="">Cargo:</label>
						<input type="text" class="form-control" id="cargo" name="cargo">
					</div>

					<div class="form-group ">
						<label for="">RG:</label>
						<input type="text" class="form-control" id="rg" name="rg">
					</div>

					<div class="form-group ">
						<label for="">Usuario:</label>
						<input type="text" class="form-control" id="usuario" name="usuario">
					</div>

					<div class="form-group ">
						<label for="">Senha:</label>
						<input type="text" class="form-control" id="senha" name="senha">
					</div>

					<button type="submit" class="btn btn-primary">Cadastrar</button>
				</form>

				</div>


			</div>

			<a href="index.php"><button type="button" class="btn btn-success botaoVoltao">Voltar</button></a>
			<br>
		
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