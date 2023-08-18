<div class="container">
 
 <div class="panel panel-warning">
      <div class="panel-heading"><h2>Cadastro de Curso</h2> <input type="button" class="btn btn-default" value="Voltar" onClick="history.go(-1)"></div>
      <div class="panel-body">


  <form name="cliente_cad" class="form-horizontal" action="include/insert/curso.php" method="post" > 
	  
    <div class="form-group">
      <label class="control-label col-sm-2" for="nome">*Nome:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nome" placeholder="digite o nome do curso" name="nome" required>
      </div>
    </div>
	  
    <div class="form-group">
      <label class="control-label col-sm-2" for="periodo">Período:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="periodo" placeholder="digite o periodo" name="periodo">
      </div>
    </div>
	  
    <div class="form-group">
      <label class="control-label col-sm-2" for="valor">valor:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="valor" placeholder="digite o valor" name="valor">
      </div>
    </div>
	<div class="form-group">     
      <label class="control-label col-sm-2" for="Porcentagem">Porcentagem (%):</label>
		<div class="col-xs-1">
		<select name="porcentagem" class="form-control" >
		<option>0</option>
			<?php $m = 0;
			while($m<=100){

				echo "<option>$m</option>";
				$m++;
			}
			 ?>
		</select>
		</div>
	  </div>  
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Cadastrar</button>
      </div>
    </div>
  </form>
</div>
	 </div>
	 </div>