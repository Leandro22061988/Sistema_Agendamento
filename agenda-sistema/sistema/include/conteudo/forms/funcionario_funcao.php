 <div class="container">
 
 <div class="panel panel-success">
      <div class="panel-heading"><h4>Cadastro de funcionário</h4></div>
      <div class="panel-body">


  <form method="get" class="form-horizontal" action="funcionarios_cad.php">
   
   
    <div class="form-group">
     
      <label class="control-label col-sm-2" for="Porcentagem">Escolha a Função:</label>
		<div class="col-xs-4">
		<select name="funcao" class="form-control" >
		<?php 
		$sqli = "SELECT * FROM funcao";
		$exec = $sql->query($sqli);
		  
		while($exibir = mysqli_fetch_assoc($exec)){
			
			echo "<option>".$exibir["funcao"]."</option>";
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