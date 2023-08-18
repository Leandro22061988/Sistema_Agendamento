 <div class="container">
 
 <?php include 'include/buscas/gastos.php'; ?>
 
 <div class="panel panel-success">
      <div class="panel-heading"><h4>Gastos - Edição de dados</h4></div>
      <div class="panel-body">


  <form class="form-horizontal" method="post" action="include/edit/gastos.php">
   
	 
    <div class="form-group">
      <label class="control-label col-sm-2" for="nome">*Descrição:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nome" name="descricao" value="<?php echo $gastos["descricao"] ?>" required>
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="valor">Valor:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="valor" name="valor" value="<?php echo $gastos["valor"] ?>" required>
      </div>
    </div>
    <div class="form-group">
     
      <label class="control-label col-sm-2" for="Porcentagem">Data do Gasto:</label>
		<div class="col-xs-1">
		<select name="dia" class="form-control" >
			<option><?php echo $gastos["dia"]; ?></option>
			<?php $m = 1;
			while($m<=31){

				echo "<option>$m</option>";
				$m++;
			}
			 ?>
		</select> 
		</div>
		<div class="col-xs-1">
		<select name="mes" class="form-control" >
			<option><?php echo $gastos["mes"]; ?></option>
			<?php $m = 1;
			while($m<=12){

				echo "<option>$m</option>";
				$m++;
			}
			 ?>
		</select> 
		</div>
		
		<div class="col-xs-2">
		<select name="ano" class="form-control" >
			<option><?php echo $gastos["ano"]; ?></option>
			<?php $m = 2017;
			while($m<=2036){

				echo "<option>$m</option>";
				$m++;
			}
			 ?>
		</select> 
		</div>
		
		<input type="hidden" name="id" value="<?php echo $gastos["id"]; ?>">
		
	  </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Confirmar</button>
      </div>
    </div>
  </form>
  
</div>
</div>
</div>