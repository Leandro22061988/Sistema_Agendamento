<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div class="panel panel-danger">
				<div class="panel-heading">
					<h2>Promissoria</h2>
				</div>
				<?php 
				$cod = $_GET['cod'];
				$ven = $_GET['d'];
				$sqlia = "SELECT SUM(valor) as SOMA, codigo, cliente, produto, parcela, vencimento, pagamento FROM promissioria WHERE codigo='$cod'";
				$execa = $sql->query($sqlia);
				$exiba = mysqli_fetch_assoc($execa);
				?>
				<div class="panel-body">
					<a href="produto_vendas_promissoria_ver_print.php?cod=<?php echo $_GET["cod"] ?>&d=<?php echo $_GET["d"] ?>" target="_blank">
					<button type="button" class="btn btn-primary">Imprimir</button></a>
					<input type="button" class="btn btn-default" value="Voltar" onClick="history.go(-1)"> 
					<p></p>
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
							R$ <?php echo number_format($exiba["SOMA"],2,",",".") ?>
						</div>
						<div class="conteudo">
							<p>
								<strong>Cliente: </strong><br/>
								<?php echo $exiba["cliente"]; ?>
							</p>
							<strong>Produtos:</strong><br/>
							<?php 
								$sqlip = "SELECT * FROM promissioria WHERE codigo='$cod'";
								$execp = $sql->query($sqlip);
								while($produtos = mysqli_fetch_assoc($execp)){
									echo $produtos["produto"]."<br/>";
								}
							?>
							<br/>
							<p><strong>Parcela(s): <?php echo $exiba["parcela"]; ?></strong></p>
							
						</div>
						<div class="conteudo">
							<strong>Data do vencimento:</strong><br/>
							<?php 
								$da0 = $exiba["vencimento"];
								$da = date('d/m/Y', strtotime('+30 days', strtotime($da0)));
								echo $da0;
							?> <br/>
							<strong>Data do Pagamento:</strong><br/>
							<?php echo $exiba["pagamento"]; ?><br/>
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
</div>