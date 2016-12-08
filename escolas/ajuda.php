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
	?>

	<body id="bodyPrincipal">
		<?php include("../topo.html"); ?>

			<!-- Page Content -->
	    <div class="container containerPrincipal">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<legend class="text-center"> Central de ajuda - Perguntas frequentes</legend>
					<div class="list-group">
						<a href="#" class="list-group-item " style="margin:5px;">
							<h4 class="list-group-item-heading"><strong>01. Posso cadastrar até quantos alunos em cada modalidade?</strong></h4>
							<p class="list-group-item-text">Cada modalidade tem o seu máximo e mínimo de alunos a serem cadastrados. Essa informação está presente na parte superior da página de cadastro.</p>
						</a>
						<a href="#" class="list-group-item" style="margin:5px;">
							<h4 class="list-group-item-heading"><strong>02. Há uma data limite para alterar informações do sistema?</strong></h4>
							<p class="list-group-item-text">Sim, o limite para qualquer alteração é o dia 03/09/2015 as 14h. Se necessário alguma alteração após essa data entre em contato conosco.</p>
						</a>
						<a href="#" class="list-group-item" style="margin:5px;">
							<h4 class="list-group-item-heading"><strong>03. Posso alterar informações referentes a minha escola ou conta?</strong></h4>
							<p class="list-group-item-text">Sim, você pode alterar essas informações na opção "Conta" do menu superior da área restrita.</p>
						</a>
						<a href="#" class="list-group-item" style="margin:5px;">
							<h4 class="list-group-item-heading"><strong>04. Como excluo um aluno de uma modalidade?</strong></h4>
							<p class="list-group-item-text">Você deve ir na modalidade em que o aluno está cadastrado, remover todas as informações referentes a ele e salvar.</p>
						</a>
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