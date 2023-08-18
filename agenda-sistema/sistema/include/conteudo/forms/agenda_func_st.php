		  
				<div class='modal-dialog'>
				  <div class='modal-content'>
					<div class='modal-header'>
					<script>
					function close_window() {
						close();
					}
					</script>
					<a href="javascript:close_window();">
					  <button type='button' class='close' data-dismiss='modal'>&times;</button></a>
					  <h4 class='modal-title'>Status e Pagamento</h4>
					</div>
					<div class='modal-body'>
					<form class='form-horizontal' action='pag_modulo_conf.php' method='post'>

					<div class='form-group'>
						<div class='col-xs-10'>
							
						<?php include 'include/conteudo/forms/modulo/opc_pg.php'; ?>
							
						<br/>	
						<?php if(isset($_GET["p"])){  ?>
						<label class='control-label' for='pagamento'>Parcelas: </label>
						<select name='parc' class='form-control' onchange="location=this.value;" required>
							<?php if(isset($_GET["n"])){ ?>
							<option><?php echo $_GET["n"]; ?></option>
							<?php }else{ ?>
							<option></option>
							<?php } ?>
							<option value="agenda_func_st.php?rg=<?php echo $_GET["rg"]; ?>&id=<?php echo $_GET["id"]; ?>&p=p&c=<?php echo $_GET["c"]; ?>&n=1">
								1</option>
							<option value="agenda_func_st.php?rg=<?php echo $_GET["rg"]; ?>&id=<?php echo $_GET["id"]; ?>&p=p&c=<?php echo $_GET["c"]; ?>&n=2">
								2</option>
							<option value="agenda_func_st.php?rg=<?php echo $_GET["rg"]; ?>&id=<?php echo $_GET["id"]; ?>&p=p&c=<?php echo $_GET["c"]; ?>&n=3">
								3</option>
							<option value="agenda_func_st.php?rg=<?php echo $_GET["rg"]; ?>&id=<?php echo $_GET["id"]; ?>&p=p&c=<?php echo $_GET["c"]; ?>&n=4">
								4</option>
							<option value="agenda_func_st.php?rg=<?php echo $_GET["rg"]; ?>&id=<?php echo $_GET["id"]; ?>&p=p&c=<?php echo $_GET["c"]; ?>&n=5">
								5</option>
							<option value="agenda_func_st.php?rg=<?php echo $_GET["rg"]; ?>&id=<?php echo $_GET["id"]; ?>&p=p&c=<?php echo $_GET["c"]; ?>&n=6">
								6</option>
							<option value="agenda_func_st.php?rg=<?php echo $_GET["rg"]; ?>&id=<?php echo $_GET["id"]; ?>&p=p&c=<?php echo $_GET["c"]; ?>&n=7">
								7</option>
							<option value="agenda_func_st.php?rg=<?php echo $_GET["rg"]; ?>&id=<?php echo $_GET["id"]; ?>&p=p&c=<?php echo $_GET["c"]; ?>&n=8">
								8</option>
							<option value="agenda_func_st.php?rg=<?php echo $_GET["rg"]; ?>&id=<?php echo $_GET["id"]; ?>&p=p&c=<?php echo $_GET["c"]; ?>&n=9">
								9</option>
							<option value="agenda_func_st.php?rg=<?php echo $_GET["rg"]; ?>&id=<?php echo $_GET["id"]; ?>&p=p&c=<?php echo $_GET["c"]; ?>&n=10">
								10</option>
							<option value="agenda_func_st.php?rg=<?php echo $_GET["rg"]; ?>&id=<?php echo $_GET["id"]; ?>&p=p&c=<?php echo $_GET["c"]; ?>&n=11">
								11</option>
							<option value="agenda_func_st.php?rg=<?php echo $_GET["rg"]; ?>&id=<?php echo $_GET["id"]; ?>&p=p&c=<?php echo $_GET["c"]; ?>&n=12">
								12</option>
						</select> 
							
							<br/>
							<?php 
								$tot1 = $_GET["c"];
								$totp = $_GET["id"];
							
								$d = date("d");
								$m = date("m");
								$a = date("Y");
								$sta = "Agendado";
							
								$sqlib = "SELECT SUM(valor) as SOMA FROM agenda WHERE id_cliente='$tot1' and id_prof='$totp' and status='$sta' and dia='$d' and mes='$m' and ano='$a'" ;
										$exe = $sql->query($sqlib);
										$func = mysqli_fetch_assoc($exe);
								$sqlic = "SELECT SUM(valor) as SOMA FROM agenda WHERE id_cliente='$tot1' and status='$sta' and dia='$d' and mes='$m' and ano='$a'" ;
										$exec = $sql->query($sqlic);
										$funcb = mysqli_fetch_assoc($exec);
										if(isset($_GET["n"])){
											$v1 = $func["SOMA"] / $_GET["n"];
											$v2 = $funcb["SOMA"] / $_GET["n"];
										}else{
											$v1 = "0.00";
											$v2 = "0.00";
										}
							?>
							<label class='control-label' for='status'>Todos os serviços agendados hoje: </label>
							<input type="text" name="vparc1" class="form-control" id="status" value="<?php echo number_format($v2,2,".",","); ?>" readonly>
							<br/>	
							<label class='control-label' for='status'>Todos os serviços agendados com esse profissional: </label>
							<input type="text" name="vparc2" class="form-control" id="status" value="<?php echo number_format($v1,2,".",","); ?>" readonly>
							<br/>
							
						<?php }else{}?>
								
							<label class='control-label' for='status'>Adicional para cada serviço: </label>
							<input type="text" name="adicional" class="form-control" id="status" value="0,00">
                            
                            <label class='control-label' for='desconto'>Desconto para cada serviço: </label>
							<input type="text" name="desconto" class="form-control" id="desconto" value="0,00">
							
						    <label class='control-label' for='status'>Status: </label>
							<?php 
							
							if(isset($_GET["d"]) || isset($_GET["e"])){ 
								$st = "Atendido";
							}elseif(isset($_GET["p"])){
								$st = "Atendido";
							}elseif(isset($_GET["n"])){
								$st = "Cancelado";
							}else{
								$st = "Escolha a forma de Pagamento";
							}
							?>
							
							<input type="text" name="status" class="form-control" id="status" value="<?php echo $st; ?>" readonly>
							
							
							<input type='hidden' name='id' value="<?php echo $_GET["rg"]; ?>">
							<input type='hidden' name='id_prof' value="<?php echo $_GET["id"]; ?>">
							<input type='hidden' name='id_c' value="<?php echo $_GET["c"]; ?>">
							
							<?php if(isset($_GET["d"])){ ?>
								<input type='hidden' name='pag' value="<?php echo $_GET["d"]; ?>">
							<?php }elseif(isset($_GET["e"])){ ?>
								<input type='hidden' name='pag' value="<?php echo $_GET["e"]; ?>">
							<?php }elseif(isset($_GET["p"])){ ?>
								<input type='hidden' name='pag' value="<?php echo $_GET["p"]; ?>">
							<?php }elseif(isset($_GET["n"])){ ?>
								<input type='hidden' name='pag' value="<?php echo $_GET["n"]; ?>">
							<?php }else{} ?>
							
							
							
							</div>
						</div>

						<button type='submit' class='btn btn-default'>Enviar</button>
							
						
					</form>
					</div>
				  </div>
				</div>