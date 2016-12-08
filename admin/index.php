<?php
	session_start();

	if(isset($_SESSION['login_admin']))
			header("location:painel.php");

?>

<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>XLIII Jogos da Primavera</title>

		<!-- Bootstrap CSS -->
		<link href="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="../css/estilo.css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>
	<body id="bodyPrincipal">
		<div class="container">
			<div class="row">
				</div>
				<div class="col-md-6 col-md-offset-3">
					<div class="panel panel-primary ">
						  <div class="panel-heading">
								<h3 class="panel-title text-center">Área restrita - Administrador</h3>
						  </div>
						  <div class="panel-body">
								<form action="login.php" method="POST" role="form" >
								
									<div class="form-group">
										<label for="">Usuário</label>
										<input type="text" class="form-control" id="usuario" name="usuario">
									</div>

									<div class="form-group">
										<label for="">Senha</label>
										<input type="password" class="form-control" id="senha" name="senha">
									</div>
								
									
								
									<button type="submit" class="btn btn-primary">Login</button>
									<a class="btn btn-primary botaoVoltao" href="../index.php">Voltar</a>
								</form>
						  </div>
					</div>
				</div>
			</div>
		</div>


		
	</body>
</html>









