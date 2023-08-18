 <div class="container">
 
 <div class="panel panel-success">
      <div class="panel-heading"><h4>Cadastrar Gastos</h4></div>
      <div class="panel-body">


  <form class="form-horizontal" method="post" action="include/insert/gastos.php">
   
	 
    <div class="form-group">
      <label class="control-label col-sm-2" for="nome">*Descrição:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nome" placeholder="digite a descricao" name="descricao" required>
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="valor">Valor:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="valor" placeholder="digite o valor" name="valor" required>
      </div>
    </div>
    <div class="form-group">
     
      <label class="control-label col-sm-2" >Data do Gasto:</label>
		<div class="col-xs-1">
		<select name="dia" class="form-control">
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
			<?php $m = 2017;
			while($m<=2036){

				echo "<option>$m</option>";
				$m++;
			}
			 ?>
		</select> 
		</div>
		
		
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