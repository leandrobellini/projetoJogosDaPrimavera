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
	    <div class="container" style="margin-top: 30px; min-height:600px; background-color: #fff; max-width: 730px;">
			<div class="row">

				<div class="col-md-12">

					<!--  Conteúdo principal -->
					<div class="alert alert-danger" role="alert" style="margin-top: 5px;">
						<strong>Atençao:</strong> você ainda nao cadastrou as modalidades para sua escola!
					</div>

					<div id="lista_modalidades" style="padding-bottom: 20px;">
						<form action="bancoInsereCategorias.php" method="post" role="form">
							<legend>Escolha todas modalidades que sua escola irá participar:</legend>
						
							<div class="form-group">
								<div id="Modalidades">
									<div class="col-md-4">
										<label>Pré-mirim</label>
										<div class="checkbox">
											<input type="checkbox" name="pre[]" value="1">Atletismo Masculino</div>
										<div class="checkbox">
											  <input type="checkbox" name="pre[]" value="2">Atletismo Feminino </div>
										<div class="checkbox" style="padding-top:10px;">
											  <input type="checkbox" name="pre[]" value="3">Basquete Masculino </div>
										<div class="checkbox">
											  <input type="checkbox" name="pre[]" value="4">Basquete Feminino </div>
										<div class="checkbox" style="padding-top:10px;">
											  <input type="checkbox" name="pre[]" value="5">Damas Masculino </div>
										<div class="checkbox">
											  <input type="checkbox" name="pre[]" value="6">Damas Feminino </div>
										<div class="checkbox" style="padding-top:10px;">
											  <input type="checkbox" name="pre[]" value="7">Futsal Masculino </div>
										<div class="checkbox">
											  <input type="checkbox" name="pre[]" value="8">Futsal Feminino </div>
										<div class="checkbox" style="padding-top:10px;">
											  <input type="checkbox" name="pre[]" value="9">Handebol Masculino </div>
										<div class="checkbox">
											  <input type="checkbox" name="pre[]" value="10">Handebol Feminino </div>
										<div class="checkbox" style="padding-top:10px;">
											  <input type="checkbox" name="pre[]" value="11">Judô Masculino </div>
										<div class="checkbox">
											  <input type="checkbox" name="pre[]" value="12">Judô Feminino </div>
										<div class="checkbox" style="padding-top:10px;">
										      <input type="checkbox" name="pre[]" value="13">Karatê Masculino </div>
										<div class="checkbox">
											  <input type="checkbox" name="pre[]" value="14">Karatê Feminino </div>
										<div class="checkbox" style="padding-top:10px;">
											  <input type="checkbox" name="pre[]" value="15">Natação Masculino </div>
										<div class="checkbox">
											  <input type="checkbox" name="pre[]" value="16">Natação Feminino </div>
										<div class="checkbox" style="padding-top:10px;">
											  <input type="checkbox" name="pre[]" value="17">Tênis Masculino </div>
										<div class="checkbox">
											  <input type="checkbox" name="pre[]" value="18">Tênis Feminino </div>
										<div class="checkbox" style="padding-top:10px;">
											  <input type="checkbox" name="pre[]" value="19">Tênis de Mesa Masculino </div>
										<div class="checkbox">
											  <input type="checkbox" name="pre[]" value="20">Tênis de Mesa Feminino </div>
										<div class="checkbox" style="padding-top:10px;">
											  <input type="checkbox" name="pre[]" value="21">Voleibol Masculino </div>
										<div class="checkbox">
											  <input type="checkbox" name="pre[]" value="22">Voleibol Feminino </div>
										<div class="checkbox" style="padding-top:10px;">
											  <input type="checkbox" name="pre[]" value="23">Xadrez Masculino </div>
										<div class="checkbox">
											  <input type="checkbox" name="pre[]" value="24">Xadrez Feminino </div>
									</div>

									<div class="col-md-4">
										<label>Mirim</label>
										<div class="checkbox">
											  <input type="checkbox" name="mirim[]" value="1">Atletismo Masculino </div>
										<div class="checkbox">
											  <input type="checkbox" name="mirim[]" value="2">Atletismo Feminino </div>
										<div class="checkbox" style="padding-top:10px;">
											  <input type="checkbox" name="mirim[]" value="3">Basquete Masculino </div>
										<div class="checkbox">
											  <input type="checkbox" name="mirim[]" value="4">Basquete Feminino </div>
										<div class="checkbox" style="padding-top:10px;">
											  <input type="checkbox" name="mirim[]" value="5">Damas Masculino </div>
										<div class="checkbox">
											  <input type="checkbox" name="mirim[]" value="6">Damas Feminino </div>
										<div class="checkbox" style="padding-top:10px;">
											  <input type="checkbox" name="mirim[]" value="7">Futsal Masculino </div>
										<div class="checkbox">
											  <input type="checkbox" name="mirim[]" value="8">Futsal Feminino </div>
										<div class="checkbox" style="padding-top:10px;">
											  <input type="checkbox" name="mirim[]" value="9">Handebol Masculino </div>
										<div class="checkbox" >
											  <input type="checkbox" name="mirim[]" value="10">Handebol Feminino </div>
										<div class="checkbox" style="padding-top:10px;">
											  <input type="checkbox" name="mirim[]" value="11">Judô Masculino </div>
										<div class="checkbox">
											  <input type="checkbox" name="mirim[]" value="12">Judô Feminino </div>
										<div class="checkbox" style="padding-top:10px;">
											  <input type="checkbox" name="mirim[]" value="13">Karatê Masculino </div>
										<div class="checkbox">
											  <input type="checkbox" name="mirim[]" value="14">Karatê Feminino </div>
										<div class="checkbox" style="padding-top:10px;">
											  <input type="checkbox" name="mirim[]" value="15">Natação Masculino </div>
										<div class="checkbox">
											  <input type="checkbox" name="mirim[]" value="16">Natação Feminino </div>
										<div class="checkbox" style="padding-top:10px;">
											  <input type="checkbox" name="mirim[]" value="17">Tênis Masculino </div>
										<div class="checkbox">
											  <input type="checkbox" name="mirim[]" value="18">Tênis Feminino </div>
										<div class="checkbox" style="padding-top:10px;">
											  <input type="checkbox" name="mirim[]" value="19">Tênis de Mesa Masculino </div>
										<div class="checkbox">
											  <input type="checkbox" name="mirim[]" value="20">Tênis de Mesa Feminino </div>
										<div class="checkbox" style="padding-top:10px;">
											  <input type="checkbox" name="mirim[]" value="21">Voleibol Masculino </div>
										<div class="checkbox">
											  <input type="checkbox" name="mirim[]" value="22">Voleibol Feminino </div>
										<div class="checkbox" style="padding-top:10px;">
											  <input type="checkbox" name="mirim[]" value="23">Xadrez Masculino </div>
										<div class="checkbox">
											  <input type="checkbox" name="mirim[]" value="24">Xadrez Feminino </div>

									</div>

									<div class="col-md-4">
										<label>Infantil</label>
										<div class="checkbox">
											  <input type="checkbox" name="infantil[]" value="1">Atletismo Masculino </div>
										<div class="checkbox">
											  <input type="checkbox" name="infantil[]" value="2">Atletismo Feminino </div>
										<div class="checkbox" style="padding-top:10px;">
											  <input type="checkbox" name="infantil[]" value="3">Basquete Masculino </div>
										<div class="checkbox">
											  <input type="checkbox" name="infantil[]" value="4">Basquete Feminino </div>
										<div class="checkbox" style="padding-top:10px;">
											  <input type="checkbox" name="infantil[]" value="5">Damas Masculino </div>
										<div class="checkbox">
											  <input type="checkbox" name="infantil[]" value="6">Damas Feminino </div>
										<div class="checkbox" style="padding-top:10px;">
											  <input type="checkbox" name="infantil[]" value="7">Futsal Masculino </div>
										<div class="checkbox">
											  <input type="checkbox" name="infantil[]" value="8">Futsal Feminino </div>
										<div class="checkbox" style="padding-top:10px;">
											  <input type="checkbox" name="infantil[]" value="9">Handebol Masculino </div>
										<div class="checkbox">
											  <input type="checkbox" name="infantil[]" value="10">Handebol Feminino </div>
										<div class="checkbox" style="padding-top:10px;">
											  <input type="checkbox" name="infantil[]" value="11">Judô Masculino </div>
										<div class="checkbox">
											  <input type="checkbox" name="infantil[]" value="12">Judô Feminino </div>
										<div class="checkbox" style="padding-top:10px;">
											  <input type="checkbox" name="infantil[]" value="13">Karatê Masculino </div>
										<div class="checkbox">
											  <input type="checkbox" name="infantil[]" value="14">Karatê Feminino </div>
										<div class="checkbox" style="padding-top:10px;">
											  <input type="checkbox" name="infantil[]" value="15">Natação Masculino </div>
										<div class="checkbox">
											  <input type="checkbox" name="infantil[]" value="16">Natação Feminino </div>
										<div class="checkbox" style="padding-top:10px;">
											  <input type="checkbox" name="infantil[]" value="17">Tênis Masculino </div>
										<div class="checkbox">
											  <input type="checkbox" name="infantil[]" value="18">Tênis Feminino </div>
										<div class="checkbox" style="padding-top:10px;">
											  <input type="checkbox" name="infantil[]" value="19">Tênis de Mesa Masculino </div>
										<div class="checkbox">
											  <input type="checkbox" name="infantil[]" value="20">Tênis de Mesa Feminino </div>
										<div class="checkbox" style="padding-top:10px;">
											  <input type="checkbox" name="infantil[]" value="21">Voleibol Masculino </div>
										<div class="checkbox">
											  <input type="checkbox" name="infantil[]" value="22">Voleibol Feminino </div>
										<div class="checkbox" style="padding-top:10px;">
											<input type="checkbox" name="infantil[]" value="23">Xadrez Masculino </div>
										<div class="checkbox">
											  <input type="checkbox" name="infantil[]" value="24">Xadrez Feminino </div>
										
									</div>
					


								</div>
							</div>
							
							<br />
							<legend class="text-center">Especiais</legend>
							<br />

							<div class="form-group">
								<div id="Modalidades">
									<div class="col-md-4">
										<label>Especial Mirim</label>
										<div class="checkbox">
											<input type="checkbox" name="especialMirim[]" value="25">Atletismo Masculino DF</div>
										<div class="checkbox">
											  <input type="checkbox" name="especialMirim[]" value="26">Atletismo Feminino DF</div>
										<div class="checkbox" style="padding-top:10px;">
											  <input type="checkbox" name="especialMirim[]" value="27">Atletismo Masculino DV</div>
										<div class="checkbox">
											  <input type="checkbox" name="especialMirim[]" value="28">Atletismo Feminino DV</div>
										<div class="checkbox" style="padding-top:10px;">
											  <input type="checkbox" name="especialMirim[]" value="29">Atletismo Masculino DA</div>
										<div class="checkbox">
											  <input type="checkbox" name="especialMirim[]" value="30">Atletismo Feminino DA</div>
										<div class="checkbox" style="padding-top:10px;">
											  <input type="checkbox" name="especialMirim[]" value="31">Natação Masculino DF</div>
										<div class="checkbox">
											  <input type="checkbox" name="especialMirim[]" value="32">Natação Feminino DF</div>
										<div class="checkbox" style="padding-top:10px;">
											  <input type="checkbox" name="especialMirim[]" value="33">Natação Masculino DV</div>
										<div class="checkbox">
											  <input type="checkbox" name="especialMirim[]" value="34">Natação Feminino DV</div>
										<div class="checkbox" style="padding-top:10px;">
											  <input type="checkbox" name="especialMirim[]" value="35">Natação Masculino DA</div>
										<div class="checkbox">
											  <input type="checkbox" name="especialMirim[]" value="36">Natação Feminino DA</div>
										
									</div>

									<div class="col-md-4">
										<label>Especial Infantil</label>
										<div class="checkbox">
											<input type="checkbox" name="especialInfantil[]" value="25">Atletismo Masculino DF</div>
										<div class="checkbox">
											  <input type="checkbox" name="especialInfantil[]" value="26">Atletismo Feminino DF</div>
										<div class="checkbox" style="padding-top:10px;">
											  <input type="checkbox" name="especialInfantil[]" value="27">Atletismo Masculino DV</div>
										<div class="checkbox">
											  <input type="checkbox" name="especialInfantil[]" value="28">Atletismo Feminino DV</div>
										<div class="checkbox" style="padding-top:10px;">
											  <input type="checkbox" name="especialInfantil[]" value="29">Atletismo Masculino DA</div>
										<div class="checkbox">
											  <input type="checkbox" name="especialInfantil[]" value="30">Atletismo Feminino DA</div>
										<div class="checkbox" style="padding-top:10px;">
											  <input type="checkbox" name="especialInfantil[]" value="31">Natação Masculino DF</div>
										<div class="checkbox">
											  <input type="checkbox" name="especialInfantil[]" value="32">Natação Feminino DF</div>
										<div class="checkbox" style="padding-top:10px;">
											  <input type="checkbox" name="especialInfantil[]" value="33">Natação Masculino DV</div>
										<div class="checkbox">
											  <input type="checkbox" name="especialInfantil[]" value="34">Natação Feminino DV</div>
										<div class="checkbox" style="padding-top:10px;">
											  <input type="checkbox" name="especialInfantil[]" value="35">Natação Masculino DA</div>
										<div class="checkbox">
											  <input type="checkbox" name="especialInfantil[]" value="36">Natação Feminino DA</div>
										
									</div>

									<div class="col-md-4">
										<label>Especial Master</label>
										<div class="checkbox">
											<input type="checkbox" name="especialMaster[]" value="25">Atletismo Masculino DF</div>
										<div class="checkbox">
											  <input type="checkbox" name="especialMaster[]" value="26">Atletismo Feminino DF</div>
										<div class="checkbox" style="padding-top:10px;">
											  <input type="checkbox" name="especialMaster[]" value="27">Atletismo Masculino DV</div>
										<div class="checkbox">
											  <input type="checkbox" name="especialMaster[]" value="28">Atletismo Feminino DV</div>
										<div class="checkbox" style="padding-top:10px;">
											  <input type="checkbox" name="especialMaster[]" value="29">Atletismo Masculino DA</div>
										<div class="checkbox">
											  <input type="checkbox" name="especialMaster[]" value="30">Atletismo Feminino DA</div>
										<div class="checkbox" style="padding-top:10px;">
											  <input type="checkbox" name="especialMaster[]" value="31">Natação Masculino DF</div>
										<div class="checkbox">
											  <input type="checkbox" name="especialMaster[]" value="32">Natação Feminino DF</div>
										<div class="checkbox" style="padding-top:10px;">
											  <input type="checkbox" name="especialMaster[]" value="33">Natação Masculino DV</div>
										<div class="checkbox">
											  <input type="checkbox" name="especialMaster[]" value="34">Natação Feminino DV</div>
										<div class="checkbox" style="padding-top:10px;">
											  <input type="checkbox" name="especialMaster[]" value="35">Natação Masculino DA</div>
										<div class="checkbox">
											  <input type="checkbox" name="especialMaster[]" value="36">Natação Feminino DA</div>
										
									</div>
					


								</div>
							</div>
						
							<button type="submit" class="btn btn-primary" style="margin-top: 30px;">Cadastrar Modalidades!
							</button>

							
						</form>
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
	</body>

	<?php 
		endif;
	?>
</html>