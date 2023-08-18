		  
	<div class='modal-dialog'>
	  <div class='modal-content'>

		<div class='modal-header'>
		  <button type='button' class='close' data-dismiss='modal'>&times;</button>
		  <h4 class='modal-title'>Pagamento</h4>
		</div>
			<form class='form-horizontal' action='include/edit/agenda_st_mpg.php' method='post'>			
				<div class='modal-body'>
					<div class='form-group'>
						<div class='col-xs-12'>
							<div class="row">
								<div class="col-sm-12">
									<p>
										Todos os serviços "<strong>Agendados</strong>" hoje: <br/>
										 
										<?php 	
											$s = $_POST["status"];
											$prof = $_POST["id_prof"];
											$id = $_POST["id"];
											$cid = $_POST["id_c"];
											$p = $_POST["pag"];
											$ad = str_replace(",",".",$_POST["adicional"]);
                                            $des = str_replace(",",".",$_POST["desconto"]);
											if(isset($_POST["parc"])){ 
												$parc = $_POST["parc"];
												$vparc1 = $_POST["vparc1"];
												$vparc2 = $_POST["vparc2"];
											}else{} 

											$d = date("d");
											$m = date("m");
											$a = date("Y");
											$st = "Agendado";
										
											echo "<br/><strong>Serviço(s):</strong><br/>";
											$sqlid = "SELECT * FROM agenda WHERE id_cliente='$cid' and status='$st' and dia='$d'and mes='$m' and ano='$a'" ;
											$execu = $sql->query($sqlid);
											while($servi = mysqli_fetch_assoc($execu)){

												echo "<mark>".$servi["servico"]."</mark>, ";
												echo "<input type='hidden' name='ids' value='".$servi["id"]."'>";
											}
																				

											$sqli = "SELECT SUM(valor) as SOMA FROM agenda WHERE id_cliente='$cid' and status='$st' and dia='$d' and mes='$m' and ano='$a'";
											$exec = $sql->query($sqli);
											$cont = mysqli_num_rows($exec);

											while($exibir = mysqli_fetch_assoc($exec)){
												$sTo = ($exibir["SOMA"] + $ad) - $des;
												echo "<h3>R$ ".number_format($sTo,2,",",".")."</h3><input type='hidden' name='valor' value='".$sTo."'>";
												
												if(isset($_POST["parc"])){ 
												$ppa = ($ad / $_POST["parc"]) - $des;
												$rVpa1 = $vparc1 + $ppa;
												echo "<br/>Valor parcelado em ".$parc."x: R$ ".number_format($rVpa1,2,",",".");
												}else{}
											}
											
										?>
									</p>
									
									<input type='hidden' name='status' value="<?php echo $s; ?>">
									<input type='hidden' name='id' value="<?php echo $id; ?>">
									<input type='hidden' name='id_c' value="<?php echo $cid; ?>">
									<input type='hidden' name='pag' value="<?php echo $p; ?>">
									<?php if(isset($_POST["parc"])){ ?>
									<input type='hidden' name='parc' value="<?php echo $parc; ?>">
									<input type='hidden' name='vparc' value="<?php echo $rVpa1; ?>">
									<?php }else{} ?>
									<input type='hidden' name='adicional' value="<?php echo $ad; ?>">
									<input type='hidden' name='desconto' value="<?php echo $des; ?>">
									<button type='submit' class='btn btn-info'>Confirmar</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>
					  
			<div class="row">	
			<div class='col-sm-12'>
			<form class='form-horizontal' action='include/edit/agenda_st_mpg.php' method='post'>	
				<div class='modal-body'>
					<div class='form-group'>
						<div class='col-xs-10'>
								<p>
									Todos os serviços "<strong>Agendados</strong>" hoje com esse <strong>Profissional</strong>:<br/>
									
									<?php 
									echo "<br/><strong>Serviço(s):</strong><br/>";
									
									$sta = "Agendado";
									
										$sqlic = "SELECT * FROM agenda WHERE id_cliente='$cid' and id_prof='$prof' and status='$sta' and dia='$d' and mes='$m' and ano='$a'" ;
										$ex = $sql->query($sqlic);
										while($serv = mysqli_fetch_assoc($ex)){
											
											echo "<mark>".$serv["servico"]."</mark>, ";
										}
										
										
									
										$sqlib = "SELECT SUM(valor) as SOMA FROM agenda WHERE id_cliente='$cid' and id_prof='$prof' and status='$sta' and dia='$d' and mes='$m' and ano='$a'" ;
										$exe = $sql->query($sqlib);
										while($func = mysqli_fetch_assoc($exe)){
											$sTo = ($func["SOMA"] + $ad) - $des;
											echo "<h3>R$ ".number_format($sTo,2,",",".")."</h3><input type='hidden' name='valor' value='".$sTo."'>";
											if(isset($_POST["parc"])){ 
												$ppa = ($ad / $_POST["parc"]) - $des;
												$rVpa = $vparc2 + $ppa;
												echo "<br/>Valor parcelado em ".$parc."x: R$ ".number_format($rVpa,2,",",".");
											}else{}
										}
									?>
								</p>

								<input type='hidden' name='status' value="<?php echo $s; ?>">
								<input type='hidden' name='id_prof' value="<?php echo $prof; ?>">
								<input type='hidden' name='id' value="<?php echo $id; ?>">
								<input type='hidden' name='id_c' value="<?php echo $cid; ?>">
								<input type='hidden' name='pag' value="<?php echo $p; ?>">
								<?php if(isset($_POST["parc"])){ ?>
								<input type='hidden' name='parc' value="<?php echo $parc; ?>">
								<input type='hidden' name='vparc' value="<?php echo $rVpa; ?>">
								<?php }else{} ?>
								<input type='hidden' name='adicional' value="<?php echo $ad; ?>">
								<input type='hidden' name='desconto' value="<?php echo $des; ?>">
								<button type='submit' class='btn btn-info'>Confirmar</button>
						</div>
					</div>
				</div>
			</form>
			</div>	
				</div>
				

	</div>
</div>