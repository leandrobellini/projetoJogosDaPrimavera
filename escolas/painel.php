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
		<?php 
			/* Verificando se é o primeiro acesso da escola... */
			include("../db.php");

			$id_escola = $_SESSION['id_escola'];
			$query = "SELECT * FROM escola_categoria_modalidade WHERE id_escola = '$id_escola'";
			
			$resultado = mysql_query($query, $db);

			if(mysql_num_rows($resultado) == 0){
				/* Primeiro acesso da escola... */
				mysql_close($db) or die(mysql_error());
				header("location:painel_primeiro_acesso.php");
			}

			/* Escola jah fez cadastro de categorias... */

			include("../topo.html"); 

		?>

			<!-- Page Content -->
	    <div class="container containerPrincipal">
			<div class="row">
				<div class="legenda">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<h3 class="text-center"><strong><?php echo $_SESSION['nome_escola'];  ?> </strong></h3>
					</div>
				</div>
			</div>


			<div class="row " style="margin-top:30px;">
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<div class="well" style="margin-bottom: 30px; background-color: #F8F8F8;">
						<h4 class="text-center">Cadastrar alunos nas modalidades:</h4>
						<a id="botaoCadastroAlunosModalidades" class="btn btn-primary center-block glyphicon glyphicon-plus"> Cadastrar</a>
						
					</div>
				</div>
				
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<div class="well" style="margin-bottom: 30px; background-color: #F8F8F8;">
						<h4 class="text-center">Visualizar Modalidades:</h4>
						<a href="gerenciaModalidades.php" class="btn btn-primary center-block glyphicon glyphicon-search"> Modalidades</a>
					</div>
				</div>
			</div>

			<div class="row " style="margin-top:30px;">
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<div class="well" style="margin-bottom: 30px; background-color: #F8F8F8;">
						<h4 class="text-center">Escolas x Modalidades:</h4>
						<a href="escolas_modalidades.php"  class="btn btn-primary center-block glyphicon glyphicon-search"> Visualizar</a>
						
					</div>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<div class="well" style="margin-bottom: 30px; background-color: #F8F8F8;">
						<h4 class="text-center">Alunos x Modalidades:</h4>
						<a href="alunosEmodalidades.php" class="btn btn-primary center-block glyphicon glyphicon-search"> Visualizar</a>
					</div>
				</div>
			</div>


		</div>



	    <?php
	   		 mysql_close($db) or die(mysql_error());
			include("footer.php");
		?>

		<div class="modal fade" id="modal-id">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title text-center"><strong>Atenção!</strong></h4>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								O período de cadastro de alunos nas modalidades já foi finalizado.
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
					</div>
				</div>
			</div>
		</div>
        
        <div class="modal fade" id="modal-id2">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title text-center"><strong>Atenção!</strong></h4>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								Os relatórios ainda não estão em operação, serão ativados próximo ao início dos jogos.
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
					</div>
				</div>
			</div>
		</div>


		<!-- jQuery -->
		<script src="../js/jquery-2.1.4.min.js"></script>

		<!-- Bootstrap JavaScript -->
		<script src="../js/bootstrap.min.js"></script>

		<script type="text/javascript">
			$(document).ready(function(){

				$("#botaoCadastroAlunosModalidades").click(function(){
					$("#modal-id").modal("show");	
				});

				$("#botaoRelatorios").click(function(){
					$("#modal-id2").modal("show");	
				});
			});
		</script>
	</body>

	<?php 
		endif;
	?>
</html>