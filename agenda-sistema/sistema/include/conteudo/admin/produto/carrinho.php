<div class="container">
<div class="row">
<div class="col-sm-12">
<div class="panel panel-danger">
	<div class="panel-heading"><h2>Carrinho do compras</h2></div>
	<?php 
			error_reporting(0);
			//verificando se existe alguma sessão
		   if(!isset($_SESSION["iten"])){
			$_SESSION["iten"] = array();
			
		   }
			//verificando se o carrinho esta vazio
			if(isset($_GET["add"]) && $_GET["add"] == "carrinho"){
				
				$idpro = $_POST["id"];
				
				if(!isset($_SESSION["iten"][$idpro])){
					
					 $_SESSION["iten"][$idpro] = 1;
					
				}else{
					
					 $_SESSION["iten"][$idpro] += 1;
				}
				
			}
			if(isset($_GET["exclui"]) && $_GET["exclui"] == "carrinho"){
				
				$idpro = $_GET["id"];
					
					unset($_SESSION["iten"][$idpro]);
				
			}
			 if(isset($_GET["up"]) == "carrinho"){
				
				$idpro = $_POST["id"];
				
				if(isset($_SESSION["iten"][$idpro])){
					
					 $_SESSION["iten"][$idpro] = $_POST["qt"];
					
				}else{
					
					
				}
				
			}   
				
			if(count($_SESSION["iten"]) == 0){	
				
				echo '<div class="alert alert-info">
					  <strong>Opa!</strong> Seu carrinho ainda esta vazio. <a href="cardapio.php">Adicionar</a>
					</div>';
			}else{
				
				$_SESSION["dados"] = array();
				
				foreach($_SESSION["iten"] as $idpro => $quantidade){
					
					$pes = "SELECT * FROM produto WHERE id='$idpro'";
					$exec = $sql->query($pes);
					$linha = mysqli_fetch_assoc($exec);
					
					$id = $linha["id"];					
					$produto = $linha["nome"];
					$valor = $linha["valor"];
					
					if(isset($_POST["cliente"])){
						$cliente = $_POST["cliente"];
						$vendedor = $_POST["vendedor"];
						$desconto = $_POST["desc"];
						$obs = $_POST["obs"];
					}else{
						$cliente = $_GET["cliente"];
						$vendedor = $_GET["vendedor"];
						$desconto = $_GET["desc"];
						$obs = "--";
					}
					
					if(isset($_GET["j"])){
						
						$ju = $_GET["j"];
						$total = ($quantidade * $valor) - $desconto;
						$resu = ($total / 100) * $ju;
						$resu2 = $total + $resu;
						$val_T += $resu2;
						if(isset($_GET["por"])){
							$parc = $total / $_GET["por"];
							
						}else{
							$parc = $total / 1;
						}
						
					}else{
						if(isset($_GET["por"])){
							$parc = $total / $_GET["por"];
							
						}else{
							$parc = $total / 1;
						}
						$total = ($quantidade * $valor) - $desconto;
						$val_T += $total;
					}
			 ?>	
			<form action="?up=carrinho" method="post">
					<div class="panel panel-default">
					  <div class="panel-body">
						  
						  <div class="col-sm-1"><br/>
							<input class="form-control" name="qt"  type="number" value="<?php echo $quantidade; ?>">
						</div>
						<div class="col-sm-4 text-center">
							<h2><?php echo $produto; ?></h2>
						</div>  
						<div class="col-sm-2 text-center">
							<h2><?php echo "R$ ".number_format($total,2,",","."); ?></h2>
						</div> 
						  <input type="hidden" name="id" value="<?php echo $idpro; ?>">
						<div class="col-sm-4"><br/>
							
							<a href='carrinho.php?exclui=carrinho&id=<?php echo $idpro; ?>'>
								<button type="button" class="btn btn-default">Remover</button>
							</a>
							<input type="hidden" name="cliente" value="<?php echo $cliente; ?>">
							<input type="hidden" name="vendedor" value="<?php echo $vendedor; ?>">
							<input type="hidden" name="desc" value="<?php echo $desconto ?>">
							<input type="hidden" name="obs" value="<?php echo $obs ?>">
							<button type="submit" class="btn btn-default">Atualizar Carrinho</button>
						</div>  

					  </div>
					</div>
				</form>	
		
			
		<div class="panel panel-default">
		<div class="panel-body">
			
			
				
					
			<?php
				$sqlpr = "SELECT * FROM promissioria ORDER BY id DESC";
				$exepr = $sql->query($sqlpr);
				$promis = mysqli_fetch_assoc($exepr);	
				 
					$pagamento = $_GET["f"];
					$parcelas = $_GET["por"];
					$valor_P = number_format($parc,2,".",".");
					$juros = $_GET["j"];
					$pgforma = $_GET["pgf"];
					$cardf = $_GET["card"];
					$cardf = $_GET["card"];
					$dia = date('d');
					$mes = date('m');
					$ano = date('Y');
					
					if($promis["id"] == 0 || $promis["id"] == null){
						$n = 1;
					}else{
						$n = $promis["id"] + 1;
					}
					$cod = strtotime(date("d/m/Y")).$n;
					$venc = $dia."-".$mes."-".$ano;
					$paga = date("d/m/Y");
					
						array_push(
									$_SESSION["dados"],
									array(
										'id' => $idpro,
										'cliente' => $cliente,
										'vendedor' => $vendedor,
										'produto' => $produto,
										'valor' => $total,
										'desconto' => $desconto,
										'quantidade' => $quantidade,
										'pagamento' => $pagamento,
										'parcelas' => $parcelas,
										'val_parcelas' => $valor_P,
										'juros' => $juros,
										'pgforma' => $pgforma,
										'cardf' => $cardf,
										'obs' => $obs,
										'dia' => $dia,
										'mes' => $mes,
										'ano' => $ano,
										'total' => $total,
										'cod' => $cod,
										'vencimento' => $venc,
										'paga' =>$paga
										
									)
								  	
								  );
					/*foreach($_SESSION["dados"] as $produtos){
						echo "<pre>";
						echo var_dump($produtos);
						echo "</pre>";
						echo $quantidade;
					}*/
				}
			}
		?>
			<form class="form-horizontal" action="./include/insert/produto_venda.php" method="post">
			<div class="form-group"> 
				  <label class="control-label col-sm-2">Pagamento:</label>
					<div class="col-sm-10">
						<select name='pagamento' class="form-control" onchange="location=this.value;" required>
							<?php if(isset($_GET["f"])){ ?>	
							<option><?php echo $_GET["f"]; ?></option>
							<?php }else{ ?>
							<option></option>
							<?php } ?>
							<?php if(isset($_POST["cliente"])){ ?>
							<option value="carrinho.php?f=Dinheiro&cliente=<?php echo $_POST["cliente"]; ?>&vendedor=<?php echo $_POST["vendedor"]; ?>&desc=<?php echo $_POST["desc"]; ?>&obs=<?php echo $_POST["obs"]; ?>">Dinheiro</option>
							<option value="carrinho.php?f=Cartao&cliente=<?php echo $_POST["cliente"]; ?>&vendedor=<?php echo $_POST["vendedor"]; ?>&desc=<?php echo $_POST["desc"]; ?>&obs=<?php echo $_POST["obs"]; ?>">Cartão</option>
							<?php }else{ ?>
							<option value="carrinho.php?f=Dinheiro&cliente=<?php echo $_GET["cliente"]; ?>&vendedor=<?php echo $_GET["vendedor"]; ?>&desc=<?php echo $_GET["desc"]; ?>&obs=<?php echo $_GET["obs"]; ?>">Dinheiro</option>
							<option value="carrinho.php?f=Cartao&cliente=<?php echo $_GET["cliente"]; ?>&vendedor=<?php echo $_GET["vendedor"]; ?>&desc=<?php echo $_GET["desc"]; ?>&obs=<?php echo $_GET["obs"]; ?>">Cartão</option>
							<?php }?>
						</select>
				</div>
			 </div>
				
			<div class="form-group"> 
				  <label class="control-label col-sm-2">A vista ou a prazo:</label>
					<div class="col-sm-10">
						<select name='pgforma' class="form-control" onchange="location=this.value;" required>
							<?php if(isset($_GET["pgf"])){ ?>	
							<option><?php echo $_GET["pgf"]; ?></option>
							<?php }else{ ?>
							<option></option>
							<?php } ?>
							<?php if(isset($_GET["f"])){ ?>
							<option value="carrinho.php?pgf=a vista&f=<?php echo $_GET["f"]; ?>&cliente=<?php echo $_GET["cliente"]; ?>&vendedor=<?php echo $_GET["vendedor"]; ?>&desc=<?php echo $_GET["desc"]; ?>&obs=<?php echo $_GET["obs"]; ?>">A Vista</option>
							<option value="carrinho.php?pgf=a prazo&f=<?php echo $_GET["f"]; ?>&cliente=<?php echo $_GET["cliente"]; ?>&vendedor=<?php echo $_GET["vendedor"]; ?>&desc=<?php echo $_GET["desc"]; ?>&obs=<?php echo $_GET["obs"]; ?>">A Prazo</option>
							<?php }else{ ?>							
							<?php }?>
						</select>
				</div>
			 </div> 
				
				
			<div class="form-group"> 
				  <label class="control-label col-sm-2">Bandeira do Cartão:</label>
					<div class="col-sm-10">
						<select name='cardf' class="form-control" onchange="location=this.value;" required>
							<?php if(isset($_GET["card"])){ ?>	
							<option><?php echo $_GET["card"]; ?></option>
							<?php }else{ ?>
							<option>--</option>
							
							<?php } ?>
							
							<?php if(isset($_GET["f"]) == "Cartao"){ ?>
							<option value="carrinho.php?card=visa&pgf=<?php echo $_GET["pgf"]; ?>&f=<?php echo $_GET["f"]; ?>&cliente=<?php echo $_GET["cliente"]; ?>&vendedor=<?php echo $_GET["vendedor"]; ?>&desc=<?php echo $_GET["desc"]; ?>&obs=<?php echo $_GET["obs"]; ?>">Visa <i class="fa fa-cc-visa" aria-hidden="true" style="font-size: 24px; color: #2177AD;"></i></option>
							<option value="carrinho.php?card=--&pgf=<?php echo $_GET["pgf"]; ?>&f=<?php echo $_GET["f"]; ?>&cliente=<?php echo $_GET["cliente"]; ?>&vendedor=<?php echo $_GET["vendedor"]; ?>&desc=<?php echo $_GET["desc"]; ?>&obs=<?php echo $_GET["obs"]; ?>">--- <i class="fa fa-cc-visa" aria-hidden="true" style="font-size: 24px; color: #2177AD;"></i></option>
							<option value="carrinho.php?card=mastercard&pgf=<?php echo $_GET["pgf"]; ?>&f=<?php echo $_GET["f"]; ?>&cliente=<?php echo $_GET["cliente"]; ?>&vendedor=<?php echo $_GET["vendedor"]; ?>&desc=<?php echo $_GET["desc"]; ?>&obs=<?php echo $_GET["obs"]; ?>">Mastercard <i class="fa fa-cc-mastercard" aria-hidden="true" style="font-size: 24px; color: #CF2023;"></i></option>
							<?php }else{ ?>							
							<?php }?>
						</select>
				</div>
			 </div> 	
				
				
				
			<?php if(isset($_POST["cliente"])){ ?>
			<?php }elseif($_GET["f"] == "Cartao" || $_GET["f"] == "Dinheiro"){ ?>
				
			<div class="form-group">
			<label class="control-label col-sm-2">Parcelamento: x</label>
				<div class="col-sm-10">
				<select name="parc" class="form-control" onchange="location=this.value;">
				<?php if(isset($_GET["por"]) > 1){ ?>
				<?php }elseif($_GET["por"] >= 1){ ?>
					<option><?php echo $_GET["por"]; ?></option>
					
				<?php }else{ ?>
					<option></option>
				<?php }?>	
				<?php 			  
					$m = 1;
					while($m<=12){

						echo '<option value="carrinho.php?f='.$_GET["f"].'&por='.$m.'&pgf='.$_GET["pgf"].'&card='.$_GET["card"].'&obs='.$_GET["obs"].'&cliente='.$_GET["cliente"].'&vendedor='.$_GET["vendedor"].'&desc='.$_GET["desc"].'&j=0">'.$m.'</option>';
						$m++;
					}
					 ?>	
					
				</select> 
				</div>

			  </div>

					<?php 
						if(isset($_GET["por"])){						  
							$v1 = $val_T;
							$v2 = $_GET["por"];	
							if(isset($_GET["j"])){
								$v4 = $_GET["j"];
								$v3 = ($v1 / 100) * $v4;
								$res = $v3 + ($v1 / $v2);

							}else{
								$res = $v1 / $v2;
							}

					?>
				  <div class="form-group">
					  <label class="control-label col-sm-2" for="vparc">Valor das Parcelas:</label>
					  <div class="col-sm-10">
						<input type="text" class="form-control" id="vparc" value="<?php echo number_format($res,2,".",","); ?>" name="vparc" required readonly>
					  </div>
					</div>
				<?php }else{} ?>
				
			<div class="form-group">

			  <label class="control-label col-sm-2">Juros: %</label>
				<div class="col-sm-10">
				<select name="juros" class="form-control" onchange="location=this.value;">
					<?php if(isset($_GET["j"])){ ?>
					<option><?php echo $_GET["j"]; ?></option>
				<?php }else{ ?>
					<option></option>
				<?php }?>
				<?php 
					$j = 0.5;
					while($j<=10){

						echo '<option value="carrinho.php?f='.$_GET["f"].'&por='.$_GET["por"].'&j='.$j.'&pgf='.$_GET["pgf"].'&card='.$_GET["card"].'&obs='.$_GET["obs"].'&cliente='.$_GET["cliente"].'&vendedor='.$_GET["vendedor"].'&desc='.$_GET["desc"].'">'.$j.'</option>';
						$j++;
					}
					$jj = 0;
					while($jj<=10){

						echo '<option value="carrinho.php?f='.$_GET["f"].'&por='.$_GET["por"].'&j='.$jj.'&pgf='.$_GET["pgf"].'&card='.$_GET["card"].'&obs='.$_GET["obs"].'&cliente='.$_GET["cliente"].'&vendedor='.$_GET["vendedor"].'&desc='.$_GET["desc"].'">'.$jj.'</option>';
						$jj++;
					}
				?>		
				</select> 
				</div>

			  </div>
			<?php }else{ ?>
				<?php } ?>
			<div class="col-sm-12 text-right">
				  Total a pagar
				<h2><?php echo "R$ ".number_format($val_T,2,",","."); ?></h2>
					  <button type="submit" class="btn btn-primary">Finalizar Compra</button>
			</div>
			</div>
		  </form>
		
		</div>
	
		  <div class="panel-body">
			   <div class="col-sm-6"><br/>
				<a href="produto_vendas.php"><button type="submit" class="btn btn-primary">Continuar Comprando</button></a>
			</div>
			
			  
		</div>
		
	</div>	
	
				
  
  
</div>
</div>
</div>
</div>
</div>