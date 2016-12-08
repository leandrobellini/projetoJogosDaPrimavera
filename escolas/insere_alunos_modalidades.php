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
			header("location:index.php");
	?>

	<body id="bodyPrincipal">
		<?php 
			include("../topo.html"); 
			$categoria = $_GET['id_categoria'];
			$modalidade = $_GET['id_modalidade'];

			$query = "SELECT nome FROM categoria WHERE id = '$categoria'";
			$resultado = mysql_query($query) or die(mysql_error());
			$row = mysql_fetch_assoc($resultado);
			$nome_categoria = $row['nome'];

			$query = "SELECT * FROM modalidade WHERE id = '$modalidade'";
			$resultado = mysql_query($query) or die(mysql_error());
			$row = mysql_fetch_assoc($resultado);
			$nome_modalidade = $row['nome'];


			$max = $row['max'];
			$min = $row['min'];
		?>

			<!-- Page Content -->
	    <div class="container containerPrincipal">
			<div class="row" style="padding: 20px;">
				<form action="bancoInsereAlunos.php" method="POST" role="form" id="formModalidades">
					<legend class="text-center"><strong><?php echo $nome_modalidade." - ".$nome_categoria; ?></strong></legend>
					<div class="alert alert-info" role="alert">
					      <strong>Máximo de alunos: </strong><?php echo $max; ?>;
					      <strong>Mínimo de alunos: </strong><?php echo $min; ?>
					</div>
					<div class="alert alert-danger alert-dismissible aviso" role="alert">
					     <strong>Atenção: </strong>deixe em branco os campos que não for utilizar! Salve os dados em atualizar!
					</div>
					<div class="row" style="padding: 20px;">
								
						<div class="blocoAluno">
							<?php 
								for($i = 0; $i < $max; $i++){
							?>

							<div class="row" style="margin-top: 10px; padding-right: 15px; ">
								<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
									Nome:
									<input type="text"  class="form-control" name="nomes[]" id="<?php echo "nome".$i;?>"/>
								</div>

								<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
									RG:
									<input type="text"  class="form-control rgs" name="rg[]"  id="<?php echo "rg".$i;?>"/>
								</div>

								<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
									Ano de nascimento:
									<input type="text" class="form-control nascimento" id="<?php echo "nascimento".$i;?>" name="nascimento[]"/>
								</div>
								<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
									<br />
									<button type="button" class="btn btn-danger btn-xs remover" id="<?php echo "remover".$i;?>" style="visibility:hidden;">Remover</button>
								</div>
									
							</div>

						

							<?php
								}
							?>

						</div>			
					
					<br>
					<input type="hidden" name="id_categoria" class="form-control" value="<?php echo $categoria; ?>">
					<input type="hidden" name="id_modalidade" class="form-control" value="<?php echo $modalidade; ?>">
					<button type="button" id="botaoAtualizar" class="btn btn-primary"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Atualizar dados!</button>
				</form>
			</div>

			
			<a id="botaoVoltar"><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Voltar</button></a>
		</div>



	    <?php
			include("footer.php");
			//mysql_close($db) or die(mysql_error());
		?>

		<div id="modal" class="modal fade">
		    <div class="modal-dialog">
		        <div class="modal-content">
		            <div class="modal-header">
		                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                <h4 class="modal-title">Atenção!</h4>
		            </div>
		            <div class="modal-body">
		                <p>A modalidade <b><?php echo $nome_modalidade; ?></b> exige ao menos <b><?php echo $min; ?></b> alunos cadastrados! </p>
		            </div>
		            <div class="modal-footer">
		                <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
		            </div>
		        </div>
		    </div>
		</div>

		<div id="modalErro" class="modal fade">
		    <div class="modal-dialog">
		        <div class="modal-content">
		            <div class="modal-header">
		                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                <h4 class="modal-title">Atenção!</h4>
		            </div>
		            <div class="modal-body" id="modalErroMsg">
		                
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
				var maxCampos = <?php echo $max ?>;
				var minCampos = <?php echo $min ?>;
				var categoria = <?php echo $categoria ?>;


				$.get("consultaAluno.php", {id_categoria: "<?php echo $categoria ?>;", id_modalidade: "<?php echo $modalidade ?>;"})
				.done(function(dados){
					if(dados == "[]"){ //ainda nao cadastrou nada...
						$("#botaoAtualizar").html('<span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Cadastrar Alunos');
					}else{
						var i = 0;
						$.each(JSON.parse(dados), function(key, value){
							$("#nome"+i).val(value['nome_aluno']);
							$("#rg"+i).val(value['rg']);
							$("#rg"+i).data("valid","true");
							$("#remover"+i).css("visibility", "visible");
							$("#nascimento"+i).val(value['nascimento']);
							$("#nascimento"+i).data("valid","true");

							$("#remover"+i).click(function(){
								$("#nome"+this['id'][7]).val('');
								$("#rg"+this['id'][7]).val('');
								$("#rg"+this['id'][7]).data("valid","false");
								$("#nascimento"+this['id'][7]).data("valid","false");
								$("#nascimento"+this['id'][7]).val('');
								$(this).hide();
							});

							i++;
						});
					}
				});

				$(".rgs").blur(function(event){ 
					var rgAluno = event.currentTarget['value'];
					$.post("verificaAluno.php",{rg: rgAluno, categoria: <?php echo $categoria; ?>, modalidade: <?php echo $modalidade; ?>})
							.done(function(dados){
								if(dados == "erro_categoria"){
									$("#modalErroMsg").html("Atencao, aluno com RG: <b>"+ rgAluno +"</b> já está em outra categoria!");
									$("#modalErro").modal("show");
									$(event.currentTarget).data("valid","false");
									
								}else if(dados == "erro_modalidade"){
									$("#modalErroMsg").html("<p>Atencao, aluno com RG: <b>"+ rgAluno +"</b> já está em mais de 2 modalidades coletivas!</p>");
									$("#modalErro").modal("show");
									$(event.currentTarget).data("valid","false");
								}else{
									$(event.currentTarget).data("valid","true");
								}

							});
				});

				$(".nascimento").blur(function(event){
					var data = event.currentTarget['value'];

					switch(categoria){
						case 1:{
							if(data < 2004 || data > 2007){
								alert("Atenção: Data de nascimento inválida para esta categoria!");
								$(event.currentTarget).data("valid","false");
							}else{
								$(event.currentTarget).data("valid","true");
							}
							break;
						}
						case 2:{
							if(data < 2002 || data > 2005){
								alert("Atenção: Data de nascimento inválida para esta categoria!");
								$(event.currentTarget).data("valid","false");
							}else{
								$(event.currentTarget).data("valid","true");
							}
							break;
						}
						case 3:{
							if(data < 1999 || data > 2003){
								alert("Atenção: Data de nascimento inválida para esta categoria!");
								$(event.currentTarget).data("valid","false");
							}else{
								$(event.currentTarget).data("valid","true");
							}
							break;
						}
						case 4:{
							if(data < 2002 || data > 2003){
								alert("Atenção: Data de nascimento inválida para esta categoria!");
								$(event.currentTarget).data("valid","false");
							}else{
								$(event.currentTarget).data("valid","true");
							}
							break;
						}
						case 5:{
							if(data < 1999 || data > 2001){
								alert("Atenção: Data de nascimento inválida para esta categoria!");
								$(event.currentTarget).data("valid","false");
							}else{
								$(event.currentTarget).data("valid","true");
							}
							break;
						}
						case 6:{
							if(data < 1000 || data > 2000){
								alert("Atenção: Data de nascimento inválida para esta categoria!");
								$(event.currentTarget).data("valid","false");
							}else{
								$(event.currentTarget).data("valid","true");
							}
							break;
						}
					}
				});


				

				$("#botaoVoltar").click(function(){
					parent.history.back();
				});


				//garante minimo de alunos cadastrados
				$("#botaoAtualizar").click( function(event){
					//verificando se aluno jah está em outra categoria ou se faz parte de mais de 2 modalidades coletivas
					var cadastrados = 0;
					var cadastradosNascimento = 0;

					$(".rgs").each(function(key, obj){
						if(eval($(obj).data("valid"))){
							cadastrados++; 
						}
					});

					$(".nascimento").each(function(key, obj){
						if(eval($(obj).data("valid"))){
							cadastradosNascimento++; 
						}
					});

					if(cadastrados != cadastradosNascimento){
						alert("RG ou Data de nascimento faltando... Verifique!");
						return;
					}

					if(cadastrados >= minCampos){
						$("#formModalidades").submit();
					}else{
						$("#modal").modal("show");
					}

					
				});



			});

		</script>

	</body>

	<?php 
		endif;
	?>
</html>