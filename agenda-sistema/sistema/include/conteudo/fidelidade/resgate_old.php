<div class="container">
  <div class="row">
  <div class="col-sm-12">
  <div class="panel panel-success">
      <div class="panel-heading"><h2>Fidelidade - <strong>Resgate</strong></h2></div>
      <div class="panel-body">
  
	<div class="btn-group">

	<a href="fidelidade.php">
	  <button type="button" class="btn btn-primary"><i class="fa fa-user-plus" aria-hidden="true"></i>
		  Fidelidade</button></a>
	<a href="fid_premio.php">
	  <button type="button" class="btn btn-primary"><i class="fa fa-user-plus" aria-hidden="true"></i>
		  Premiação</button></a>
	<a href="index.php">
	  <button type="button" class="btn btn-primary"><i class="fa fa-home" aria-hidden="true"></i>
		  Ir para home</button></a>

	</div> 
</div>
<div class="well well-lg">
	<?php 
			$id = $_GET["id"];
			$p = $_GET["p"];
			$n = isset($_POST["premio"]);
			$d = date("d");
			$m = date("m");
			$a = date("Y");
			$z = 0;
			
			/*Busca pelo cliente filtrando pelo id enviado via GET*/
			$sqlia = "SELECT * FROM cliente WHERE id='$id' ";
			$execa = $sql->query($sqlia);
			$cli = mysqli_fetch_assoc($execa);
			$noc = $cli["nome"];
			
			/*Busca pelo premio filtrando pelo nome enviado via POST*/
			$pre = "SELECT * FROM premio WHERE premio='$n' ";
			$executa = $sql->query($pre);
			$most = mysqli_fetch_assoc($executa);
			
	
			/*Verifica ser o resultado de busca do prémio teve resultado positivo*/
			if($most["premio"]){
				/*Pega os pontos referente ao premio escolhido*/
				$sp = $most["pontos"];
				/*Pega os pontos somados do cliente, que foi enviados via GET e subtrai pelos pontos do premio escolhido*/
				$c = $p - $sp;
				
				if($c == 0){

							$sqlc = "INSERT INTO resgate (nome, id_c, dia, mes, ano, premio, pontos) VALUES ('".$noc."', '".$id."', '".$d."', '".$m."', '".$a."', '".$n."', '".$c."')";
							if($sql->query($sqlc) == true){

								$sqld = "UPDATE agenda SET pontos='$z' WHERE id_cliente='$id' ";
								if($sql->query($sqld) === true){

									echo "<div class='alert alert-success'>
											  <strong>OK!</strong> Resgate Relizado com sucesso :) .
											</div><br/>";

									echo "Os pontos da(o) cliente: <strong>".$noc."</strong> foram zerados! <br/> O Premio escolhido foi: ".$n."";

								}else{

									header("location:fidelidade.php?erro=edit");
								}

							}else{

									header("location:fidelidade.php?erro=insert");
							}

				
				}elseif($c > 0){
										
					$res = $c;

							$so = "INSERT INTO sobra (nome, id_cliente, pontos) VALUES ('".$noc."', '".$id."', '".$res."')";
								if($sql->query($so) == true){

								$sqlc = "INSERT INTO resgate (nome, id_c, dia, mes, ano, premio, pontos) VALUES ('".$noc."', '".$id."', '".$d."', '".$m."', '".$a."', '".$n."', '".$c."')";
									if($sql->query($sqlc) == true){

										$sqld = "UPDATE agenda SET pontos='$z' WHERE id_cliente='$id' ";
										if($sql->query($sqld) === true){

											echo "<div class='alert alert-success'>
													  <strong>OK!</strong> Resgate Relizado com sucesso :) .
													</div><br/>";

											echo "Os pontos da(o) cliente: <strong>".$cli["nome"]."</strong> foram zerados! <br/> O Premio escolhido foi: ".$n."";

										}else{

											header("location:fidelidade.php?erro=edit");
										}

									}else{

											header("location:fidelidade.php?erro=insert");
									}
							}
					}elseif($c < $sp){
					
						$psob = "SELECT * FROM sobra WHERE id_cliente='$id' ";
						$vai = $sql->query($psob);
						$sob = mysqli_fetch_assoc($vai);
					
						if($sob["id_cliente"]){
							$pon = $sob["pontos"];
							$som = $c + $pon;
							$rest = $som - $sp;
							
							/*verificando se o valor total é igual*/
							if($som == $sp){
								
								$sqlc = "INSERT INTO resgate (nome, id_c, dia, mes, ano, premio, pontos) VALUES ('".$noc."', '".$id."', '".$d."', '".$m."', '".$a."', '".$n."', '".$c."')";
								if($sql->query($sqlc) == true){
									
									/*exclui o registro da tabela sobra*/
									$delete = "DELETE FROM sobra WHERE id_cliente=$id";
									  if($exc = $sql->query($delete)){
										  
										/*zera os pontos na agenda*/
										$sqld = "UPDATE agenda SET pontos='$z' WHERE id_cliente='$id' ";
										if($sql->query($sqld) === true){

											echo "<div class='alert alert-success'>
													  <strong>OK!</strong> Resgate Relizado com sucesso :) .
													</div><br/>";

											echo "Os pontos da(o) cliente: <strong>".$noc."</strong> foram zerados! <br/> O Premio escolhido foi: ".$n."";

										}else{

											header("location:fidelidade.php?erro=edit");
										}
										  /*zera os pontos na agenda*/
										  
									}else{
										  header("location:fidelidade.php?erro=edit");
									}
									/*--/exclui o registro da tabela sobra*/
									

								}else{

										header("location:fidelidade.php?erro=insert");
								}
							/*--/verificando se o valor total é maior*/
							}elseif($som > $sp){
								
								$so = "UPDATE sobra SET pontos='$rest' WHERE id_cliente='$id' ";
								if($sql->query($so) == true){

								$sqlc = "INSERT INTO resgate (nome, id_c, dia, mes, ano, premio, pontos) VALUES ('".$noc."', '".$id."', '".$d."', '".$m."', '".$a."', '".$n."', '".$c."')";
									if($sql->query($sqlc) == true){

										$sqld = "UPDATE agenda SET pontos='$z' WHERE id_cliente='$id' ";
										if($sql->query($sqld) === true){

											echo "<div class='alert alert-success'>
													  <strong>OK!</strong> Resgate Relizado com sucesso :) .
													</div><br/>";

											echo "Os pontos da(o) cliente: <strong>".$cli["nome"]."</strong> foram zerados! <br/> O Premio escolhido foi: ".$n."";

										}else{

											header("location:fidelidade.php?erro=edit");
										}

									}else{

											header("location:fidelidade.php?erro=insert");
									}
							}
							/*--/verificando se o valor total é menor*/
							}elseif($som < $sp){
								
								echo "<div class='alert alert-danger'>
							  <strong>Ops!</strong> Esse cliente não tem pontos suficiente :( .
							</div>";
								
							}
						}
					
					}
				
				
			}elseif($n){
				
				$c = $p;
				echo "
					<h3>Prémios disponíveis para essa pontuação.</h3>
					<h4>Cliente: ".$cli["nome"]."<br/>Pontos: ".$c."</h4>
					<h3>Não existe premio para essa pontuação</h3>
				";
			}else{
				$c = $p;
				echo "
					<h3>Prémios disponíveis para essa pontuação.</h3>
					<h4>Cliente: ".$cli["nome"]."<br/>Pontos: ".$c."</h4>";
			}

			
	
	?>
	
		 <?php if(isset($_POST["premio"])){ ?>
	
			<form class="form-horizontal" action="" method="post">

				<div class="form-group">

				  <label class="control-label col-sm-2" for="Porcentagem">Premios:</label>
					<div class="col-xs-4">
					<select name="resgate" class="form-control" >
					<?php 
					$sqli = "SELECT * FROM premio WHERE pontos <='$p'";
					$exec = $sql->query($sqli);

					while($exibir = mysqli_fetch_assoc($exec)){

						echo "<option>".$exibir["nome"]."</option>";
					}
					?>


					</select> 
					</div>
					<input type="hidden" name="cliente" value="<?php echo $_GET["id"]; ?>">
				  </div>
				
		
				<div class="form-group">        
				  <div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-default">Resgatar</button>
				  </div>
				</div>
				</form>
			   <?php }else{ ?>
				 <form class="form-horizontal" action="" method="post">

					<div class="form-group">

					  <label class="control-label col-sm-2" for="Porcentagem">Premios:</label>
						<div class="col-xs-4">
						<select name="premio" class="form-control" >
							<option>Nada</option>
						<?php 
						$sqli = "SELECT * FROM premio WHERE pontos <='$p'";
						$exec = $sql->query($sqli);

						while($exibir = mysqli_fetch_assoc($exec)){

							echo "<option>".$exibir["nome"]."</option>";
						}
						?>


						</select> 
						</div>
						<input type="hidden" name="cliente" value="<?php echo $_GET["id"]; ?>">
					  </div>
				
		
					<div class="form-group">        
					  <div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-default">Enviar</button>
					  </div>
					</div>
				</form>
			   <?php } ?>
			  
	
