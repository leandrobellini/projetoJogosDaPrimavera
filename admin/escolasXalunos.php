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
		<link rel="stylesheet" type="text/css" href="../css/bootstrap-select.min.css">
		<link href="http://www.fuelcdn.com/fuelux/3.11.0/css/fuelux.min.css" rel="stylesheet">

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

	<body id="bodyPrincipal" class="fuelux">
		<?php include("../topo.html"); ?>

			<!-- Page Content -->
	    <div class="container" style="margin-top: 30px; min-height:400px; background-color: #fff; max-width: 730px;">
			<div class="row">

				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
						<h4>Selecione uma escola: </h4>
					</div>
					<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
						<select class="selectpicker" data-width="100%">
						    <optgroup label="Escola">
								<?php
									$query = "SELECT * FROM `escolas`;";
									$resultado = mysql_query($query) or die(mysql_error());

			        				while($row = mysql_fetch_assoc($resultado)){
			        					echo "<option value='$row[id]'>$row[nome]</option>";
			        				}
								?>
						    </optgroup>
						 </select>
					</div>

				</div>
				<legend></legend>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div id="containerEscolas">
						
					</div>
				</div>
			</div>
		</div>
        


		<!-- jQuery -->
		<script src="../js/jquery-2.1.4.min.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="../js/bootstrap.min.js"></script>

		<script src="../js/bootstrap-select.min.js"></script>

		<script src="http://www.fuelcdn.com/fuelux/3.11.0/js/fuelux.min.js"></script>

		<script type="text/javascript">
			$(document).ready(function(){
				  $('.selectpicker').selectpicker();

				  $('select.selectpicker').on('change', function(){
					   var selected = $('.selectpicker option:selected').val();
					   $.get( "getAlunosModalidades.php", { id_escola: selected} )
						  .done(function( data ) {
						    	$("#containerEscolas").html(data);
						  });
					});

				  //primeira escola...
				  $.get( "getAlunosModalidades.php", { id_escola: 1} )
				  .done(function( data ) {
				    	$("#containerEscolas").html(data);
				  });

				  
			});
		</script>
	</body>

	<?php 
		endif;
	?>
</html>