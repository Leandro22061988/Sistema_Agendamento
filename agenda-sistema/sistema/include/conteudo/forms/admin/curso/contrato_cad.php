<div class="container">
 
 <div class="panel panel-warning">
      <div class="panel-heading"><h2>Cadastro de Contrato</h2> <input type="button" class="btn btn-default" value="Voltar" onClick="history.go(-1)"></div>
      <div class="panel-body">


  <form name="contrato" class="form-horizontal" action="include/insert/contrato.php" method="post" > 
	  
    <div class="form-group">
      <label class="control-label col-sm-2" for="nome">*Contrato:</label>
      <div class="col-sm-10">
        <textarea class="ckeditor" cols="80" id="editor1" name="contrato" rows="10"></textarea>
      </div>
    </div>
	  
    <div class="form-group">
     
      <label class="control-label col-sm-2" for="Porcentagem">Cursos:</label>
       <div class="col-sm-10">
		<div class="col-xs-4">
		<select name="curso" class="form-control" >
			<?php 
				$sqli = "SELECT * FROM curso ORDER BY nome";
				$exec = $sql->query($sqli);
				$cont = mysqli_num_rows($exec);
				while($exibir = mysqli_fetch_assoc($exec)){
					
					echo "<option>".$exibir["nome"]."</option>";
				}
			  ?>
		</select> 
		</div>
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