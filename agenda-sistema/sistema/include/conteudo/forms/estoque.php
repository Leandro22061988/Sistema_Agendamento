 <div class="container">
 
  <?php include 'include/buscas/estoque_fornecedor.php'; ?>
 
 <div class="panel panel-success">
      <div class="panel-heading"><h4>Cadastro de Produto</h4></div>
      <div class="panel-body">


  <form class="form-horizontal" name="estoque" method="post" action="include/insert/estoque.php">
   
    <div class="form-group">
      <label class="control-label col-sm-2" for="nome">*Produto:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nome" placeholder="digite o nome" name="produto" required >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="nome">*quantidade:</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="quant" placeholder="digite a quantidade" name="quantidade" required >
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="nome">*Valor de compra:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nome" placeholder="digite o valor" name="valor" required >
      </div>
    </div>
    
    <div class="form-group">
     
      <label class="control-label col-sm-2" for="Porcentagem">Fornecedor:</label>
		<div class="col-xs-4">
		<select name="fornecedor" class="form-control" >
	  	 <?php do{ ?>
		  <option><?php echo $estfor["nome"]; ?></option>
		 <?php }while($estfor = mysqli_fetch_assoc($exec)); ?> 		
		</select> 
		</div>
	  </div>
    <input type="hidden" name="dia" value="<?php date_default_timezone_set('America/Sao_Paulo'); echo date('d' ); ?>">
	<input type="hidden" name="mes" value="<?php date_default_timezone_set('America/Sao_Paulo'); echo date('m' ); ?>">
	<input type="hidden" name="ano" value="<?php date_default_timezone_set('America/Sao_Paulo'); echo date('Y' ); ?>">
	  
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Cadastrar</button>
      </div>
    </div>
  </form>
</div>
	 </div>
	 </div>