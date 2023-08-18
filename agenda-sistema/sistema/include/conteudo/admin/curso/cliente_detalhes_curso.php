<div class="container" style="background-color: #fff;">
	<div class="row" style="padding: 20px 0px 0px 10px;">
  <?php 
	$id = $_GET["id"];
	$sqli = "SELECT * FROM adesao_curso WHERE id='$id'";
	$exec = $sql->query($sqli);
	$cont = mysqli_num_rows($exec);
	$exibir = mysqli_fetch_assoc($exec);
	?>
  
  <!-- Left-aligned media object -->
  <div class="media">
    </div>
    <div class="media-body">
		<br/>
		<div class="col-sm-6">
		<p><strong>Aluno: </strong><?php echo $exibir["nome"]; ?></p>
		<p><strong>Telefone: </strong><?php echo $exibir["telefone"]; ?></p>
		<p><strong>Celular: </strong><?php echo $exibir["celular"]; ?></p>
		<p><strong>E-mail: </strong><?php echo $exibir["email"]; ?></p>
		<p><strong>Curso: </strong><?php echo $exibir["curso"]; ?></p>
		</div>
		<div class="col-sm-6">
		<p><strong>Valor: </strong><?php echo "R$ ".number_format($exibir["valor"],2,",","."); ?></p>
		<p><strong>Período: </strong><?php echo $exibir["periodo"]; ?></p>
		<p><strong>Monitor: </strong><?php echo $exibir["profissional"]; ?></p>
		<p><strong>Forma de Pagamento: </strong><?php echo $exibir["pagamento"]; ?></p>
		<p><strong>Parcelamento: </strong><?php echo $exibir["parcelas"]."x"; ?></p>
		<p><strong>Valor das parcelas: </strong><?php echo number_format($exibir["val_parcelas"],2,",","."); ?></p>
		<p><strong>Juros: </strong><?php echo $exibir["juros"]."%"; ?></p>
		<p><strong>Data da adesão: </strong><?php echo $exibir["dia"]."/".$exibir["mes"]."/".$exibir["ano"]; ?></p>
		</div>
			
    </div>
  </div>
  <hr>
		<a href="contratos_adesao.php" title="Voltar">
			<button type="button" class="btn btn-default">Voltar para lista</button>
		</a>
  <hr>
</div>
</div>
