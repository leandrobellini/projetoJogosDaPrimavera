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
		<?php include("../topo.html"); ?>

			<!-- Page Content -->
	    <div class="container containerPrincipal">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<legend class="text-center">Modalidades Cadastradas</legend>
					<div class="alert alert-info" role="alert">
				      <strong>Finalizado período para editar modalidades!</strong> O período para adicionar ou remover modalidades já foi encerrado. Para mais informações entre em contato.
				    </div>

					
				</div>

			</div>

			<div class="row" style="padding: 20px;">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<table class="table" style="background-color: #F7F7F7">
			        <thead>
			          <tr>
			            <th class="col-xs-5 col-sm-5 col-md-5 col-lg-5">Pré-Mirim</th>
			            <th class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Coletiva</th>
			            <th class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Máximo</th>
			            <th class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Mínimo</th>

			          </tr>
			        </thead>
			        <tbody>

			        <?php /* Puxando todas escolas cadastradas... */
			        	$id_escola = $_SESSION['id_escola'];
			        	$query = "SELECT * FROM `escola_categoria_modalidade` INNER JOIN `modalidade` WHERE  `escola_categoria_modalidade`.`id_modalidade` = `modalidade`.`id` AND `escola_categoria_modalidade`.`id_escola` = '$id_escola' AND
`escola_categoria_modalidade`.`id_categoria` = 1;"; //soh os pré-mirim
			        	$resultado = mysql_query($query) or die(mysql_error());

			        	while($row = mysql_fetch_assoc($resultado)){
			        ?>


			          <tr>
			            <td><?php echo $row['nome']; ?></td>
			            <td><?php if($row['coletivo'] == 1) echo "sim"; else echo "não"; ?></td>
			            <td><?php echo $row['max']; ?></td>
			            <td><?php echo $row['min']; ?></td>
			          </tr>

			         <?php
				     	}


				     ?>
			          
			        </tbody>
			      </table>
			     </div>
			</div>

			<div class="row" style="padding: 20px;">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<table class="table" style="background-color: #F7F7F7">
			        <thead>
			          <tr>
			           <th class="col-xs-5 col-sm-5 col-md-5 col-lg-5">Mirim</th>
			            <th class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Coletiva</th>
			            <th class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Máximo</th>
			            <th class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Mínimo</th>
			          </tr>
			        </thead>
			        <tbody>

			        <?php /* Puxando todas escolas cadastradas... */
			        	$id_escola = $_SESSION['id_escola'];
			        	$query = "SELECT * FROM `escola_categoria_modalidade` INNER JOIN `modalidade` WHERE  `escola_categoria_modalidade`.`id_modalidade` = `modalidade`.`id` AND `escola_categoria_modalidade`.`id_escola` = '$id_escola' AND
`escola_categoria_modalidade`.`id_categoria` = 2;"; //soh os pré-mirim
			        	$resultado = mysql_query($query) or die(mysql_error());

			        	while($row = mysql_fetch_assoc($resultado)){
			        ?>


			          <tr>
			            <td><?php echo $row['nome']; ?></td>
			            <td><?php if($row['coletivo'] == 1) echo "sim"; else echo "não"; ?></td>
			            <td><?php echo $row['max']; ?></td>
			            <td><?php echo $row['min']; ?></td>
			          </tr>

			         <?php
				     	}
				     ?>
			          
			        </tbody>
			      </table>
				</div>
			</div>
			<div class="row" style="padding: 20px;">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<table class="table" style="background-color: #F7F7F7">
			        <thead>
			          <tr>
			            <th class="col-xs-5 col-sm-5 col-md-5 col-lg-5">Infantil</th>
			            <th class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Coletiva</th>
			            <th class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Máximo</th>
			            <th class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Mínimo</th>
			          </tr>
			        </thead>
			        <tbody>

			        <?php /* Puxando todas escolas cadastradas... */
			        	$id_escola = $_SESSION['id_escola'];
			        	$query = "SELECT * FROM `escola_categoria_modalidade` INNER JOIN `modalidade` WHERE  `escola_categoria_modalidade`.`id_modalidade` = `modalidade`.`id` AND `escola_categoria_modalidade`.`id_escola` = '$id_escola' AND
