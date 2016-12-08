<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title> XLIII Jogos da Primavera - Contato </title>

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
		if(!(isset($_SESSION['login_escolas'])) ):
			header("location:index.php");

		 /*Usuário logado! */
		else:
	?>

	<body id="bodyPrincipal">
		<?php 
			include("../topo.html"); 
			include("../db.php");
			$id_escola = $_SESSION['id_escola'];

			$query = "SELECT * FROM escolas WHERE id = '$id_escola'";

			$resultado = mysql_query($query, $db) or die(mysql_error());

			$row = mysql_fetch_assoc($resultado);

			mysql_close($db) or die(mysql_error());
		?>

			<!-- Page Content -->
	    <div class="container containerPrincipal">
			
			<div class="row">
				<legend class="text-center">Conta de usuário</legend>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="alert alert-info">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<strong>Atenção:</strong> para alteração de outros dados entre em contato com o administrador.
					</div>

					<div class="row" style="margin:5px;">
						<div>
							<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
								<strong>Escola: </strong>
							</div>

							<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
								<input type="text" name="escola" id="escola" class="form-control" value="<?php echo $row['nome']; ?>">
							</div>
						</div>
					</div>

					<div class="row" style="margin:5px;">
						<div>
							<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
								<strong>Representante: </strong>
							</div>

							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
								<input type="text" name="representante" id="representante" class="form-control" value="<?php echo $row['representante']; ?>">	
							</div>
						</div>

						<div>
							<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
								<strong>Cargo: </strong>
							</div>

							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
								<input type="text" name="cargo" id="cargo" class="form-control" value="<?php echo $row['cargo']; ?>">	
							</div>
						</div>
					</div>

					<div class="row" style="margin:5px;">
						<div>
							<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
								<strong>RG: </strong>
							</div>

							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
								<input type="text" name="rg" id="rg" class="form-control" value="<?php echo $row['rg']; ?>">	
							</div>
						</div>
						<div>
							<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
								<strong>Tel:</strong>
							</div>

							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
								<input type="text" name="tel" id="tel" class="form-control" value="<?php echo $row['telefone']; ?>">	
							</div>
						</div>
					</div>

					<div class="row" style="margin:5px;">
						<div>
							<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
								<strong>E-mail: </strong>
							</div>

							<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
								<input type="text" name="email" id="email" class="form-control"value="<?php echo $row['email']; ?>">	
							</div>
						</div>
					</div>

					<div class="row" style="margin:5px;">
						<div>
							<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
								<strong>Usuario: </strong>
							</div>

							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
								<input type="text" name="usuario" id="usuario" class="form-control" value="<?php echo $row['usuario']; ?>" disabled>	
							</div>
						</div>

						<div>
							<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
								<strong>Senha: </strong>
							</div>

							<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
								<input type="password" name="senha" id="senha" class="form-control" value="*********" disabled>	
							</div>
							<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
								<button type="button" class="btn btn-danger btn-sm" id="botaoMudarSenha"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span> Alterar senha</button>	
							</div>
						</div>

					</div>

					<br>

					<div class="row" style="margin:5px;">
				
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-md-offset-2">
							<button id="salvar" type="button" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span> Salvar dados</button>
						</div>
					
					</div>



					
				</div>
			</div>
			<br>
			<br>
			<a href="painel.php"><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Voltar</button></a>


				
		</div>



	    <?php
			include("footer.php");
		?>

		<div id="modal" class="modal fade">
		    <div class="modal-dialog">
		        <div class="modal-content">
		            <div class="modal-header">
		                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                <h4 class="modal-title text-center"><b>Dados atualizados!</b></h4>
		            </div>
		            <div class="modal-body">
		                <p>Os dados foram atualizados com sucesso! </p>
		            </div>
		            <div class="modal-footer">
		                <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
		            </div>
		        </div>
		    </div>
		</div>

		<div id="modalSenha" class="modal fade">
		    <div class="modal-dialog">
		        <div class="modal-content">
		            <div class="modal-header">
		                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                <h4 class="modal-title text-center"><b>Alterar senha de usuário</b></h4>
		            </div>
		            <div class="modal-body">
		                <div class="row" style="margin: 5px;">
		                	<div>
		                		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
		                			<strong>Senha Atual: </strong>
		                		</div>
		                		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
		                			<input type="password" name="senhaAtual" id="senhaAtual" class="form-control" >
		                		</div>
		                	</div>

		                </div>
		                <div class="row" style="margin: 5px;">
		                	<div>
		                		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
		                			<strong>Nova Senha: </strong>
		                		</div>
		                		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
		                			<input type="password" name="senha1" id="senha1" class="form-control" >
		                		</div>
		                	</div>
		                </div>
		                <div class="row" style="margin: 5px;">
		                	<div>
		                		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
		                			<strong>Repetir Senha: </strong>
		                		</div>
		                		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
		                			<input type="password" name="senha2" id="senha2" class="form-control" >
		                		</div>
		                	</div>
		                </div>

		                <div class="row" style="margin: 5px;" >
		                	<strong style="color:red;" id="status"></strong>
		                </div>

		                <div class="row" style="margin: 10px;">
		                	<div>
		                		<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-md-offset-3">
		                			<button type="button" class="btn btn-primary" id="botaoSalvarSenha"> <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Salvar senha</button>
		                		</div>
		                	</div>
		                </div>
		            </div>
		            <div class="modal-footer">
		                <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
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
				$("#linkHome").removeClass("active");
				$("#linkContato").removeClass("active");
				$("#linkConta").addClass("active");


				$("#botaoSalvarSenha").click(function(){
					var senhaAtual = $("#senhaAtual").val();
					var senha1 = $("#senha1").val();
					var senha2 = $("#senha2").val();

					if(senha1 != senha2){
						$("#status").html("Senhas diferentes!");
					}else{

						$.post("mudaSenha.php",{senha: senhaAtual, nova: senha1})
							.done(function(dados){
								if(dados == "erro_senha_atual"){
									$("#status").html("Senha atual errada!");
								}
								if(dados == "ok"){
									$("#status").html("Senha atualizada com sucesso!");	
								}

							});
					}


					
				});

				$("#botaoMudarSenha").click(function(){
					$("#modalSenha").modal("show");
				});

				$("#salvar").click(function(){
					if($("#escola").val() == "" ||
						$("#email").val() ==  "" ||
						$("#tel").val() ==  "" ||
						$("#representante").val()  ==  "" ||
						$("#cargo").val()  ==  "" ||
						$("#rg").val() == ""){

						alert("Dados inválidos! Falta algo...");
					}else{
						$.post("conta_salvar.php",{
						nome: $("#escola").val(),
						email: $("#email").val(),
						tel: $("#tel").val(),
						representante: $("#representante").val(),
						cargo: $("#cargo").val(),
						rg: $("#rg").val()
						}).done(function(data){
							if(data == "ok"){
								$("#modal").modal("show");
							}
						});
					}


					
				});
			});
		</script>


		


	</body>

	<?php 
		endif;
	?>
</html>