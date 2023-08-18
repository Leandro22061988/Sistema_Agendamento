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
			if(isset($_POST["premio"])){
				$n = $_POST["premio"];
			}else{
				$n = "";
			}			
			$d = date("d");
			$m = date("m");
			$a = date("Y");
			$z = 0;
			
			/*Soma dos pontos expirados*/
			$sqlib = "SELECT SUM(pontos) as SOMA FROM historico_expira_pontos WHERE id_cliente='$id'";
			$execb = $sql->query($sqlib);
			$expi = mysqli_fetch_assoc($execb);
			if($expi["SOMA"] < 1){
				$som_expira = $expi["SOMA"];
				$som_expira = 0;
			}else{
				$som_expira = $expi["SOMA"];
			}
	
			/*Busca pelo cliente filtrando pelo id enviado via GET*/
			$sqlia = "SELECT * FROM cliente WHERE id='$id' ";
			$execa = $sql->query($sqlia);
			$cli = mysqli_fetch_assoc($execa);
			$noc = $cli["nome"];
	
			/*Busca pelo id_cliente na tabela sobra filtrando pelo id enviado via GET*/
			$bsob = "SELECT * FROM sobra WHERE id_cliente='$id' ";
			$exsob = $sql->query($bsob);
			$fsob = mysqli_fetch_assoc($exsob);
			$idsob = $fsob["id_cliente"];
			
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

							$sqlc = "INSERT INTO resgate (nome, id_c, dia, mes, ano, premio, pontos) VALUES ('".$noc."', '".$id."', '".$d."', '".$m."', '".$a."', '".$n."', '".$sp."')";
							if($sql->query($sqlc) == true){

								$sqld = "UPDATE agenda SET pontos='$z' WHERE id_cliente='$id' ";
								if($sql->query($sqld) === true){
									
									$delete = "DELETE FROM expira_pontos WHERE id_cliente='$id'";
									if($exc = $sql->query($delete)){
										
										$delete = "DELETE FROM sobra WHERE id_cliente='$id'";
										if($exc = $sql->query($delete)){
											
											echo "<div class='alert alert-success'>
													  <strong>OK!</strong> Resgate Relizado com sucesso :) .
													</div><br/>";

											echo "Os pontos da(o) cliente: <strong>".$noc."</strong> foram zerados! <br/> O Premio escolhido foi: ".$n."";
										}
									}
								}else{

									header("location:fidelidade.php?erro=edit");
								}

							}else{

									header("location:fidelidade.php?erro=insert");
							}

				
				}elseif($c > 0){
										
					$res = $c;
						if($idsob){
							/*Busca prazo que expira os pontos*/
							$pra = "SELECT * FROM prazo_pontos";
							$expra = $sql->query($pra);
							$lis = mysqli_fetch_assoc($expra);
							
							$pr = $lis["prazo"];
							
							$f = date('d/m/Y', strtotime('+'.$pr.' days'));
							$sep = explode("/", $f);
							$d = $sep[0];
							$m = $sep[1];
							$a = $sep[2];
							
							$so = "UPDATE sobra SET pontos='$res', dia='$d', mes='$m', ano='$a' WHERE id_cliente='$id'";
							
						}else{
							/*Busca prazo que expira os pontos*/
							$pra = "SELECT * FROM prazo_pontos";
							$expra = $sql->query($pra);
							$lis = mysqli_fetch_assoc($expra);
							
							$pr = $lis["prazo"];
							
							$f = date('d/m/Y', strtotime('+'.$pr.' days'));
							$sep = explode("/", $f);
							$d = $sep[0];
							$m = $sep[1];
							$a = $sep[2];
							
							$so = "INSERT INTO sobra (nome, id_cliente, pontos, dia, mes, ano) VALUES ('".$noc."', '".$id."', '".$res."', '".$d."', '".$m."', '".$a."')";
						}
							if($sql->query($so) == true){

								$sqlc = "INSERT INTO resgate (nome, id_c, dia, mes, ano, premio, pontos) VALUES ('".$noc."', '".$id."', '".$d."', '".$m."', '".$a."', '".$n."', '".$sp."')";
									if($sql->query($sqlc) == true){

										$sqld = "UPDATE agenda SET pontos='$z' WHERE id_cliente='$id' ";
										if($sql->query($sqld) === true){
											
											$delete = "DELETE FROM expira_pontos WHERE id_cliente='$id'";
											if($exc = $sql->query($delete)){
												
											echo "<div class='alert alert-success'>
													  <strong>OK!</strong> Resgate Relizado com sucesso :) .
													</div><br/>";

											echo $most["pontos"]." pontos dos ".$p." pontos da(o) cliente <strong>".$cli["nome"]."</strong> foram usados para resgate! <br/> O Premio escolhido foi: ".$n."";
											}
										}else{

											header("location:fidelidade.php?erro=edit");
										}

									}else{

											header("location:fidelidade.php?erro=insert");
									}
							}
					}elseif($c < $sp){
								
								echo "<div class='alert alert-danger'>
							  <strong>Ops!</strong> Esse cliente não tem pontos suficiente :( .
							</div>";
								
					}
						
				
				
			}elseif($n){
				
				$c = $p;
				echo "
					<h3>Prémios disponíveis para essa pontuação.</h3>
					<h4><strong>Cliente:</strong> ".$cli["nome"]."<br/><strong>Pontos:</strong> ".$c."<br/><strong>Pontos expirados:</strong> ".$som_expira."</h4>
					<h3>Não existe premio para essa pontuação</h3>
				";
			}else{
				$c = $p;
				echo "
					<h3>Prémios disponíveis para essa pontuação.</h3>
					<h4><strong>Cliente:</strong> ".$cli["nome"]."<br/><strong>Pontos:</strong> ".$c."<br/><strong>Pontos expirados:</strong> ".$som_expira."</h4>";
			}

			
	
	?>
	
		 <?php if(isset($_POST["premio"])){ ?>
				<!--NADA-->
			   <?php }else{ ?>
				 <form class="form-horizontal" action="" method="post">

					<div class="form-group">

					  <label class="control-label col-sm-2" for="Porcentagem">Premios:</label>
						<div class="col-xs-4">
						<select name="premio" class="form-control" >
						<?php
	
						$pes = "SELECT premio, pontos FROM premio WHERE pontos<='$p'";
						$ir = $sql->query($pes);

						while($prm = mysqli_fetch_assoc($ir)){

							echo "<option>".$prm["premio"]."</option>";
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
			   <?php } ?>
			  
	

	</div>  
  </div>
  
  
</div>
    
</div>