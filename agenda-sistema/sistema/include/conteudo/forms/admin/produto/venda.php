 <div class="container">
 
 <div class="panel panel-success">
      <div class="panel-heading"><h4>Venda do Produto</h4></div>
      <div class="panel-body">
	<script>
			  $( function() {
				var availableTagsCli = [
				  <?php  
						$sqli = "SELECT * FROM cliente ORDER BY nome";
						$exec = $sql->query($sqli);

						while($servi = mysqli_fetch_assoc($exec)){
							$bus = $servi["nome"];
							echo "'".$bus."',";
						}
					?>
				];
				$( "#cli" ).autocomplete({
				  source: availableTagsCli
				});
			  } );
		
			$( function() {
				var availableTagsPro = [
				  <?php  
						$sqli = "SELECT * FROM funcionario ORDER BY nome";
						$exec = $sql->query($sqli);

						while($servi = mysqli_fetch_assoc($exec)){
							$bus = $servi["nome"];
							echo "'".$bus."',";
						}
					?>
				];
				$( "#prof" ).autocomplete({
				  source: availableTagsPro
				});
			  } );
		
		</script>
  <form class="form-horizontal" action="carrinho.php?add=carrinho" method="post">
	
   <div class="form-group">
      <label class="control-label col-sm-2" for="cli">*Cliente:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="cli" placeholder="digite o nome do cliente" name="cliente" required>
      </div>
    </div>
	  
    <div class="form-group">
      <label class="control-label col-sm-2" for="prof">*Vendedor:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="prof" placeholder="digite o nome do vendedor" name="vendedor" required>
      </div>
    </div>
	
	
	 <div class="form-group">
      <label class="control-label col-sm-2" for="produto">Produto:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" value="<?php echo $_POST["nome"]; ?>" name="produto" required readonly>
      </div>
    </div>
	 <?php 
	  	$n = $_POST["nome"];
	  	$prod = "SELECT * FROM produto WHERE nome='$n'";
		$exepr = $sql->query($prod);
	  	$val = mysqli_fetch_assoc($exepr);
	  		//$j = $val["valor"] * $_POST["qt"];
	  		$j = $val["valor"];
			$pag = $j - $_POST["desc"];
	  ?>
	  <p class="text-center">
		  <strong>Desconto de: <?php echo "R$ ".number_format($_POST["desc"],2,",","."); ?></strong> - 
		  Valor Real: <?php echo "R$ ".number_format($j,2,",","."); ?>
	  </p>
    <div class="form-group">
      <label class="control-label col-sm-2" for="valor">Total:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" value="<?php echo $pag; ?>" name="valor" required readonly>
      </div>
    </div>
	 <input type="hidden" name="id" value="<?php echo $val["id"] ?>">
	 <input type="hidden" name="desc" value="<?php echo number_format($_POST["desc"],2,".",","); ?>">
	 <input type="hidden" name="quant" value="<?php echo $_POST["qt"]; ?>">
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Continua</button>
      </div>
    </div>
    
  </form>
  
</div>
</div>
</div>