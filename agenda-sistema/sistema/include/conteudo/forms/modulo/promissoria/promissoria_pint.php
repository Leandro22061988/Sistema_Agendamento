<div class="container">
	<div class="row">
		<div class="col-sm-12">
				<div class="panel-heading">
				</div>
				<?php 
				$cod = $_GET['cod'];
				$ven = $_GET['d'];
				$sqlia = "SELECT * FROM promissoria WHERE codigo='$cod'";
				$execa = $sql->query($sqlia);
				$exiba = mysqli_fetch_assoc($execa);
			
				$c = $exiba["id_cliente"];
				?>
				<div class="panel-body">
					<div class="prom">
						<div class="top">
							Nota Promissoria<br/>
							n&deg; <?php echo $exiba["codigo"]; ?>
						</div>
						<div class="colunleft">
							Referente ao Contrato de Confissão de Dívida.
						</div>
						<div class="colunright">
							Esta nota sera corrigida mensalmente, após o vencimento terá o acréscimo de 1% ao mês.
						</div>
						<div class="mid">							
							R$ <?php echo number_format($exiba["valor"],2,",",".") ?>
						</div>
						<div class="conteudo">
							<p>
								<strong>Cliente: </strong><br/>
								<?php echo $exiba["cliente"]; ?>
							</p>
							<strong>Produtos:</strong><br/>
							<?php 
								$st = "Atendido";
								$dat = $exiba["data_ini"];
								$separa = explode("/", $dat) ;
								$d = $separa[0];
								$m = $separa[1];
								$a = $separa[2];
								$sqlip = "SELECT * FROM agenda WHERE id_cliente='$c' and status='$st' and dia='$d' and mes='$m' and ano='$a'";
								$execp = $sql->query($sqlip);
								while($servicos = mysqli_fetch_assoc($execp)){
									echo $servicos["servico"]."<br/>";
									
								}
							?>
							<br/>
							<?php
								
								$par = $exiba["parcela"] - 1; 
								if($par == 0){
									$val = 0;
								}else{
									$val = $par;
								}
							?>
							<p><strong>Parcela(s): <?php echo $val; ?></strong></p>
							
						</div>
						<div class="conteudo">
							<strong>Data do vencimento:</strong><br/>
							<?php 
								$da0 = $exiba["vencimento"];
								$da = date('d/m/Y', strtotime('+30 days', strtotime($da0)));
								echo $da;
							?> <br/>
							<strong>Data do Pagamento:</strong><br/>
							<?php date_default_timezone_set('America/Sao_Paulo'); echo date('d/m/Y'); ?><br/>
						</div>
						<div class="mid">
							<?php 
								$data = date('D');
								$mes = date('M');
								$dia = date('d');
								$ano = date('Y');

								$semana = array(
									'Sun' => 'Domingo',
									'Mon' => 'Segunda-Feira',
									'Tue' => 'Terca-Feira',
									'Wed' => 'Quarta-Feira',
									'Thu' => 'Quinta-Feira',
									'Fri' => 'Sexta-Feira',
									'Sat' => 'Sábado'
								);

								$mes_extenso = array(
									'Jan' => 'Janeiro',
									'Feb' => 'Fevereiro',
									'Mar' => 'Marco',
									'Apr' => 'Abril',
									'May' => 'Maio',
									'Jun' => 'Junho',
									'Jul' => 'Julho',
									'Aug' => 'Agosto',
									'Nov' => 'Novembro',
									'Sep' => 'Setembro',
									'Oct' => 'Outubro',
									'Dec' => 'Dezembro'
								);

							?>
							Cascavel - <?php echo $semana["$data"] . ", {$dia} de " . $mes_extenso["$mes"] . " de {$ano}"; ?>
						</div>
						<div class="assina">
							___________________________________<br/>
							<?php echo $exiba["cliente"]; ?><br/><br/>
							<p>Rua Grande do Sul 2151 - Centro - Cascavel<br/>
							CPF: 01702950956 - Telefone: (45) 2225-1670</p>
						</div>
					</div>
				</div>
			</div>
		</div>
</div>