<?php 
	  $p = $_GET["p"];
	  $id = $_GET["id"];
	  $z = 0;
	  
	  	$sqli = "SELECT * FROM premio WHERE pontos='$p'";
		$exec = $sql->query($sqli);
		$cont = mysqli_num_rows($exec);
		
	if($cont >= 1){
					while($exibir = mysqli_fetch_assoc($exec)){

							$pont = $exibir["pontos"];
							$pre = $exibir["premio"];
							$d = date("d");
							$m = date("m");
							$a = date("Y");

							$sqlia = "SELECT * FROM agenda WHERE id_cliente='$id' ";
							$execa = $sql->query($sqlia);
							$cli = mysqli_fetch_assoc($execa);

							$n = $cli["nome"];

								$sqlc = "INSERT INTO resgate (nome, id_c, dia, mes, ano, premio, pontos) VALUES ('".$n."', '".$id."', '".$d."', '".$m."', '".$a."', '".$pre."', '".$pont."')";
								if($sql->query($sqlc) == true){

									$sqld = "UPDATE agenda SET pontos='$z' WHERE id_cliente='$id' ";
									if($sql->query($sqld) === true){

										echo "<div class='alert alert-success'>
												  <strong>OK!</strong> Resgate Relizado com sucesso :) .
												</div><br/>";

										echo "Os pontos da(o) cliente: <strong>".$cli["nome"]."</strong> foram zerados!";

									}else{

										header("location:fidelidade.php?erro=edit");
									}

								}else{

										header("location:fidelidade.php?erro=insert");
								}



					}	
		
				}else{
				echo "<div class='alert alert-danger'>
							  <strong>Ops!</strong> Esse cliente não tem pontos suficiente :( .
							</div>";
				}
	?>
	</div>  
  </div>
  
  
</div>
    
</div>