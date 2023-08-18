<div class="container" style="background-color: #fff;">
	<div class="row" style="padding: 20px 0px 0px 10px;">
  <?php 
	$id = $_GET["id"];
	$cu = $_GET["c"];
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
	?>
  
  <!-- Left-aligned media object -->
  <div class="media">
	<fieldset><legend class="text-center"><strong>Contratante</strong></legend>  
    <div class="basePrint">
    <div class="media-body">
	<div class="fot">
		<div class="imB">
      <img src="img/alunos/<?php echo $exibal["foto"]; ?>" width="140" height="180">
    </div>
	</div>
		<div class="conte">
		<p><strong>Nome: </strong><?php echo $exibal["nome"]; ?></p>
		<p><strong>CPF: </strong><?php echo $exibal["cpf"]; ?></p>
		<p><strong>RG: </strong><?php echo $exibal["rg"]; ?></p>
		<p><strong>Telefone: </strong><?php echo $exibal["telefone"]; ?></p>
		<p><strong>Celular: </strong><?php echo $exibal["celular"]; ?></p>
		<p><strong>E-mail: </strong><?php echo $exibal["email"]; ?></p>
		<p><strong>Data de Nescimento: </strong><?php echo $exibal["dia"]."/".$exibal["mes"]."/".$exibal["ano"]; ?></p>
		<p><strong>Endereço: </strong><?php echo $exibal["endereco"]; ?> - <?php echo $exibal["bairro"]; ?></p>
		</div>
		<div class="conte">
		<p><strong>Municipio: </strong><?php echo $exibal["municipio"]; ?></p>
		<p><strong>CEP: </strong><?php echo $exibal["cep"]; ?></p>
		<p><strong>Curso: </strong><?php echo $_GET["c"]; ?> </p>
		<p><strong>Período: </strong><?php echo $exibcu["periodo"]; ?> </p>
		<p><strong>Valor: </strong><?php echo number_format($exibcu["valor"],2,",","."); ?> </p>
		<p><strong>Forma de Pagamento: </strong><?php echo $_GET["f"]; ?> </p>
		<p><strong>Parcelamento: </strong><?php echo $_GET["p"]."x"; ?> </p>
		<p><strong>Valor das Parcelas: </strong><?php echo number_format($_GET["vp"],2,",","."); ?> - <strong>Juros: </strong><?php echo $_GET["j"]."%"; ?> </p>
		
		
		</div>
			
    </div>
	</div>
	</fieldset> 
	  
  <hr>
	<fieldset>
	<div class="media-body">
		<legend class="text-center"><strong>Contratada</strong></legend> 
		<div class="media">
		<div class="basePrintC">
		<div class="conte">
		<p><strong>Nome: </strong><?php echo $exibemp["nome"]; ?></p>
		<p><strong>CNPJ: </strong><?php echo $exibemp["cpf_cnpj"]; ?></p>
		<p><strong>Telefone: </strong><?php echo $exibemp["telefone"]; ?></p>
		</div>
		<div class="conte">
		<p><strong>Endereço: </strong><?php echo $exibemp["endereco"]; ?></p>
		<p><strong>Bairro: </strong><?php echo $exibemp["bairro"]; ?></p>
		<p><strong>Estado: </strong><?php echo $exibemp["estado"]; ?></p>
		</div>
		</div>
			
    </div>
	
	</div>
	</fieldset>
	  
	<hr>
	  
	 <fieldset> 
		<div class="media-body">
		  <?php echo $exibir["contrato"]; ?>

		</div>
	 </fieldset>
	  
	  <hr>
	  
	  <fieldset> 
		<div class="media-body text-center"><br/><br/><br/>
		<div class="basePrintA">
		<div class="conte">
			______________________________________________________<br/>
				<span style="text-align: center">Jacy Cabeleireiro</span><br/>
				
			</div> 
			<div class="conte">
			______________________________________________________<br/>
				<span style="text-align: center"><?php echo $exibal["nome"]; ?></span>
			</div>
		</div>
		</div>
	 </fieldset>
	  
	</div>	
  </div>
</div>
</div>
