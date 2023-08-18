 <div class="container">
 
 <div class="panel panel-success">
      <div class="panel-heading"><h4>Venda do Produto</h4></div>
      <div class="panel-body">
	<form class="form-horizontal" action="./include/insert/produto_venda.php" method="post">
		
	 <div class="form-group"> 
		  <label class="control-label col-sm-2">Pagamento:</label>
			<div class="col-xs-4">
			<select name='pagamento' class="form-control" onchange="location=this.value;" required>
			<?php if(isset($_GET["f"])){ ?>	
			<option><?php echo $_GET["f"]; ?></option>
			<?php }else{ ?>
			<option></option>
			<?php } ?>
			<?php if($_POST["cliente"]){ ?>
				
			<option value="produto_venda_fim.php?cl=<?php echo $_POST["cliente"]; ?>&v=<?php echo $_POST["vendedor"]; ?>&p=<?php echo $_POST["produto"]; ?>&t=<?php echo $_POST["valor"]; ?>&d=<?php echo $_POST["desc"]; ?>&q=<?php echo $_POST["quant"]; ?>&f=Dinheiro">Dinheiro</option>
			<option value="produto_venda_fim.php?cl=<?php echo $_POST["cliente"]; ?>&v=<?php echo $_POST["vendedor"]; ?>&p=<?php echo $_POST["produto"]; ?>&t=<?php echo $_POST["valor"]; ?>&d=<?php echo $_POST["desc"]; ?>&q=<?php echo $_POST["quant"]; ?>&f=Cartao">Cartão</option>
				
			<?php }else{ ?>
				
			<option value="produto_venda_fim.php?cl=<?php echo $_GET["cl"]; ?>&v=<?php echo $_GET["v"]; ?>&p=<?php echo $_GET["p"]; ?>&t=<?php echo $_GET["t"]; ?>&d=<?php echo $_GET["d"]; ?>&q=<?php echo $_GET["q"]; ?>&f=Dinheiro">Dinheiro</option>
			<option value="produto_venda_fim.php?cl=<?php echo $_GET["cl"]; ?>&v=<?php echo $_GET["v"]; ?>&p=<?php echo $_GET["p"]; ?>&t=<?php echo $_GET["t"]; ?>&d=<?php echo $_GET["d"]; ?>&q=<?php echo $_GET["q"]; ?>&f=Cartao">Cartão</option>
				
			<?php }?>
			</select>
		</div>
	 </div> 
	<?php if(isset($_POST["cliente"])){ ?>
	<?php }elseif($_GET["f"] == "Cartao"){ ?>
	<div class="form-group">
	<label class="control-label col-sm-2" for="profissional">Parcelamento: x</label>
		<div class="col-xs-4">
		<select name="parc" class="form-control" onchange="location=this.value;">
		<?php if(isset($_GET["por"]) > 1){ ?>
		<?php }elseif($_GET["por"] > 1){ ?>
			<option><?php echo $_GET["por"]; ?></option>
		<?php }else{} ?>
		<?php 			  
			$m = 1;
			while($m<=12){

				echo '<option value="produto_venda_fim.php?cl='.$_GET["cl"].'&v='.$_GET["v"].'&p='.$_GET["p"].'&t='.$_GET["t"].'&d='.$_GET["d"].'&q='.$_GET["q"].'&f='.$_GET["f"].'&por='.$m.'">'.$m.'</option>';
				$m++;
			}
			 ?>		
		</select> 
		</div>
		
	  </div>
		
			<?php 
				if(isset($_GET["por"])){						  
					$v1 = $_GET["t"];
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
			  <div class="col-sm-4">
				<input type="text" class="form-control" id="vparc" value="<?php echo number_format($res,2,".",","); ?>" name="vparc" required readonly>
			  </div>
			</div>
		<?php }else{} ?>
	<div class="form-group">
     
      <label class="control-label col-sm-2" for="profissional">Juros: %</label>
		<div class="col-xs-4">
		<select name="juros" class="form-control" onchange="location=this.value;">
			<?php if(isset($_GET["j"])){ ?>
			<option><?php echo $_GET["j"]; ?></option>
		<?php }else{ ?>
			<option>0</option>
		<?php }?>
		<?php 
			$j = 0.5;
			while($j<=10){

				echo '<option value="produto_venda_fim.php?cl='.$_GET["cl"].'&v='.$_GET["v"].'&p='.$_GET["p"].'&t='.$_GET["t"].'&d='.$_GET["d"].'&q='.$_GET["q"].'&f='.$_GET["f"].'&por='.$_GET["por"].'&j='.$j.'">'.$j.'</option>';
				$j++;
			}
			$jj = 0;
			while($jj<=10){

				echo '<option value="produto_venda_fim.php?cl='.$_GET["cl"].'&v='.$_GET["v"].'&p='.$_GET["p"].'&t='.$_GET["t"].'&d='.$_GET["d"].'&q='.$_GET["q"].'&f='.$_GET["f"].'&por='.$_GET["por"].'&j='.$jj.'">'.$jj.'</option>';
				$jj++;
			}
		?>		
		</select> 
		</div>
		
	  </div>
	<?php }else{ ?>
				
		<?php } ?>	
		
    <div class="form-group"> 
		<div class="col-sm-10">
		  <label class="control-label col-sm-2">A Vista</label>
			<input type="radio" name="pgforma" value="A Vista" checked>
		</div>
	</div>
	<div class="form-group"> 
		<div class="col-sm-10">
		  <label class="control-label col-sm-2">A Prazo</label>
			<input type="radio" name="pgforma" value="A Prazo" >
		</div>
	 </div> 
		
		<?php if(isset($_POST["cliente"])){ ?>
		<?php }elseif($_GET["f"] == "Cartao"){ ?>
			
		<div class="form-group"> 
			<div class="col-sm-10">
			  <label class="control-label col-sm-2"><i class="fa fa-cc-visa" aria-hidden="true" style="font-size: 40px; color: #2177AD;"></i></label>
				<input type="radio" name="cardf" value="Visa">
			</div>
		</div>
		<div class="form-group"> 
			<div class="col-sm-10">
			  <label class="control-label col-sm-2"><i class="fa fa-cc-mastercard" aria-hidden="true" style="font-size: 40px; color: #CF2023;"></i></label>
				<input type="radio" name="cardf" value="Mastercard" checked>
			</div>
		 </div>
		
     
		<?php }else{ ?>
				
		<?php } ?>
	<div class="form-group">
      <label class="control-label col-sm-2" for="nome">OBS(opcional):</label>
      <div class="col-sm-10">
        <textarea name="obs" class="form-control" rows="5" id="comment"></textarea>
      </div>
    </div>
	 <input type="hidden" name="cliente" value="<?php echo $_GET["cl"]; ?>">
	 <input type="hidden" name="vendedor" value="<?php echo $_GET["v"]; ?>">
	 <input type="hidden" name="produto" value="<?php echo $_GET["p"]; ?>">
	 <input type="hidden" name="valor" value="<?php echo $_GET["t"]; ?>">
	 <input type="hidden" name="desc" value="<?php echo $_GET["d"]; ?>">
	 <input type="hidden" name="quant" value="<?php echo $_GET["q"]; ?>">
	 <input type="hidden" name="dia" value="<?php echo date('d'); ?>">
	 <input type="hidden" name="mes" value="<?php echo date('m'); ?>">
	 <input type="hidden" name="ano" value="<?php echo date('Y'); ?>">
	  
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Finalizar</button>
      </div>
    </div>
    
  </form>
  
</div>
</div>
</div>