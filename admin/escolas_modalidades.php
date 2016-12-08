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
		if(!isset($_SESSION['login_admin'])):
			header("location:index.php");

		 /*Usuário logado! */
		else:
			include_once("../db.php");
	?>

	<body id="bodyPrincipal">
		<?php include("../topo.html"); ?>

			<!-- Page Content -->
	    <div class="container containerPrincipal">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<legend class="text-center">Escolas x Modalidades</legend>
				</div>

			</div>


			 						<!-- **** Categoria Pré-Mirim (01) ********* -->
			
			<?php

				for($i = 1; $i <= 24; $i++){


					$query = "SELECT escolas.nome AS escolaNome FROM `escola_categoria_modalidade` INNER JOIN escolas WHERE escola_categoria_modalidade.id_escola = escolas.id AND escola_categoria_modalidade.id_categoria = 1 AND escola_categoria_modalidade.id_modalidade='$i'";

					$queryModalidade = "SELECT nome FROM modalidade WHERE id = '$i'";

					$resultadoModalidade = mysql_query($queryModalidade) or die(mysql_error());
					$rowModalidade =  mysql_fetch_assoc($resultadoModalidade);


					$resultado = mysql_query($query) or die(mysql_error());


			?>
					<div class="row" >
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="panel panel-info">
								<div class="panel-heading">
							        <h3 class="panel-title text-center">Pré-Mirim: <?php echo $rowModalidade['nome']; ?> </h3>
							      </div>

							     <div class="panel-body">
										  
										<?php
											while($row = mysql_fetch_assoc($resultado)){


											?>
											<p><?php echo $row['escolaNome']; ?></p>
											

										<?php
											}
										?>

							      </div>

								
							</div>	
						</div>
					</div>


			<?php
				
				} //fim do for para cada modalidadade dentro da categoria 1


			?>

			 						<!-- **** Categoria Mirim (2) ********* -->
			
			<?php

				for($i = 1; $i <= 24; $i++){


					$query = "SELECT escolas.nome AS escolaNome FROM `escola_categoria_modalidade` INNER JOIN escolas WHERE escola_categoria_modalidade.id_escola = escolas.id AND escola_categoria_modalidade.id_categoria = 2 AND escola_categoria_modalidade.id_modalidade='$i'";

					$queryModalidade = "SELECT nome FROM modalidade WHERE id = '$i'";

					$resultadoModalidade = mysql_query($queryModalidade) or die(mysql_error());
					$rowModalidade =  mysql_fetch_assoc($resultadoModalidade);


					$resultado = mysql_query($query) or die(mysql_error());


			?>


					<div class="row" >
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="panel panel-primary">
								<div class="panel-heading">
							        <h3 class="panel-title text-center">Mirim: <?php echo $rowModalidade['nome']; ?> </h3>
							      </div>

							     <div class="panel-body">
										  
										<?php
											while($row = mysql_fetch_assoc($resultado)){


											?>
											<p><?php echo $row['escolaNome']; ?></p>
											

										<?php
											}
										?>

							      </div>

								
							</div>	
						</div>
					</div>

					


			<?php
				
				} //fim do for para cada modalidadade dentro da categoria 2


			?>

			<!-- **** Categoria Infantil (3) ********* -->
			
			<?php

				for($i = 1; $i <= 24; $i++){


					$query = "SELECT escolas.nome AS escolaNome FROM `escola_categoria_modalidade` INNER JOIN escolas WHERE escola_categoria_modalidade.id_escola = escolas.id AND escola_categoria_modalidade.id_categoria = 3 AND escola_categoria_modalidade.id_modalidade='$i'";

					$queryModalidade = "SELECT nome FROM modalidade WHERE id = '$i'";

					$resultadoModalidade = mysql_query($queryModalidade) or die(mysql_error());
					$rowModalidade =  mysql_fetch_assoc($resultadoModalidade);


					$resultado = mysql_query($query) or die(mysql_error());


			?>
					<div class="row" >
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="panel panel-success">
								<div class="panel-heading">
							        <h3 class="panel-title text-center">Infantil: <?php echo $rowModalidade['nome']; ?> </h3>
							      </div>

							     <div class="panel-body">
										  
										<?php
											while($row = mysql_fetch_assoc($resultado)){


											?>
											<p><?php echo $row['escolaNome']; ?></p>
											

										<?php
											}
										?>

							      </div>

								
							</div>	
						</div>
					</div>


			<?php
				
				} //fim do for para cada modalidadade dentro da categoria 2


			?>



			
			

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