`escola_categoria_modalidade`.`id_categoria` = 3;"; //soh os pré-mirim
			        	$resultado = mysql_query($query) or die(mysql_error());

			        	while($row = mysql_fetch_assoc($resultado)){
			        ?>


			          <tr>
			            <td><?php echo $row['nome']; ?></td>
			            <td><?php if($row['coletivo'] == 1){ echo "sim";} else {echo "não";} ?></td>
			            <td><?php echo $row['max']; ?></td>
			            <td><?php echo $row['min']; ?></td>
			          </tr>

			         <?php
				     	}
				     ?>
			          
			        </tbody>
			      </table>
				</div>
				</div>

				

				<a href="painel.php"><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Voltar</button></a>
		
			</div>

		</div>

		<div class="modal fade" id="modal-msg">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title text-center"><strong>Atenção:</strong></h4>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<h5> Ao excluir uma modalidade você irá excluir todos os alunos já cadastrados nesta! Todos os dados serão perdidos! </h5>
							</div>
						</div>
						
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
						<button type="button" class="btn btn-primary" data-dismiss="modal" id="confirmarExcluir">Continuar</button>
					</div>
				</div>
			</div>
		</div>


		<div class="modal fade" id="modal-adicionaModalidade">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title text-center">Escolha uma das <strong>categorias</strong> e <strong>modalidades</strong> para adicionar:</h4>
					</div>
					<div class="modal-body">
						
						<div class="row">
							<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
								<select class="selectpicker" id="selectCategoria">
								    <optgroup label="Categoria">
								      <option value="1">Pré-Mirim</option>
								      <option value="2">Mirim</option>
								      <option value="3">Infantil</option>
								    </optgroup>
								  </select>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
								<select class="selectpicker" id="selectModalidade">
								    <optgroup label="Modalidade">
									      <?php
									      		$query = "SELECT * FROM modalidade WHERE id <=24";
									      		$resultado = mysql_query($query) or die();
									      		while($row = mysql_fetch_assoc($resultado)){
									      ?>

								     	<option value="<?php echo $row['id']; ?>"><?php echo $row['nome']; ?></option>

										<?php

											}

										?>

								    </optgroup>
								  </select>
							</div>

							
						</div><!-- row -->

						
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
						<button type="button" class="btn btn-primary" data-dismiss="modal" id="botaoSalvaModalidade">Salvar</button>
					</div>
				</div>
			</div>
		</div>

		<div class="modal fade" id="modal-adicionaModalidadeEspecial">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title text-center">Escolha uma das <strong>categorias</strong> e <strong>modalidades</strong> para adicionar:</h4>
					</div>
					<div class="modal-body">
						
						<div class="row">
							<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
								<select class="selectpicker" id="selectCategoriaEspecial">
								    <optgroup label="Categoria">
								       <option value="4">Especial Mirim</option>
								        <option value="5">Especial Infantil</option>
								         <option value="6">Especial Master</option>
								    </optgroup>
								  </select>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
								<select class="selectpicker" id="selectModalidadeEspecial">
								    <optgroup label="Modalidade">
									      <?php
									      		$query = "SELECT * FROM modalidade WHERE id > 24";
									      		$resultado = mysql_query($query) or die();
									      		while($row = mysql_fetch_assoc($resultado)){
									      ?>

								     	<option value="<?php echo $row['id']; ?>"><?php echo $row['nome']; ?></option>

										<?php

											}

										?>

								    </optgroup>
								  </select>
							</div>

							
						</div><!-- row -->

						
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
						<button type="button" class="btn btn-primary" data-dismiss="modal" id="botaoSalvaModalidadeEspecial">Salvar</button>
					</div>
				</div>
			</div>
		</div>

		<?php
			include("footer.php");
		?>
	    

		<!-- jQuery -->
		<script src="../js/jquery-2.1.4.min.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="../js/bootstrap.min.js"></script>

		<script src="../js/bootstrap-select.min.js"></script>

		<script type="text/javascript">
			$(document).ready(function(){
				var categoria = -1;
				var modalidade = -1;

				$(".removerPre").click(function(event){
					categoria = 1;
					modalidade = event.currentTarget['id'];
					$("#modal-msg").modal("show");
				}); //remover class Pre

				$(".removerMirim").click(function(event){
					categoria = 2;
					modalidade = event.currentTarget['id'];
					$("#modal-msg").modal("show");
				}); //remover class Mirim

				$(".removerInfantil").click(function(event){
					categoria = 3;
					modalidade = event.currentTarget['id'];
					$("#modal-msg").modal("show");
				}); //remover class Infantil 

				$(".removerEspecialMirim").click(function(event){
					categoria = 4;
					modalidade = event.currentTarget['id'];
					$("#modal-msg").modal("show");
				});

				$(".removerEspecialInfantil").click(function(event){
					categoria = 5;
					modalidade = event.currentTarget['id'];
					$("#modal-msg").modal("show");
				});

				$(".removerEspecialMaster").click(function(event){
					categoria = 6;
					modalidade = event.currentTarget['id'];
					$("#modal-msg").modal("show");
				});

				

				$("#confirmarExcluir").click(function(event){
					$.post("removeModalidade.php",{"categoria": categoria,"modalidade":modalidade})
						.done(function(dados){
							window.location.reload(true);
						});//fim do done(post)

				})//botao confirmarExcluir do modal


				$("#botaoAdicionaModalidade").click(function(event){
					$("#modal-adicionaModalidade").modal("show");
				});//botao botaoAdicionaModalidade

				$("#botaoAdicionaModalidadeEspecial").click(function(event){
					$("#modal-adicionaModalidadeEspecial").modal("show");
				});//botao botaoAdicionaModalidadeEspecial

				 $('.selectpicker').selectpicker();

				 $("#botaoSalvaModalidade").click(function(event){
				 	var categoria = $("#selectCategoria option:selected").val();
				 	var modalidade = $("#selectModalidade option:selected").val();

				 	$.post("addModalidade.php",{"categoria":categoria, "modalidade":modalidade})
				 		.done(function(dados){
				 			window.location.reload(true);
				 		});//fim post

				 });//fim botaoSalvaModalidade

				  $("#botaoSalvaModalidadeEspecial").click(function(event){
				 	var categoria = $("#selectCategoriaEspecial option:selected").val();
				 	var modalidade = $("#selectModalidadeEspecial option:selected").val();

				 	$.post("addModalidade.php",{"categoria":categoria, "modalidade":modalidade})
				 		.done(function(dados){
				 			window.location.reload(true);
				 		});//fim post

				 });//fim botaoSalvaModalidadeEspecial

			});//document ready
		</script>
	</body>

	<?php 
		endif;
	?>
</html>