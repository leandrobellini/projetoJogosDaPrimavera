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

    <link rel="stylesheet" type="text/css" href="css/bootstrap-select.min.css">
</head>

<body>
	
	<?php include("topo_index.html"); ?>

    <!-- Page Content -->
    <div class="container containerPrincipal">
        <div class="row">
            <div class="col-xs-12 col-sm-10 col-md-8 col-lg-8 
                                  col-sm-offset-1 col-md-offset-2 col-lg-offset-2">  

                <div class="thumbnail" id="thumbnailPrincipal">
                    <img class="img-responsive" src="img/capa.png">
						
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="nav_out">
	                    <div class="row" id="nav_in">                       
	                		<ul>
	                			<li><a href="historico.php">Histórico</a></li>
				                <li><a href="#">Regulamento</a></li>
				                <li><a href="#">Galeria</a></li>		
				                <li><a href="gruposJogos.php">Grupos e Jogos</a></li>				              
				                <li><a href="tabelas.php">Tabelas</a></li>				                
				                <li><a href="#">Classificação</a></li>
			                </ul>                    		                    	                    	
	                    </div>

	                </div>
                     <legend><h3 class="text-center"><b>Grupos e Jogos</b></h3 ></legend>
                   
                    <div class="row" style="padding-left: 10px; padding-right: 10px;">

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                            <div class="row" style="padding-bottom: 10px;">
                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                    <h4 >Selecione uma categoria: </h4>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 " >
                                    <select class="selectpicker" data-width="100%">
                                        <optgroup label="Categoria">
                                            <option value="1">Pré-Mirim</option>
                                            <option value="2">Mirim</option>
                                            <option value="3">Infantil</option>
                                        </optgroup>
                                     </select>
                                </div>
                            </div>

                            <div class="row">
                                <div id="conteudoDinamico" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    
                                </div>
                            </div>
                            
                        </div>                      
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.container -->

    <?php include("footer.php"); ?>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>  

    <script src="js/bootstrap-select.min.js"></script>

    <script>
        $(document).ready(function(){
            $('.selectpicker').selectpicker();

            $('select.selectpicker').on('change', function(){
                 var selected = $('.selectpicker option:selected').val();

                 $.get( "getGruposJogos.php", { id_categoria: selected } )
                          .done(function( data ) {
                                $("#conteudoDinamico").html(data);
                          } );
                    });

                  $.get( "getGruposJogos.php", { id_categoria: 1} )
                  .done(function( data ) {
                        $("#conteudoDinamico").html(data);
                  });
   
        });

    </script>

</body>

</html>
