		  
				
						<label class='control-label' for='pagamento'>Forma de Pagamento: </label>
							<select name='pagamento' class='form-control' onchange="location=this.value;">
								<?php if(isset($_GET["d"]) == "d"){ ?>
								<option>Dinheiro</option>
								<?php }elseif(isset($_GET["e"]) == "c"){ ?>
								<option>Cartão</option>
								<?php }elseif(isset($_GET["p"]) == "p"){ ?>
								<option>Promissória</option>
								<?php }elseif(isset($_GET["n"]) == "n"){ ?>
								<option>--</option>
								<?php }else{ ?>
								<option><strong>Selecione a forma de pagamento</strong></option>
								<?php if($_SESSION["nivel"] == 1){ ?>
								<option value="agenda_func_st.php?rg=<?php echo $_GET["rg"]; ?>&id=<?php echo $_GET["id"]; ?>&n=n&c=<?php echo $_GET["c"]; ?>">--</option>
								<?php }else{} ?>
								<?php } ?>
								<?php include 'include/conteudo/forms/modulo/Dinheiro/opc.php'; ?>
								<?php include 'include/conteudo/forms/modulo/Cartao/opc.php'; ?>
								<?php include 'include/conteudo/forms/modulo/promissoria/opc.php'; ?>
								<?php if($_SESSION["nivel"] == 1){ ?>
								<option value="agenda_func_st.php?rg=<?php echo $_GET["rg"]; ?>&id=<?php echo $_GET["id"]; ?>&n=n&c=<?php echo $_GET["c"]; ?>">--</option>
								<?php }else{}  ?>
							</select> 
							<div class="row">
								<div class="col-sm-10">
									<?php if(isset($_GET["d"]) == "d"){ ?>
										<span class="monec"><i class="fa fa-money" aria-hidden="true"></i></span>
										<span class="mone"><i class="fa fa-credit-card" aria-hidden="true"></i></span>
									<?php }elseif(isset($_GET["e"]) == "c"){ ?>
										<span class="mone"><i class="fa fa-money" aria-hidden="true"></i></span>
										<span class="monec"><i class="fa fa-credit-card" aria-hidden="true"></i></span>
									<?php }else{ ?>
										<span class="mone"><i class="fa fa-money" aria-hidden="true"></i></span>
										<span class="mone"><i class="fa fa-credit-card" aria-hidden="true"></i></span>
									<?php } ?>
									
								</div>
							</div> 