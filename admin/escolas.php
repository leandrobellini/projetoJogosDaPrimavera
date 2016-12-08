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
	    <div class="container" style="margin-top: 30px; min-height:600px; background-color: #fff; max-width: 730px;">

			<div class="row" style="padding: 20px;">
				<!-- Table -->
						<table class="table">
					        <thead>
					          <tr>
					            <th class="col-md-6">Nome</th>
					            <th class="col-md-4">E-mail</th>
					            <th class="col-md-2">Editar</th>
					          </tr>
					        </thead>
					        <tbody>

					        <?php /* Puxando todas escolas cadastradas... */
					        	$query = "SELECT * FROM escolas";
					        	$resultado = mysql_query($query) or die(mysql_error());

					        	while($row = mysql_fetch_assoc($resultado)){
					        ?>


					          <tr>
					            <td><?php echo $row['nome']; ?></td>
					            <td><?php echo $row['email']; ?></td>
					            <td>
					            	 <a href="editar_escola.php?id=<?php echo $row['id']; ?>"><button type="button" class="btn btn-primary btn-sm">Editar</button></a>
					            </td>
					          </tr>

					         <?php
						     	}
						     ?>
					          
					        </tbody>
					      </table>
			</div>

			<a href="index.php"><button type="button" class="btn btn-success botaoVoltao">Voltar</button></a>
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