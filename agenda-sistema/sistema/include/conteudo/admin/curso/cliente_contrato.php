<div class="container" style="background-color: #fff;">
	<div class="row" style="padding: 20px 0px 0px 10px;">
  <?php 
	$id = $_GET["id"];
	$cu = $_GET["c"];
	$fu = $_GET["fun"];
		
	$emp = "SELECT * FROM empresa";
	$exep = $sql->query($emp);
	$contemp = mysqli_num_rows($exep);
	$exibemp = mysqli_fetch_assoc($exep);
		
	$cur = "SELECT * FROM curso WHERE nome='$cu'";
	$excu = $sql->query($cur);
	$contcu = mysqli_num_rows($excu);
	$exibcu = mysqli_fetch_assoc($excu);

	$alun = "SELECT * FROM aluno WHERE id='$id'";
	$exeal = $sql->query($alun);
	$contal = mysqli_num_rows($exeal);
	$exibal = mysqli_fetch_assoc($exeal);

	$sqli = "SELECT * FROM contrato WHERE curso='$cu'";
	$exec = $sql->query($sqli);
	$cont = mysqli_num_rows($exec);
	$exibir = mysqli_fetch_assoc($exec);
	
	$fun = "SELECT * FROM funcionario WHERE nome='$fu'";
	$exfu = $sql->query($fun);
	$exibf = mysqli_fetch_assoc($exfu);
	?>
  
  <!-- Left-aligned media object -->
		
	<form method="post" action="include/insert/adesao_curso.php">
		<input type="hidden" name="nome" value="<?php echo $exibal["nome"]; ?>">
		<input type="hidden" name="aluno" value="<?php echo $exibal["id"]; ?>">
		<input type="hidden" name="telefone" value="<?php echo $exibal["telefone"] ?>">
		<input type="hidden" name="celular" value="<?php echo $exibal["celular"] ?>">
		<input type="hidden" name="email" value="<?php echo $exibal["email"]; ?>">
		<input type="hidden" name="curso" value="<?php echo $exibcu["nome"] ?>">
		<input type="hidden" name="valor" value="<?php echo $exibcu["valor"] ?>">
		
		<input type="hidden" name="forma" value="<?php echo $_GET["forma"]; ?>">
		<input type="hidden" name="parc" value="<?php echo $_GET["parc"]; ?>">
		<input type="hidden" name="vparc" value="<?php echo number_format($_GET["vparc"],2,".",","); ?>">
		<input type="hidden" name="juros" value="<?php echo $_GET["juros"]; ?>">
		
		
		<input type="hidden" name="periodo" value="<?php echo $exibcu["periodo"]; ?>">
		<input type="hidden" name="profissional" value="<?php echo $exibf["nome"]; ?>">
		<input type="hidden" name="id_prof" value="<?php echo $exibf["id"]; ?>">
		<input type="hidden" name="dia" value="<?php date_default_timezone_set('America/Sao_Paulo'); echo date('d'); ?>">
		<input type="hidden" name="mes" value="<?php date_default_timezone_set('America/Sao_Paulo'); echo date('m'); ?>">
		<input type="hidden" name="ano" value="<?php date_default_timezone_set('America/Sao_Paulo'); echo date('Y'); ?>">
		<button type="submit" class="btn btn-info">Registrar</button>
	</form>	
	<br/>
	<a href="cliente_c.php">
	<button type="button" class="btn">Voltar</button></a>
	<a href="cliente_contrato_print.php?id=<?php echo $id; ?>&c=<?php echo $cu; ?>&f=<?php echo $_GET["forma"]; ?>&p=<?php echo $_GET["parc"]; ?>&vp=<?php echo number_format($_GET["vparc"],2,".",","); ?>&j=<?php echo $_GET["juros"]; ?>" target="_blank">
	<button type="button" class="btn btn-default">Página de Impressão</button></a>
		
	<hr>
  <div class="media">
	<fieldset><legend class="text-center"><strong>Contratante</strong></legend>  
    <div class="media-left">
      <img src="img/alunos/<?php echo $exibal["foto"]; ?>" class="media-object" style="width:140px; margin-right: 20px;">
    </div>
    <div class="media-body">
		<br/>
		<div class="col-sm-5">
		<p><strong>Nome: </strong><?php echo $exibal["nome"]; ?></p>
		<p><strong>CPF: </strong><?php echo $exibal["cpf"]; ?></p>
		<p><strong>RG: </strong><?php echo $exibal["rg"]; ?></p>
		<p><strong>Telefone: </strong><?php echo $exibal["telefone"]; ?></p>
		<p><strong>Celular: </strong><?php echo $exibal["celular"]; ?></p>
		<p><strong>E-mail: </strong><?php echo $exibal["email"]; ?></p>
		<p><strong>Data de Nescimento: </strong><?php echo $exibal["dia"]."/".$exibal["mes"]."/".$exibal["ano"]; ?></p>
		<p><strong>Endereço: </strong><?php echo $exibal["endereco"]; ?> - <?php echo $exibal["bairro"]; ?></p>
		
		</div>
		<div class="col-sm-6">
		<p><strong>Municipio: </strong><?php echo $exibal["municipio"]; ?></p>
		<p><strong>CEP: </strong><?php echo $exibal["cep"]; ?></p>
		<p><strong>Curso: </strong><?php echo $_GET["c"]; ?></p>
		<p><strong>Período: </strong><?php echo $exibcu["periodo"]; ?> </p>
		<p><strong>Valor: </strong><?php echo number_format($exibcu["valor"],2,",","."); ?> </p>
		<p><strong>Forma de Pagamento: </strong><?php echo $_GET["forma"]; ?> </p>
		<p><strong>Parcelamento: </strong><?php echo $_GET["parc"]."x"; ?> </p>
		<p><strong>Valor das Parcelas: </strong><?php echo number_format($_GET["vparc"],2,",","."); ?> - <strong>Juros: </strong><?php echo $_GET["juros"]."%"; ?></p>
		
		</div>
			
    </div>
	</fieldset> 
	  
  <hr>
	<fieldset>
	<div class="media-body">
		<legend class="text-center"><strong>Contratada</strong></legend> 
		<div class="media">
		<div class="col-sm-5">
		<p><strong>Nome: </strong><?php echo $exibemp["nome"]; ?></p>
		<p><strong>CNPJ: </strong><?php echo $exibemp["cpf_cnpj"]; ?></p>
		<p><strong>Telefone: </strong><?php echo $exibemp["telefone"]; ?></p>
		</div>
		<div class="col-sm-6">
		<p><strong>Endereço: </strong><?php echo $exibemp["endereco"]; ?></p>
		<p><strong>Bairro: </strong><?php echo $exibemp["bairro"]; ?></p>
		<p><strong>Estado: </strong><?php echo $exibemp["estado"]; ?></p>
		</div>
			
    </div>
	
	</div>
	</fieldset>
	  
	<hr>
	  
	 <fieldset> 
		<div class="media-body">
		<legend class="text-center"><strong>Contrato</strong></legend> 
		  <?php echo $exibir["contrato"]; ?>

		</div>
	 </fieldset>
	  
	  <hr>
	  
	  <fieldset> 
		<div class="media-body text-center">
		<legend><strong>Assinatura</strong></legend> <br/><br/><br/>
			<div class="col-sm-6">
			___________________________________________________________<br/>
				<span style="text-align: center">Jacy Cabeleireiro</span><br/>
				
			</div> 
			<div class="col-sm-6">
			___________________________________________________________<br/>
				<span style="text-align: center"><?php echo $exibal["nome"]; ?></span>
			</div>
			
		</div>
	 </fieldset>
	  <hr>
	  
	</div>	
  </div>
</div>
</div>
