 <div class="container">
 
 <?php include 'include/buscas/estoque.php'; ?>
 
 <div class="panel panel-success">
      <div class="panel-heading"><h4>Produto - Edição de dados</h4></div>
      <div class="panel-body">


  <form class="form-horizontal" name="estoque" method="post" action="include/edit/estoque.php">
   
    <div class="form-group">
      <label class="control-label col-sm-2" for="produto">*Produto:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="produto" name="produto" value="<?php echo $estoque["produto"] ?>" required >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="quant">*quantidade:</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="quant" name="quantidade" value="<?php echo $estoque["quantidade"] ?>" required >
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="valor">*Valor de compra:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="valor" name="valor" value="<?php echo $estoque["valor_compra"] ?>" required >
      </div>
    </div>
    
    <div class="form-group">
     
      <label class="control-label col-sm-2" for="Porcentagem">Fornecedor:</label>
		<div class="col-xs-4">
		<select name="fornecedor" class="form-control" >
  		 <option><?php echo $estoque["fornecedor"]; ?></option>
	  	 <?php while($estfor = mysqli_fetch_assoc($exec)){ ?>
		  <option><?php echo $estfor["nome"]; ?></option>
		 <?php } ?> 		
		</select> 
		</div>
	  </div>
	  
    <input type="hidden" name="id" value="<?php echo $estoque["id"] ?>">
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Enviar</button>
      </div>
    </div>
  </form>
</div>
</div>
</div>