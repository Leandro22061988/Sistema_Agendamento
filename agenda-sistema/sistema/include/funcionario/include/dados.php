<div class="col-sm-12">
  <div class="panel panel-default">
	  <div class="panel-body">
	  	<?php 
			$log = $_SESSION["entrarlogin"];
			$pes = "SELECT * FROM funcionario WHERE login='$log'";
			$ac = $sql->query($pes);
			$prf = mysqli_fetch_assoc($ac);
		  	$p = $prf["porcentagem"] / 100.0;
			$pid = $prf["id"];
	   
		 ?>
		 <p><strong>Ola </strong><?php echo $prf["nome"]; ?></p>
		 
		 <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">Dados Cadastrados</button>
		  <div id="demo" class="collapse">
			<p>
			<strong>E-mail: </strong><?php echo $prf["email"]; ?> <br/>
			<strong>Telefone: </strong><?php echo $prf["telefone"]; ?> <br/>
			<strong>Celular: </strong><?php echo $prf["celular"]; ?> <br/>
			<strong>Endereço: </strong><?php echo $prf["endereco"]; ?> <?php echo $prf["bairro"]; ?> - <?php echo $prf["municipio"]; ?> <br/>
			<strong>Função: </strong><?php echo $prf["funcao"]; ?> <br/>
			<strong>Salário: </strong>R$ <?php echo number_format($prf["salario"],2,",","."); ?> <br/>
			<strong>Porcentagem: </strong>-<?php echo $prf["porcentagem"]; ?>% <br/>
			</p>
		  </div>
	  </div>
	  </div>
  </div>