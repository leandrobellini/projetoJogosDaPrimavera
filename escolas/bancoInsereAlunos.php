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
	    <div class="container" style="margin-top: 30px; min-height:600px; background-color: #fff; max-width: 730px;">
			<div class="row">
				<legend class="text-center">Os seguintes dados foram adicionados/atualizados com sucesso:  </legend>
					
				<div class="col-md-12">
					<table class="table">
					        <thead>
					          <tr>
					            <th class="col-md-8">Nome</th>
					            <th class="col-md-4">RG</th>
					          </tr>
					        </thead>
					        <tbody>

					      
					<?php 

					$id_escola = $_SESSION['id_escola'];
					$id_categoria = $_POST['id_categoria'];
					$id_modalidade = $_POST['id_modalidade']; 

					if(!is_numeric($id_categoria) || !is_numeric($id_modalidade)) {
						die();
					}


					/* Limpo dados antigos para adiconar os novos... */
					$limpeza = "DELETE FROM modalidade_aluno WHERE id_escola = '$id_escola' 
									AND id_categoria = '$id_categoria' AND id_modalidade = '$id_modalidade'";

					mysql_query($limpeza) or die(mysql_error());

					$nomes = $_POST['nomes'];
					$rg = $_POST['rg'];
					$rg = preg_replace('/[^[:alnum:]_]/', '',$rg);
					$nascimento = $_POST['nascimento'];

					foreach ($nomes as $key => $nome) {
						if($nome != "" && $rg != ""){
							$query = "INSERT INTO modalidade_aluno(id_escola, id_categoria, id_modalidade, nome_aluno, rg, nascimento) 
									VALUES ('$id_escola', '$id_categoria','$id_modalidade', '$nome', '$rg[$key]', '$nascimento[$key]')";

							mysql_query($query) or die(mysql_error());

							echo "<tr>
					            <th scope='row'>$nome</th>
					            <td>$rg[$key]</td>
					            </tr>";
						}
					}

					mysql_close($db);
					

					?>


					          

					         					          
					        </tbody>
					      </table>
					<a href="painel.php"><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Voltar</button></a></div>


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
	</body>

	<?php 
		endif;
	?>
</html>
