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
		<?php include("../topo.html"); include("../db.php"); $id_escola = $_SESSION['id_escola']; ?>

			<!-- Page Content -->

		<div class="container containerPrincipal">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<!-- Pré-Mirim -->
					<div class="row" style="padding: 10px;">
						<legend class="text-center">Pré-Mirim</legend>
						<?php
							$query = "SELECT * FROM `escola_categoria_modalidade` INNER JOIN `modalidade` WHERE escola_categoria_modalidade.id_modalidade = modalidade.id AND escola_categoria_modalidade.id_escola = '$id_escola' AND escola_categoria_modalidade.id_categoria = 1";

							$resultado = mysql_query($query) or die(mysql_error());

							//$row = mysql_fetch_assoc($resultado);

							if(mysql_num_rows($resultado) == 0){
								echo "<h5 class='text-center'>Sua escola nao participa de nenhuma modalidade nesta categoria</h5>";
							}else{
								while($row = mysql_fetch_assoc($resultado)){
									$m =  $row['id_modalidade'];

									$queryAlunos = "SELECT * FROM `modalidade_aluno` WHERE id_escola = '$id_escola' AND id_categoria = 1 AND id_modalidade = '$m';";

									$resultadoALunos = mysql_query($queryAlunos) or die(mysql_error());
									//$rowAlunos = mysql_fetch_assoc($resultadoALunos);

									?>
										<div class="panel panel-primary">
										<div class="panel-heading">
									        <h3 class="panel-title text-center"><?php echo $row['nome']; ?> </h3>
									      </div>

									     <div class="panel-body">
											<?php
												while($rowAlunos = mysql_fetch_assoc($resultadoALunos)){
													
													?>
														<div class="row">
															<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
																<?php echo "<p>".$rowAlunos['nome_aluno']."</p>"; ?>
															</div>
															<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
																<?php echo "<p>".$rowAlunos['rg']."</p>"; ?>
															</div>
														</div>

													<?php
												}
											?>
									     </div>
									     </div>


									<?php
								}
							}

							


						?>
					</div>

					<!-- Mirim -->
					<div class="row" style="padding: 10px;">
						<legend class="text-center">Mirim</legend>
						<?php
							$query = "SELECT * FROM `escola_categoria_modalidade` INNER JOIN `modalidade` WHERE escola_categoria_modalidade.id_modalidade = modalidade.id AND escola_categoria_modalidade.id_escola = '$id_escola' AND escola_categoria_modalidade.id_categoria = 2";

							$resultado = mysql_query($query) or die(mysql_error());

							//$row = mysql_fetch_assoc($resultado);

							if(mysql_num_rows($resultado) == 0){
								echo "<h5 class='text-center'>Sua escola nao participa de nenhuma modalidade nesta categoria</h5>";
							}else{
								while($row = mysql_fetch_assoc($resultado)){
									$m =  $row['id_modalidade'];

									$queryAlunos = "SELECT * FROM `modalidade_aluno` WHERE id_escola = '$id_escola' AND id_categoria = 2 AND id_modalidade = '$m';";

									$resultadoALunos = mysql_query($queryAlunos) or die(mysql_error());
									//$rowAlunos = mysql_fetch_assoc($resultadoALunos);

									?>
										<div class="panel panel-info">
										<div class="panel-heading">
									        <h3 class="panel-title text-center"><?php echo $row['nome']; ?> </h3>
									      </div>

									     <div class="panel-body">
											<?php
												while($rowAlunos = mysql_fetch_assoc($resultadoALunos)){
													
													?>
														<div class="row">
															<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
																<?php echo "<p>".$rowAlunos['nome_aluno']."</p>"; ?>
															</div>
															<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
																<?php echo "<p>".$rowAlunos['rg']."</p>"; ?>
															</div>
														</div>

													<?php
												}
											?>
									     </div>
									     </div>


									<?php
								}
							}

							


						?>
					</div>

					<!-- Infantil -->
					<div class="row" style="padding: 10px;">
						<legend class="text-center">Infantil</legend>
						<?php
							$query = "SELECT * FROM `escola_categoria_modalidade` INNER JOIN `modalidade` WHERE escola_categoria_modalidade.id_modalidade = modalidade.id AND escola_categoria_modalidade.id_escola = '$id_escola' AND escola_categoria_modalidade.id_categoria = 3";

							$resultado = mysql_query($query) or die(mysql_error());

							//$row = mysql_fetch_assoc($resultado);

							if(mysql_num_rows($resultado) == 0){
								echo "<h5 class='text-center'>Sua escola nao participa de nenhuma modalidade nesta categoria</h5>";
							}else{
								while($row = mysql_fetch_assoc($resultado)){
									$m =  $row['id_modalidade'];

									$queryAlunos = "SELECT * FROM `modalidade_aluno` WHERE id_escola = '$id_escola' AND id_categoria = 3 AND id_modalidade = '$m';";

									$resultadoALunos = mysql_query($queryAlunos) or die(mysql_error());
									//$rowAlunos = mysql_fetch_assoc($resultadoALunos);

									?>
										<div class="panel panel-success">
										<div class="panel-heading">
									        <h3 class="panel-title text-center"><?php echo $row['nome']; ?> </h3>
									      </div>

									     <div class="panel-body">
											<?php
												while($rowAlunos = mysql_fetch_assoc($resultadoALunos)){
													
													?>
														<div class="row">
															<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
																<?php echo "<p>".$rowAlunos['nome_aluno']."</p>"; ?>
															</div>
															<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
																<?php echo "<p>".$rowAlunos['rg']."</p>"; ?>
															</div>
														</div>

													<?php
												}
											?>
									     </div>
									     </div>


									<?php
								}
							}

							


						?>
					</div>
				</div>
			</div>
			
			
			<a href="painel.php"><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Voltar</button></a>
		
		</div>




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