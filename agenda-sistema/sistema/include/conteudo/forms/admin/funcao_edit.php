 <div class="container">
	 
 <?php include 'include/buscas/funcoes.php'; ?>
	 
 <div class="panel panel-success">
      <div class="panel-heading"><h4>Editar Função - Funcionários</h4></div>
      <div class="panel-body">


  <form class="form-horizontal" method="post" name="funcao" action="include/edit/funcao.php">
   
	 
    <div class="form-group">
      <label class="control-label col-sm-2" for="nome">*Nome da Função:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="funcao" value="<?php echo $func["funcao"]; ?>" required>
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="salario">Salário:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="salario" value="<?php echo $func["salario"]; ?>" required>
      </div>
    </div>
    <div class="form-group">
     
      <label class="control-label col-sm-2" for="Porcentagem">Porcentagem (%):</label>
		<div class="col-xs-1">
		<select name="porcentagem" class="form-control" >
			<option><?php echo $func["porcentagem"]; ?></option>
			<?php $m = 0;
			while($m<=100){

				echo "<option>$m</option>";
				$m++;
			}
			 ?>
		</select> 
		</div>
	  </div>
	  <input type="hidden" name="id" value="<?php echo $func["id"] ?>">
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Enviar</button>
      </div>
    </div>
  </form>
  
</div>
	 </div>
	 </div>