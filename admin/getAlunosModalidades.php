<?php  
	session_start();

	/* Usuário nao logado! */
	if(!isset($_SESSION['login_admin'])) { 
		die();
	}

	include_once("../db.php");

	$id_escola = $_GET['id_escola']; 
?>


<!-- Pré-Mirim -->
<div class="row" style="padding: 10px;">
	<legend class="text-center">Pré-Mirim</legend>
	<?php
		$query = "SELECT * FROM `escola_categoria_modalidade` INNER JOIN `modalidade` WHERE escola_categoria_modalidade.id_modalidade = modalidade.id AND escola_categoria_modalidade.id_escola = '$id_escola' AND escola_categoria_modalidade.id_categoria = 1 ORDER BY `modalidade`.`nome`";

		$resultado = mysql_query($query) or die(mysql_error());

		//$row = mysql_fetch_assoc($resultado);

		if(mysql_num_rows($resultado) == 0){
			echo "<h5 class='text-center'>Sua escola nao participa de nenhuma modalidade nesta categoria</h5>";
		}else{
			while($row = mysql_fetch_assoc($resultado)){
				$m =  $row['id_modalidade'];

				$queryAlunos = "SELECT * FROM `modalidade_aluno` WHERE id_escola = '$id_escola' AND id_categoria = 1 AND id_modalidade = '$m' ORDER BY `modalidade_aluno`.`nome_aluno`;";

				$resultadoALunos = mysql_query($queryAlunos) or die(mysql_error());
				

				?>
					<div class="panel panel-primary">
					<div class="panel-heading">
				        <h3 class="panel-title text-center"><?php echo $row['nome']; ?> </h3>
				      </div>

				     <div class="panel-body">
						<?php
							if(mysql_num_rows($resultadoALunos) == 0){
								echo "<h5 class='text-center'>Sem alunos cadastrados</h5>";
							}
							else{

							while($rowAlunos = mysql_fetch_assoc($resultadoALunos)){
								
								?>
									<div class="row">
										<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
											<?php echo "<p>".$rowAlunos['nome_aluno']."</p>"; ?>
										</div>
										<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
											<?php echo "<p>".$rowAlunos['rg']."</p>"; ?>
										</div>
									</div>

								<?php
							}
						}
						?>
				     </div>
				     </div>


				<?php
			}
		}

		


	?>
</div>

<!-- Mirim -->
<div class="row" style="padding: 10px;">
	<legend class="text-center">Mirim</legend>
	<?php
		$query = "SELECT * FROM `escola_categoria_modalidade` INNER JOIN `modalidade` WHERE escola_categoria_modalidade.id_modalidade = modalidade.id AND escola_categoria_modalidade.id_escola = '$id_escola' AND escola_categoria_modalidade.id_categoria = 2 ORDER BY `modalidade`.`nome`";

		$resultado = mysql_query($query) or die(mysql_error());

		//$row = mysql_fetch_assoc($resultado);

		if(mysql_num_rows($resultado) == 0){
			echo "<h5 class='text-center'>Sua escola nao participa de nenhuma modalidade nesta categoria</h5>";
		}else{
			while($row = mysql_fetch_assoc($resultado)){
				$m =  $row['id_modalidade'];

				$queryAlunos = "SELECT * FROM `modalidade_aluno` WHERE id_escola = '$id_escola' AND id_categoria = 2 AND id_modalidade = '$m' ORDER BY `modalidade_aluno`.`nome_aluno`;";

				$resultadoALunos = mysql_query($queryAlunos) or die(mysql_error());
				

				?>
					<div class="panel panel-info">
					<div class="panel-heading">
				        <h3 class="panel-title text-center"><?php echo $row['nome']; ?> </h3>
				      </div>

				     <div class="panel-body">
						<?php
							if(mysql_num_rows($resultadoALunos) == 0){
								echo "<h5 class='text-center'>Sem alunos cadastrados</h5>";
							}
							else{
							while($rowAlunos = mysql_fetch_assoc($resultadoALunos)){
								
								?>
									<div class="row">
										<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
											<?php echo "<p>".$rowAlunos['nome_aluno']."</p>"; ?>
										</div>
										<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
											<?php echo "<p>".$rowAlunos['rg']."</p>"; ?>
										</div>
									</div>

								<?php
							}
						}
						?>
				     </div>
				     </div>


				<?php
			}
		}

		


	?>
</div>

<!-- Infantil -->
<div class="row" style="padding: 10px;">
	<legend class="text-center">Infantil</legend>
	<?php
		$query = "SELECT * FROM `escola_categoria_modalidade` INNER JOIN `modalidade` WHERE escola_categoria_modalidade.id_modalidade = modalidade.id AND escola_categoria_modalidade.id_escola = '$id_escola' AND escola_categoria_modalidade.id_categoria = 3 ORDER BY `modalidade`.`nome`";

		$resultado = mysql_query($query) or die(mysql_error());

		//$row = mysql_fetch_assoc($resultado);

		if(mysql_num_rows($resultado) == 0){
			echo "<h5 class='text-center'>Sua escola nao participa de nenhuma modalidade nesta categoria</h5>";
		}else{
			while($row = mysql_fetch_assoc($resultado)){
				$m =  $row['id_modalidade'];

				$queryAlunos = "SELECT * FROM `modalidade_aluno` WHERE id_escola = '$id_escola' AND id_categoria = 3 AND id_modalidade = '$m' ORDER BY `modalidade_aluno`.`nome_aluno`;";

				$resultadoALunos = mysql_query($queryAlunos) or die(mysql_error());
				

				?>
					<div class="panel panel-success">
					<div class="panel-heading">
				        <h3 class="panel-title text-center"><?php echo $row['nome']; ?> </h3>
				      </div>

				     <div class="panel-body">
						<?php
							if(mysql_num_rows($resultadoALunos) == 0){
								echo "<h5 class='text-center'>Sem alunos cadastrados</h5>";
							}
							else{
							while($rowAlunos = mysql_fetch_assoc($resultadoALunos)){
								
								?>
									<div class="row">
										<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
											<?php echo "<p>".$rowAlunos['nome_aluno']."</p>"; ?>
										</div>
										<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
											<?php echo "<p>".$rowAlunos['rg']."</p>"; ?>
										</div>
									</div>

								<?php
							}

						}
						?>
				     </div>
				     </div>


				<?php
			}
		}

		


	?>
</div>