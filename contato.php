<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="XLIII Jogos da Primavera">
    <meta name="keywords" content="jogos da primavera,jogos da primavera sao carlos,jogos,primavera,sao carlos,inove2">
    <meta name="author" content="Inove2">

    <title>XLIII Jogos da Primavera</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-item.css" rel="stylesheet">  

	<!-- Estilo CSS -->
    <link rel="stylesheet" type="text/css" href="css/estilo_index.css">
</head>

<body>
	
	<?php include("topo_index.html"); ?>

    <!-- Page Content -->
    <div class="container containerPrincipal">
        <div class="row">
            <div class="col-xs-12 col-sm-10 col-md-8 col-lg-8 
                                  col-sm-offset-1 col-md-offset-2 col-lg-offset-2">  

                <div class="thumbnail" id="thumbnailPrincipal">
                    
                    <div class="thumbnail" id="thumbnailPrincipal">
                    <img class="img-responsive" src="img/capa.png">
                        
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="nav_out">
                        <div class="row" id="nav_in">                       
                            <ul>
                                <li><a href="historico.php">Histórico</a></li>
                                <li><a href="regulamento.php">Regulamento</a></li>
                                <li><a href="#">Galeria</a></li>        
                                <li><a href="gruposJogos.php">Grupos e Jogos</a></li>                             
                                <li><a href="tabelas.php">Tabelas</a></li>                              
                                <li><a href="#">Classificação</a></li>
                            </ul>                                                                           
                        </div>
                    </div>

                    <div class="caption-full">  

                        <div class="alert alert-info">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <strong>Atenção:</strong> os campos com * sao obrigatórios!
                        </div>

                        <form action="salva_contato.php" id="formContato" method="POST" class="form-horizontal" role="form">                        
                            <div class="form-group">
                                <label class="control-label col-md-2">Nome:* </label>
                                <div class="col-md-6">
                                    <input type="text" id="nome" name="nome" class="form-control" value="" required="required" maxlength="50">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-2">Assunto:* </label>
                                <div class="col-md-6">
                                    <input type="text" name="assunto" id="assunto" class="form-control" value="" required="required" maxlength="100">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-2">E-mail:* </label>
                                <div class="col-md-4">
                                    <input type="email" name="email" id="email" class="form-control" value="" required="required" title="" maxlength="50">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-2">Telefone: </label>
                                <div class="col-md-4">
                                    <input type="tel" name="telefone" id="telefone" class="form-control" value="" title="" maxlength="20">
                                </div>
                            </div>

                            <div class="form-group ">
                                <label class="control-label col-md-2">Mensagem:* </label>
                                <div class="col-md-8">
                                    <textarea name="mensagem" id="mensagem" class="form-control" rows="8" required="required" maxlength="1000"></textarea>
                                </div>
                            </div>
                    
                            <div class="form-group">
                                <div class="col-sm-10 col-sm-offset-2">
                                    <button type="submit" class="btn btn-primary" id="botaoEnviar">Enviar</button>

                                </div>
                            </div>
                        </form>
                    </div>
				</div>
            </div>
        </div>
	</div><!-- /.container -->

	<?php include("footer.php"); ?>


    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <script src="js/jquery-2.1.4.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>  
    
</body>

</html>
