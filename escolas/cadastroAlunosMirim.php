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
	    <div class="container containerPrincipal">
			<div class="alert alert-success text-center" role="alert">
		      <strong>Categoria Mirim: </strong>Escolha uma modalidade para cadastrar alunos:
		    </div>
			<div class="row" style="padding: 20px;">
				<!-- Table -->
						<table class="table">
					        <thead>
					          <tr>
					            <th class="col-md-10">Modalidade</th>
					            <th class="col-md-2">Ações</th>
					          </tr>
					        </thead>
					        <tbody>

					        <?php /* Puxando todas modalidades cadastradas para esta escola... */
					        	$id_escola = $_SESSION['id_escola'];
					        	$query = "SELECT * FROM escola_categoria_modalidade INNER JOIN modalidade ON escola_categoria_modalidade.id_modalidade = modalidade.id WHERE id_escola = '$id_escola' AND id_categoria = '2';";
					        	$resultado = mysql_query($query) or die(mysql_error());

					        	while($row = mysql_fetch_assoc($resultado)){
					        ?>


					          <tr>
					            <td><?php echo $row['nome']; ?></td>
					            <td>
									<div class="btn-group" role="group" aria-label="...">
									  <a class="btn btn-primary btn-sm" href="insere_alunos_modalidades.php?id_categoria=2&id_modalidade=<?php echo $row['id_modalidade']; ?>">Cadastrar Alunos</a>
									</div>
					            </td>
					          </tr>

					         <?php
						     	}

						     	mysql_close($db) or die(mysql_error());
						     ?>
					          
					        </tbody>
					      </table>
			</div>

			<a href="cadastroAlunosModalidades.php"><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Voltar</button></a>	
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