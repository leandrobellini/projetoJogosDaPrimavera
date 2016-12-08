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
	    <div class="container containerPrincipal">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<legend class="text-center">Fale Conosco</legend>
					<table class="table">
						<thead>
							<tr>
								<th class="col-md-10">Mensagem</th>
								<th class="col-md-2">Visualizado</th>
							</tr>
						</thead>
						<div class="list-group">
						<tbody>

							<?php /* Criando e executando a query */
							$query = "SELECT nome,
										email,
										assunto,
										mensagem,
										data,
										visualizado
										FROM contato 
										ORDER BY 
										visualizado DESC,
										data";
							$resultado = mysql_query($query) or die(mysql_error());

							while($row = mysql_fetch_assoc($resultado)){
							?>

							<tr>
								<td>																		
										<div class="list-group-item">
											<h4 class="list-group-item-heading"><strong><?php echo $row['assunto'];?></strong></h4>
											<font size="2">
												<b>Nome: </b><?php echo $row['nome'];?><br/>
												<b>Email: </b><?php echo $row['email'];?><br/>
												<b>Data: </b><?php echo $row['data'];?><br/>												
											</font>
											<p class="list-group-item-text"><?php echo $row['mensagem'];?></p>
										</div>
									
								</td>

								<td>
									<div class="input-group">
										<span class="input-group-addon">
											<input type="checkbox" aria-label="...">
										</span>
									</div>
								</td>
							</tr>

							<?php
							}
							?>

						</tbody>
						</div>
					</table>
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