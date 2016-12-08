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
				                <li><a href="regulamento.php">Regulamento</a></li>
				                <li><a href="#">Galeria</a></li>		
				                <li><a href="gruposJogos.php">Grupos e Jogos</a></li>				              
				                <li><a href="tabelas.php">Tabelas</a></li>				                
				                <li><a href="#">Classificação</a></li>
			                </ul>                    		                    	                    	
	                    </div>
	                </div>
					<legend><h3 class="text-center"><b>Tabelas de jogos</b></h3 ></legend>
                    <div class="row" style="padding: 10px;">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	                         <div class="row">
	                         	<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
	                         		 <h5 ><b>Selecione a semana e o dia: </b></h5>
	                         	</div>
	                         	<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
	                         		 <select class="selectpicker" id="selectSemana">
			                            <option>Semana 1</option>
			                            <option>Semana 2</option>
			                        </select>
	                         	</div>
	                         	<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
	                         		<select class="selectpicker" id="selectDia">
			                            <option>Segunda</option>
			                            <option>Terça</option>
			                            <option>Quarta</option>
			                            <option>Quinta</option>
			                            <option>Sexta</option>
			                            <option>Sabado</option>
			                        </select>
	                         	</div>
	                         </div>
    					
	                        <div id="conteudoSemanas" style="padding: 10px;">
	                            
	                        </div> 
							
							<hr>
	                        <div class="caption-full text-center">                  
		                        <h3>Clique no botão de download para baixar a tabela completa</h3>
		                        <br/>
		                        <a href="TabelaJogos.pdf">
		                            <button type="button" class="btn btn-default btn-lg"> Download </button>
		                        </a>
		                        <br/><br/><br/>
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

            $('#selectSemana').selectpicker('val', 'Semana 1');
            $('#selectDia').selectpicker('val', 'Segunda');
                    
            $.get( "getTabelasJogos.php", { "semana": "Semana 1", "dia": "Segunda" })
                .done(function( data ) {
                $("#conteudoSemanas").html(data);
            });
            
            $('select#selectSemana').on('change', function(){     
                var semana = $('#selectSemana option:selected').val();           

                if (semana == 'Semana 1'){                    

                    $('#selectDia').empty().append("<option>Segunda</option><option>Terça</option><option>Quarta</option><option>Quinta</option><option>Sexta</option><option>Sabado</option>"); 
                    $('#selectDia').selectpicker('val', 'Segunda');
                    $('.selectpicker').selectpicker('refresh');

                    $.get( "getTabelasJogos.php", { "semana": semana, "dia": "Segunda" })
                    .done(function( data ) {
                        $("#conteudoSemanas").html(data);
                    });
                }
                else {
                    $('#selectDia').empty().append("<option>Domingo</option><option>Segunda</option><option>Terça</option><option>Quarta</option><option>Quinta</option><option>Sexta</option>");
                    $('#selectDia').selectpicker('val', 'Domingo'); 
                    $('.selectpicker').selectpicker('refresh');

                    $.get( "getTabelasJogos.php", { "semana": semana, "dia": "Domingo" })
                        .done(function( data ) {
                        $("#conteudoSemanas").html(data);
                    });

                }

            });

            $('select#selectDia').on('change', function(event){ 

                var dia = event.currentTarget['value'];
                var semana = $('#selectSemana option:selected').val();
                    
                $.get( "getTabelasJogos.php", { "semana": semana, "dia": dia })
                    .done(function( data ) {
                        $("#conteudoSemanas").html(data);
                });
            });                
        });



    
    </script>

</body>

</html>
