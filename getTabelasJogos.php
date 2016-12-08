<?php
	$semana = $_GET['semana'];
	$dia = $_GET['dia'];

	if ($semana == 'Semana 1')
	{
		switch ($dia) {
			case 'Segunda':
				echo "
					<h3 class='text-center'> ABERTURA DOS JOGOS </h3>
				";
				break;

			case 'Terça':
				echo "<h3 class='text-center'> SEM JOGOS ESSE DIA </h3>";
				break;

			case 'Quarta':
				echo "
                    <!-- Quarta 16/9 G2 SANTA FELICIA  -->
                    <div class='panel panel-primary'>
                        <div class='panel-heading'>
                            <h3 class='panel-title text-center'>G2 SANTA FELICIA</h3>
                        </div>

                         <div class='panel-body'>
                            <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    13:30
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                     MIRIM
                                </div>
                                <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                    BM-1
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
                                    CURUMINS
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
                                     X 
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    EDUCATIVA
                                </div>
                            </div>

                             <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    14:10
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                     MIRIM
                                </div>
                                <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                    BM-6
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
                                    MEIRELES
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
                                     X 
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    LA SALLE
                                </div>
                            </div>

                             <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    14:50
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                     MIRIM
                                </div>
                                <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                    BM-3
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
                                    CURUMINS
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
                                     X 
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    LA SALLE
                                </div>
                            </div>

                            <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    15:30
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                     MIRIM
                                </div>
                                <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                    BM-4
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
                                    EDUCATIVA
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
                                     X 
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    MEIRELES
                                </div>
                            </div>

                             <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    16:10
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                     MIRIM
                                </div>
                                <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                    BM-2
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
                                    CURUMINS
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
                                     X 
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    MEIRELES
                                </div>
                            </div>

                            <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    16:50
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                     MIRIM
                                </div>
                                <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                    BM-5
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
                                    EDUCATIVA
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
                                     X 
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    LA SALLE
                                </div>
                            </div>
                         </div>
                    </div>

                    <!-- Quarta 16/9 G3 REDENÇÃO -->
                    <div class='panel panel-primary'>
                        <div class='panel-heading'>
                            <h3 class='panel-title text-center'>G3 REDENÇÃO</h3>
                        </div>

                         <div class='panel-body'>
                            <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    13:30
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                     MIRIM
                                </div>
                                <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                    FM7
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
                                    NEVES
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
                                     X 
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    BOTTA
                                </div>
                            </div>

                             <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    14:10
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                     MIRIM
                                </div>
                                <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                    FM-12
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
                                    ROCHA
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
                                     X 
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    INTERATIVO
                                </div>
                            </div>

                             <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    14:50
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                     MIRIM
                                </div>
                                <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                    FM-9
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
                                    NEVES
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
                                     X 
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    INTERATIVO
                                </div>
                            </div>

                            <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    15:30
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                     MIRIM
                                </div>
                                <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                    FM-10
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
                                    BOTTA
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
                                     X 
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    ROCHA
                                </div>
                            </div>

                             <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    16:10
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                     MIRIM
                                </div>
                                <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                    FM-8
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
                                    NEVES
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
                                     X 
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    ROCHA
                                </div>
                            </div>

                            <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    16:50
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                     MIRIM
                                </div>
                                <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                    FM-11
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
                                    BOTTA
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
                                     X 
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    INTERATIVO
                                </div>
                            </div>
                         </div>
                    </div>

                    <!-- Quarta 16/9 G4 ZUZÃO  -->
                    <div class='panel panel-primary'>
                        <div class='panel-heading'>
                            <h3 class='panel-title text-center'>G4 ZUZÃO</h3>
                        </div>

                         <div class='panel-body'>
                            <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    13:30
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                     INFANTIL
                                </div>
                                <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                    FM-1
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
                                    AMARAL
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
                                     X 
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    CARVALHO
                                </div>
                            </div>

                             <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    14:10
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                     INFANTIL
                                </div>
                                <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                    FM-6
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
                                    LIMA
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
                                     X 
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    ROCHA
                                </div>
                            </div>

                             <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    14:50
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                     INFANTIL
                                </div>
                                <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                    FM-3
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
                                    AMARAL
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
                                     X 
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    ROCHA
                                </div>
                            </div>

                            <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    15:30
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                     INFANTIL
                                </div>
                                <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                    FM-4
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
                                    CARVALHO
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
                                     X 
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    LIMA
                                </div>
                            </div>

                             <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    16:10
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                     INFANTIL
                                </div>
                                <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                    FM-2
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
                                    AMARAL
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
                                     X 
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    LIMA
                                </div>
                            </div>

                            <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    16:50
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                     INFANTIL
                                </div>
                                <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                    FM-5
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
                                    CARVALHO
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
                                     X 
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    ROCHA
                                </div>
                            </div>
                         </div>
                    </div>";
				break;

			case 'Quinta':
				echo "
					<!-- Quinta 17/9 G1 CAASO -->
					<div class='panel panel-primary'>
					    <div class='panel-heading'>
					        <h3 class='panel-title text-center'>G1 CAASO</h3>
					    </div>

					     <div class='panel-body'>
					        <div class='row'>
					            <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
					                13:30
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
					                 PRÉ-MIRIM
					            </div>
					            <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
					                FM-1
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
					                MEIRELES
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
					                 X 
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
					                FUKUAHARA
					            </div>
					        </div>

					         <div class='row'>
					            <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
					                14:10
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
					                 PRÉ-MIRIM
					            </div>
					            <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
					                FM-4
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
					                MORUZZI
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
					                 X 
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
					                LIA
					            </div>
					        </div>

					         <div class='row'>
					            <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
					                14:50
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
					                 PRÉ-MIRIM
					            </div>
					            <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
					                FM-2
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
					                MEIRELES
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
					                 X 
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
					                LA SALLE
					            </div>
					        </div>

					        <div class='row'>
					            <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
					                15:30
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
					                 PRÉ-MIRIM
					            </div>
					            <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
					                FM-5
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
					                MORUZZI
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
					                 X 
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
					                CURUMINS
					            </div>
					        </div>

					         <div class='row'>
					            <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
					                16:10
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
					                 PRÉ-MIRIM
					            </div>
					            <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
					                FM-3
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
					                FUKUAHARA
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
					                 X 
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
					                LA SALLE
					            </div>
					        </div>

					        <div class='row'>
					            <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
					                16:50
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
					                 PRÉ-MIRIM
					            </div>
					            <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
					                FM-6
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
					                LIA
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
					                 X 
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
					                CURUMINS
					            </div>
					        </div>
					     </div>
					</div>

					<!-- Quinta 17/9 G3 REDENÇÃO -->
					<div class='panel panel-primary'>
					    <div class='panel-heading'>
					        <h3 class='panel-title text-center'>G3 REDENÇÃO</h3>
					    </div>

					     <div class='panel-body'>
					        <div class='row'>
					            <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
					                13:30
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
					                MIRIM
					            </div>
					            <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
					                FM-1
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
					                LA SALLE
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
					                 X 
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
					                CURUMINS
					            </div>
					        </div>

					         <div class='row'>
					            <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
					                14:10
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
					                 MIRIM
					            </div>
					            <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
					                FM-6
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
					                EDUCATIVA
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
					                 X 
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
					                AMARAL
					            </div>
					        </div>

					         <div class='row'>
					            <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
					                14:50
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
					                 MIRIM
					            </div>
					            <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
					                FM-3
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
					                LA SALLE
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
					                 X 
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
					                AMARAL
					            </div>
					        </div>

					        <div class='row'>
					            <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
					                15:30
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
					                 MIRIM
					            </div>
					            <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
					                FM-4
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
					                CURUMINS
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
					                 X 
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
					                EDUCATIVA
					            </div>
					        </div>

					         <div class='row'>
					            <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
					                16:10
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
					                 MIRIM
					            </div>
					            <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
					                FM-2
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
					                LA SALLE
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
					                 X 
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
					                EDUCATIVA
					            </div>
					        </div>

					        <div class='row'>
					            <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
					                16:50
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
					                 MIRIM
					            </div>
					            <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
					                FM-5
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
					                CURUMINS
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
					                 X 
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
					                AMARAL
					            </div>
					        </div>
					     </div>
					</div>

					<!-- Quinta 17/9 G4 ZUZÃO -->
					<div class='panel panel-primary'>
					    <div class='panel-heading'>
					        <h3 class='panel-title text-center'>G4 ZUZÃO</h3>
					    </div>

					     <div class='panel-body'>
					        <div class='row'>
					            <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
					                13:30
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
					                INFANTIL
					            </div>
					            <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
					                HM-2    
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
					                LIMA
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
					                 X 
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
					                INTERATIVO
					            </div>
					        </div>

					         <div class='row'>
					            <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
					                14:10
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
					                 INFANTIL
					            </div>
					            <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
					                HM-3
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
					                LA SALLE
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
					                 X 
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
					                INTERATIVO
					            </div>
					        </div>

					         <div class='row'>
					            <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
					                14:50
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
					                 INFANTIL
					            </div>
					            <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
					                HM-1
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
					                LIMA
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
					                 X 
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
					                LA SALLE
					            </div>
					        </div>

					        <div class='row'>
					            <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
					                15:30
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
					                 INFANTIL
					            </div>
					            <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
					                HM-4
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
					                CARVALHO
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
					                 X 
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
					                EDUCATIVA
					            </div>
					        </div>

					         <div class='row'>
					            <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
					                16:10
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
					                 INFANTIL
					            </div>
					            <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
					                HM-5
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
					                CARVALHO
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
					                 X 
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
					                MEIRELES
					            </div>
					        </div>

					        <div class='row'>
					            <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
					                16:50
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
					                 INFANTIL
					            </div>
					            <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
					                HM-6
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
					                EDUCATIVA
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
					                 X 
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
					                MEIRELES
					            </div>
					        </div>



					     </div>
					</div>";
				break;

			case 'Sexta':
				echo "
                    <!-- Sexta 18/9 G2 SANTA FELICIA -->
                    <div class='panel panel-primary'>
                        <div class='panel-heading'>
                            <h3 class='panel-title text-center'>G2 SANTA FELICIA</h3>
                        </div>

                         <div class='panel-body'>
                            <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    13:30
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                     INFANTIL
                                </div>
                                <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                    BM-1
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
                                    INTERATIVO
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
                                     X 
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    EDUCATIVA
                                </div>
                            </div>

                             <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    14:10
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                     INFANTIL
                                </div>
                                <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                    BM-6
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
                                    MEIRELES
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
                                     X 
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    LA SALLE
                                </div>
                            </div>

                             <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    14:50
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                     INFANTIL
                                </div>
                                <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                    BM-3
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
                                    INTERATIVO
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
                                     X 
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    LA SALLE
                                </div>
                            </div>

                            <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    15:30
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                     INFANTIL
                                </div>
                                <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                    BM-4
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
                                    EDUCATIVA
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
                                     X 
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    MEIRELES
                                </div>
                            </div>

                             <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    16:10
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                     INFANTIL
                                </div>
                                <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                    BM-2
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
                                    INTERATIVO
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
                                     X 
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    MEIRELES
                                </div>
                            </div>

                            <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    16:50
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                     INFANTIL
                                </div>
                                <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                    BM-5
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
                                    EDUCATIVA
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
                                     X 
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    LA SALLE
                                </div>
                            </div>
                         </div>
                    </div>

                    <!-- Sexta 18/9 G3 REDENÇÃO -->
                    <div class='panel panel-primary'>
                        <div class='panel-heading'>
                            <h3 class='panel-title text-center'>G3 REDENÇÃO</h3>
                        </div>

                         <div class='panel-body'>
                            <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    14:10
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                     PRÉ-MIRIM
                                </div>
                                <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                    FF-1
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
                                    LA SALLE
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
                                     X 
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    LIA
                                </div>
                            </div>

                            <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    14:50
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                     PRÉ-MIRIM
                                </div>
                                <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                    HF-1
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
                                    LA SALLE
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
                                     X 
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    FUKUAHARA
                                </div>
                            </div>

                            <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    15:30
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                     PRÉ-MIRIM
                                </div>
                                <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                    FF-2
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
                                    LA SALLE
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
                                     X 
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    FUKUAHARA
                                </div>
                            </div>

                            <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    16:10
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                     PRÉ-MIRIM
                                </div>
                                <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                    HM-1
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
                                    LA SALLE
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
                                     X 
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    FUKUAHARA
                                </div>
                            </div>

                            <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    16:50
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                     PRÉ-MIRIM
                                </div>
                                <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                    FF-3
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
                                    LIA
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
                                     X 
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    FUKUAHARA
                                </div>
                            </div>
                         </div>
                    </div>

                    <!-- Sexta 18/9 G4 ZUZÃO -->
                    <div class='panel panel-primary'>
                        <div class='panel-heading'>
                            <h3 class='panel-title text-center'>G4 ZUZÃO</h3>
                        </div>

                         <div class='panel-body'>
                            <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    13:30
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                     MIRIM
                                </div>
                                <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                    FF-4
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
                                    BOTTA
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
                                     X 
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    EDUCATIVA
                                </div>
                            </div>

                             <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    14:10
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                     MIRIM
                                </div>
                                <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                    FF-5
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
                                    BOTTA
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
                                     X 
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    MEIRELES
                                </div>
                            </div>

                             <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    14:50
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                     MIRIM
                                </div>
                                <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                    FF-6
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
                                    EDUCATIVA
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
                                     X 
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    MEIRELES
                                </div>
                            </div>

                         </div>
                    </div>

                    <!-- Sexta 18/9 SESI -->
                    <div class='panel panel-primary'>
                        <div class='panel-heading'>
                            <h3 class='panel-title text-center'>SESI</h3>
                        </div>

                         <div class='panel-body'>
                            <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    08:00
                                </div>
                                <div class='col-xs-4 col-sm-4 col-md-4 col-lg-4'>
                                    TODAS AS CATEGORIAS
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    ATLETISMO
                                </div>
                                <div class='col-xs-5 col-sm-5 col-md-5 col-lg-5 '>
                                    INSCRIÇÕES
                                </div>
                            </div>

                            <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    09:00
                                </div>
                                <div class='col-xs-4 col-sm-4 col-md-4 col-lg-4'>
                                    TODAS AS CATEGORIAS
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    ATLETISMO
                                </div>
                                <div class='col-xs-5 col-sm-5 col-md-5 col-lg-5 '>
                                    INICIO DAS PROVAS
                                </div>
                            </div>
                         </div>
                    </div>";
				break;

			case 'Sabado':
				echo "
					<!-- Sábado 19/9 LUIZÃO -->
                    <div class='panel panel-primary'>
                        <div class='panel-heading'>
                            <h3 class='panel-title text-center'>LUIZÃO</h3>
                        </div>

                         <div class='panel-body'>
                            <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    07:00
                                </div>
                                <div class='col-xs-4 col-sm-4 col-md-4 col-lg-4'>
                                    TODAS CATEGORIAS
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    NATAÇÃO
                                </div>
                                <div class='col-xs-5 col-sm-5 col-md-5 col-lg-5 '>
                                    INSCRIÇÕES E AQUECIMENTO
                                </div>
                            </div>

                             <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    08:00
                                </div>
                                <div class='col-xs-4 col-sm-4 col-md-4 col-lg-4'>
                                    TODAS CATEGORIAS
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    NATAÇÃO
                                </div>
                                <div class='col-xs-5 col-sm-5 col-md-5 col-lg-5 '>
                                    INICIO DAS PROVAS
                                </div>
                            </div>
                         </div>
                    </div>

                    <!-- Sábado 19/9 G1 CAASO -->
                    <div class='panel panel-primary'>
                        <div class='panel-heading'>
                            <h3 class='panel-title text-center'>G1 CAASO</h3>
                        </div>

                         <div class='panel-body'>
                            <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    14:00
                                </div>
                                <div class='col-xs-4 col-sm-4 col-md-4 col-lg-4'>
                                    TODAS AS CATEGORIAS
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    KARATE
                                </div>
                                <div class='col-xs-5 col-sm-5 col-md-5 col-lg-5 '>
                                    INICIO DAS PROVAS
                                </div>
                            </div>
                         </div>
                    </div>";
				break;
		}
	}
	else
	{
		switch ($dia) {
			case 'Domingo':
				echo "
					<!-- Domingo 19/9 G1 CAASO -->
                    <div class='panel panel-primary'>
                        <div class='panel-heading'>
                            <h3 class='panel-title text-center'>G1 CAASO</h3>
                        </div>

                         <div class='panel-body'>
                            <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    09:00
                                </div>
                                <div class='col-xs-4 col-sm-4 col-md-4 col-lg-4'>
                                    TODAS AS CATEGORIAS
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    JUDÔ
                                </div>
                                <div class='col-xs-5 col-sm-5 col-md-5 col-lg-5 '>
                                    INICIO DAS PROVAS
                                </div>
                            </div>
                         </div>
                    </div>";
				break;

			case 'Segunda':
				echo "
                    <!-- Segunda 21/9 G1 CAASO -->
                    <div class='panel panel-primary'>
                        <div class='panel-heading'>
                            <h3 class='panel-title text-center'>G1 CAASO</h3>
                        </div>

                         <div class='panel-body'>
                            <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    13:30
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                     MIRIM
                                </div>
                                <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                    HM-1
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
                                    LA SALLE
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
                                     X 
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    FUKUHARA
                                </div>
                            </div>

                             <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    14:10
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                     MIRIM
                                </div>
                                <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                    HM-6
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
                                    EDUCATIVA
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
                                     X 
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    MEIRELES
                                </div>
                            </div>

                             <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    14:50
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                     MIRIM
                                </div>
                                <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                    HM-3
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
                                    LA SALLE
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
                                     X 
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    MEIRELES
                                </div>
                            </div>

                            <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    15:30
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                     MIRIM
                                </div>
                                <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                    HM-4
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
                                    FUKUHARA
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
                                     X 
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    EDUCATIVA
                                </div>
                            </div>

                             <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    16:10
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                     MIRIM
                                </div>
                                <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                    HM-2
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
                                    LA SALLE
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
                                     X 
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    EDUCATIVA
                                </div>
                            </div>

                             <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    16:50
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                     MIRIM
                                </div>
                                <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                    HM-5
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
                                    FUKUHARA
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
                                     X 
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    MEIRELES
                                </div>
                            </div>
                         </div>
                    </div>

                    <!-- Segunda 21/9 G3 REDENÇÃO -->
					<div class='panel panel-primary'>
					    <div class='panel-heading'>
					        <h3 class='panel-title text-center'>G3 REDENÇÃO</h3>
					    </div>

					     <div class='panel-body'>
					        <div class='row'>
					            <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
					                13:30
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
					                 INFANTIL
					            </div>
					            <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
					                FM-7
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
					                LA SALLE
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
					                 X 
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
					                GUIAO
					            </div>
					        </div>

					         <div class='row'>
					            <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
					                14:10
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
					                 INFANTIL
					            </div>
					            <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
					                FM-12
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
					                INTERATIVO
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
					                 X 
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
					                BOTTA
					            </div>
					        </div>

					         <div class='row'>
					            <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
					                14:50
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
					                 INFANTIL
					            </div>
					            <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
					                FM-9
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
					                LA SALLE
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
					                 X 
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
					                BOTTA
					            </div>
					        </div>

					        <div class='row'>
					            <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
					                15:30
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
					                 INFANTIL
					            </div>
					            <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
					                FM-10
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
					                GUIAO
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
					                 X 
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
					                INTERATIVO
					            </div>
					        </div>

					         <div class='row'>
					            <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
					                16:10
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
					                 INFANTIL
					            </div>
					            <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
					                FM-8
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
					                LA SALLE
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
					                 X 
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
					                INTERATIVO
					            </div>
					        </div>

					         <div class='row'>
					            <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
					                16:50
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
					                 INFANTIL
					            </div>
					            <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
					                FM-11
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
					                GUIAO
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
					                 X 
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
					                BOTTA
					            </div>
					        </div>
					     </div>
					</div>

                    <!-- Segunda 21/9 G4 ZUZÃO -->
                    <div class='panel panel-primary'>
                        <div class='panel-heading'>
                            <h3 class='panel-title text-center'>G4 ZUZÃO</h3>
                        </div>

                         <div class='panel-body'>
                            <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    13:30
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                     INFANTIL
                                </div>
                                <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                    FM-13
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
                                    MEIRELES
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
                                     X 
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    EDUCATIVA
                                </div>
                            </div>

                             <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    14:10
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                     INFANTIL
                                </div>
                                <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                    FM-14
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
                                    MEIRELES
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
                                     X 
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    OLIVEIRA
                                </div>
                            </div>

                             <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    14:50
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                     INFANTIL
                                </div>
                                <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                    FM-15
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
                                    EDUCATIVA
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
                                     X 
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    OLIVEIRA
                                </div>
                            </div>

                            <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    15:30
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                     MIRIM
                                </div>
                                <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                    FM-13
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
                                    CESAR
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
                                     X 
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    FUKUHARA
                                </div>
                            </div>

                             <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    16:10
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                     MIRIM
                                </div>
                                <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                    FM-14
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
                                    CESAR
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
                                     X 
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    MEIRELES
                                </div>
                            </div>

                             <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    16:50
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                     MIRIM
                                </div>
                                <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                    FM-15
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
                                    FUKUHARA
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
                                     X 
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    MEIRELES
                                </div>
                            </div>
                         </div>
                    </div>

                    <!-- Segunda 21/9 Milton Olaio Filho -->
                    <div class='panel panel-primary'>
                        <div class='panel-heading'>
                            <h3 class='panel-title text-center'>Milton Olaio Filho</h3>
                        </div>

                         <div class='panel-body'>
                            <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    13:30
                                </div>
                                <div class='col-xs-4 col-sm-4 col-md-4 col-lg-4'>
                                    TODAS AS CATEGORIAS
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    DAMAS 
                                </div>
                                <div class='col-xs-5 col-sm-5 col-md-5 col-lg-5 '>
                                    INICIO DOS JOGOS
                                </div>
                            </div>
                         </div>
                    </div>";

				break;

			case 'Terça':
				echo "
                    <!-- Terça 22/9 G2 SANTA FELICIA -->
                    <div class='panel panel-primary'>
                        <div class='panel-heading'>
                            <h3 class='panel-title text-center'>G2 SANTA FELICIA</h3>
                        </div>

                         <div class='panel-body'>
                            <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    13:30
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                     MIRIM
                                </div>
                                <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                    VM-1
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
                                    CURUMINS
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
                                     X 
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    EDUCATIVA
                                </div>
                            </div>

                             <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    14:10
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                     MIRIM
                                </div>
                                <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                    VM-6
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
                                    FUKUHARA
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
                                     X 
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    LA SALLE
                                </div>
                            </div>

                             <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    14:50
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                     MIRIM
                                </div>
                                <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                    VM-3
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
                                    CURUMINS
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
                                     X 
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    LA SALLE
                                </div>
                            </div>

                            <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    15:30
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                     MIRIM
                                </div>
                                <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                    VM-4
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
                                    EDUCATIVA
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
                                     X 
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    FUKUHARA
                                </div>
                            </div>

                             <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    16:10
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                     MIRIM
                                </div>
                                <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                    VM-2
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
                                    CURUMINS
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
                                     X 
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    FUKUHARA
                                </div>
                            </div>

                             <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    16:50
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                     MIRIM
                                </div>
                                <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                    VM-5
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
                                    EDUCATIVA
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
                                     X 
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    LA SALLE
                                </div>
                            </div>
                         </div>
                    </div>

                    <!-- Terça 22/9 G4 ZUZÃO -->
                    <div class='panel panel-primary'>
                        <div class='panel-heading'>
                            <h3 class='panel-title text-center'>G4 ZUZÃO</h3>
                        </div>

                         <div class='panel-body'>
                            <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    13:30
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                     INFANTIL
                                </div>
                                <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                    FF-1
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
                                    LA SALLE
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
                                     X 
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    INTERATIVO
                                </div>
                            </div>

                             <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    14:10
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                     INFANTIL
                                </div>
                                <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                    FF-6
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
                                    BOTTA
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
                                     X 
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    EDUCATIVA
                                </div>
                            </div>

                             <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    14:50
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                     INFANTIL
                                </div>
                                <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                    FF-3
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
                                    LA SALLE
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
                                     X 
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    EDUCATIVA
                                </div>
                            </div>

                            <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    15:30
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                     INFANTIL
                                </div>
                                <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                    FF-4
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
                                    INTERATIVO
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
                                     X 
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    BOTTA
                                </div>
                            </div>

                             <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    16:10
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                     INFANTIL
                                </div>
                                <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                    FF-2
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
                                    LA SALLE
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
                                     X 
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    BOTTA
                                </div>
                            </div>

                             <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    16:50
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                     INFANTIL
                                </div>
                                <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                    FF-5
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
                                    INTERATIVO
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
                                     X 
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    EDUCATIVA
                                </div>
                            </div>
                         </div>
                    </div>

					<!-- Terça 22/9 Milton Olaio Filho -->
                    <div class='panel panel-primary'>
                        <div class='panel-heading'>
                            <h3 class='panel-title text-center'>Milton Olaio Filho</h3>
                        </div>

                         <div class='panel-body'>
                            <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    13:30
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    PRE-MIRIM
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    XADREZ
                                </div>
                                <div class='col-xs-7 col-sm-7 col-md-7 col-lg-7 '>
                                    INICIO DOS JOGOS
                                </div>
                            </div>

                            <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    13:30
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    MIRIM
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    XADREZ
                                </div>
                                <div class='col-xs-7 col-sm-7 col-md-7 col-lg-7 '>
                                    INICIO DOS JOGOS
                                </div>
                            </div>
                         </div>
                    </div>

                    <!-- Terça 22/9 G1 CAASO -->
                    <div class='panel panel-primary'>
                        <div class='panel-heading'>
                            <h3 class='panel-title text-center'>G1 CAASO</h3>
                        </div>

                        <div class='panel-body'>
                            <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    13:30
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    INFANTIL
                                </div>
                                <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                    TENIS
                                </div>
                                <div class='col-xs-4 col-sm-4 col-md-4 col-lg-4 '>
                                    INICIO DAS PROVAS
                                </div>
                            </div>

                            <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    13:30
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    INFANTIL
                                </div>
                                <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                    TENIS DE MESA
                                </div>
                                <div class='col-xs-4 col-sm-4 col-md-4 col-lg-4 '>
                                    INICIO DAS PROVAS
                                </div>
                            </div>
                        </div>
                    </div>";
				break;

			case 'Quarta':
				echo "
                    <!-- Quarta 23/9 G3 REDENÇÃO  -->
                    <div class='panel panel-primary'>
                        <div class='panel-heading'>
                            <h3 class='panel-title text-center'>G3 REDENÇÃO</h3>
                        </div>

                        <div class='panel-body'>
                            <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    13:30
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                     MIRIM
                                </div>
                                <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                    FM-Q1
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
                                    2B
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
                                     X 
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    2C
                                </div>
                            </div>

                             <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    14:10
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                     MIRIM
                                </div>
                                <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                    FM-Q2
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
                                    2A
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
                                     X 
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    1C
                                </div>
                            </div>

                             <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    14:50
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                     INFANTIL
                                </div>
                                <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                    FM-Q1
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
                                    2B
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
                                     X 
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    2C
                                </div>
                            </div>

                            <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    15:30
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                     INFANTIL
                                </div>
                                <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                    FM-Q2
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
                                    2A
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
                                     X 
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    1C
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Quarta 23/9   -->
                    <div class='panel panel-primary'>
                        <div class='panel-heading'>
                            <h3 class='panel-title text-center'>G4 ZUZÃO</h3>
                        </div>

                        <div class='panel-body'>
                            <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    13:30
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                     MIRIM
                                </div>
                                <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                    FF-1
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
                                    CURUMINS
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
                                     X 
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    LA SALLE
                                </div>
                            </div>

                             <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    14:10
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                     MIRIM
                                </div>
                                <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                    FF-2
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
                                    CURUMINS
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
                                     X 
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    INTERATIVO
                                </div>
                            </div>

                             <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    14:50
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                     MIRIM
                                </div>
                                <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                    FF-3
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
                                    LA SALLE
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
                                     X 
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    INTERATIVO
                                </div>
                            </div>

                            <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    15:30
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                     INFANTIL
                                </div>
                                <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                    HM-S1
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
                                    1A
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
                                     X 
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    2B
                                </div>
                            </div>

                             <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    16:10
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                     INFANTIL
                                </div>
                                <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                    HM-S2
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
                                    1B
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
                                     X 
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    2A
                                </div>
                            </div>

                            <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    16:50
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                     INFANTIL
                                </div>
                                <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                    HM-F
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
                                    HM-S1
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
                                     X 
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    HM-S2
                                </div>
                            </div>
                         </div>
                    </div>

                    <!-- Quarta 23/9 Milton Olaio Filho -->
                    <div class='panel panel-primary'>
                        <div class='panel-heading'>
                            <h3 class='panel-title text-center'>Milton Olaio Filho</h3>
                        </div>

                         <div class='panel-body'>
                            <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    13:30
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    INFANTIL
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    XADREZ
                                </div>
                                <div class='col-xs-7 col-sm-7 col-md-7 col-lg-7 '>
                                    INICIO DOS JOGOS
                                </div>
                            </div>
                         </div>
                    </div>

                    <!-- Quarta 23/9 G1 CAASO -->
                    <div class='panel panel-primary'>
                        <div class='panel-heading'>
                            <h3 class='panel-title text-center'>G1 CAASO</h3>
                        </div>

                         <div class='panel-body'>
                            <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    13:30
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    PRÉ-MIRIM
                                </div>
                                <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                    TENIS
                                </div>
                                <div class='col-xs-4 col-sm-4 col-md-4 col-lg-4 '>
                                    INICIO DAS PROVAS
                                </div>
                            </div>

                            <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    13:30
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    MIRIM
                                </div>
                                <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                    TENIS
                                </div>
                               <div class='col-xs-4 col-sm-4 col-md-4 col-lg-4 '>
                                    INICIO DAS PROVAS
                                </div>
                            </div>

                            <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    13:30
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    PRÉ-MIRIM
                                </div>
                                <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                    TENIS DE MESA
                                </div>
                                <div class='col-xs-4 col-sm-4 col-md-4 col-lg-4 '>
                                    INICIO DAS PROVAS
                                </div>
                            </div>

                            <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    13:30
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    MIRIM
                                </div>
                                <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                    TENIS DE MESA
                                </div>
                                <div class='col-xs-4 col-sm-4 col-md-4 col-lg-4 '>
                                    INICIO DAS PROVAS
                                </div>
                            </div>
                         </div>
                    </div>";
				break;

			case 'Quinta':
				echo "
                    <!-- Quinta 24/9 G2 SANTA FELICIA -->
                    <div class='panel panel-primary'>
                        <div class='panel-heading'>
                            <h3 class='panel-title text-center'>G2 SANTA FELICIA</h3>
                        </div>

                         <div class='panel-body'>
                            <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    13:30
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                     INFANTIL
                                </div>
                                <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                    VF-1
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
                                    INTERATIVO      
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
                                     X 
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    EDUCATIVA
                                </div>
                            </div>

                             <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    14:10
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                     INFANTIL
                                </div>
                                <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                    VF-2
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
                                    INTERATIVO
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
                                     X 
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    LA SALLE
                                </div>
                            </div>


                            <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    14:50
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                     INFANTIL
                                </div>
                                <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                    VF-3
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
                                    EDUCATIVA
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
                                     X 
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    LA SALLE
                                </div>
                            </div>

                            <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    15:30
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                     PRÉ-MIRIM
                                </div>
                                <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                    VF-1
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
                                    CURUMINS
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
                                     X 
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    FUKUHARA
                                </div>
                            </div>
                         </div>
                    </div>

					<!-- Quinta 24/9 G3 REDENÇÃO -->
                    <div class='panel panel-primary'>
                        <div class='panel-heading'>
                            <h3 class='panel-title text-center'>G3 REDENÇÃO</h3>
                        </div>

                         <div class='panel-body'>
                            <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    13:30
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                     PRÉ-MIRIM
                                </div>
                                <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                    FM-S1
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
                                    1A      
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
                                     X 
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    2B
                                </div>
                            </div>

                             <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    14:10
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                     PRÉ-MIRIM
                                </div>
                                <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                    FM-S2
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
                                    1B
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
                                     X 
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    2A
                                </div>
                            </div>

                             <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    14:50
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                     MIRIM
                                </div>
                                <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                    FF-S2
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
                                    1B
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
                                     X 
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    2A
                                </div>
                            </div>

                            <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    15:30
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                     MIRIM
                                </div>
                                <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                    FF-S1
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
                                    1A
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
                                     X 
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    2B
                                </div>
                            </div>

                             <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    16:10
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                     PRÉ-MIRIM
                                </div>
                                <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                    FM-F
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
                                    FM-S1
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
                                     X 
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    FM-S2
                                </div>
                            </div>

                            <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    16:50
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                     MIRIM
                                </div>
                                <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                    FF-F
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
                                    FF-S1
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
                                     X 
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    FF-S2
                                </div>
                            </div>
                         </div>
                    </div>";
				break;

			case 'Sexta':
				echo "
				    <!-- Sexta 25/9 G1 CAASO -->
					<div class='panel panel-primary'>
					    <div class='panel-heading'>
					        <h3 class='panel-title text-center'>G1 CAASO</h3>
					    </div>

					     <div class='panel-body'>
					        <div class='row'>
					            <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
					                13:30
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
					                 MIRIM
					            </div>
					            <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
					                FM-S1
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
					                1A
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
					                 X 
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
					                FM-Q1
					            </div>
					        </div>

					         <div class='row'>
					            <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
					                14:10
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
					                 MIRIM
					            </div>
					            <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
					                FM-S2
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
					                1B
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
					                 X 
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
					                FM-Q2
					            </div>
					        </div>

					         <div class='row'>
					            <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
					                14:50
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
					                INFANTIL
					            </div>
					            <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
					                FM-S1
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
					                1A
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
					                 X 
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
					                FM-Q1
					            </div>
					        </div>

					        <div class='row'>
					            <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
					                15:30
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
					                INFANTIL
					            </div>
					            <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
					                FM-S2
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
					                1B
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
					                 X 
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
					                FM-Q2
					            </div>
					        </div>

					         <div class='row'>
					            <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
					                16:10
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
					                 MIRIM
					            </div>
					            <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
					                FM-F
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
					                FM-S1
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
					                 X 
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
					                FM-S2
					            </div>
					        </div>

					         <div class='row'>
					            <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
					                16:50
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
					                 INFANTIL
					            </div>
					            <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
					                FM-F
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
					                FM-S1
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
					                 X 
					            </div>
					            <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
					                FM-S2
					            </div>
					        </div>
					     </div>
					</div>

					<!-- Sexta 25/9 G2 SANTA FELICIA -->
                    <div class='panel panel-primary'>
                        <div class='panel-heading'>
                            <h3 class='panel-title text-center'>G2 ZUZÃO</h3>
                        </div>

                         <div class='panel-body'>
                            <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    13:30
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                     MIRIM
                                </div>
                                <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                    VF-1
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
                                    CURUMINS
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
                                     X 
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    INTERATIVO
                                </div>
                            </div>

                            <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    14:10
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                     MIRIM
                                </div>
                                <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                    VF-6
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
                                    EDUCATIVA
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
                                     X 
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    LA SALLE
                                </div>
                            </div>

                            <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    14:50
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                     MIRIM
                                </div>
                                <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                    VF-3
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
                                    CURUMINS
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
                                     X 
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    LA SALLE
                                </div>
                            </div>

                            <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    15:30
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                     MIRIM
                                </div>
                                <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                    VF-4
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
                                    INTERATIVO
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
                                     X 
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    EDUCATIVA
                                </div>
                            </div>

                             <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    16:10
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                     MIRIM
                                </div>
                                <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                    VF-5
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
                                    INTERATIVO
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
                                     X 
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    LA SALLE
                                </div>
                            </div>

                            <div class='row'>
                                <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center'>
                                    16:50
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                     MIRIM
                                </div>
                                <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                    VF-2
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right'>
                                    CURUMINS
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2  text-center'>
                                     X 
                                </div>
                                <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
                                    EDUCATIVA
                                </div>
                            </div>
                         </div>
                    </div>";
				break;
		}
	}

?>