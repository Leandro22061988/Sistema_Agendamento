<div class="container">
 
 <div class="panel panel-warning">
      <div class="panel-heading"><h2>Edição Curso</h2> <input type="button" class="btn btn-default" value="Voltar" onClick="history.go(-1)"></div>
      <div class="panel-body">


  <form name="cliente_cad" class="form-horizontal" action="include/edit/curso.php" method="post" > 
	  <?php 
	  	$id = $_GET["id"];
		$sqli = "SELECT * FROM curso WHERE id='$id'";
		$exec = $sql->query($sqli);
		$cont = mysqli_num_rows($exec);
		$exibir = mysqli_fetch_assoc($exec);
	  ?>
    <div class="form-group">
      <label class="control-label col-sm-2" for="nome">*Nome:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nome" value="<?php echo $exibir["nome"]; ?>" name="nome" required>
      </div>
    </div>
	  
    <div class="form-group">
      <label class="control-label col-sm-2" for="periodo">Período:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="periodo" value="<?php echo $exibir["periodo"]; ?>" name="periodo">
      </div>
    </div>
	  
    <div class="form-group">
      <label class="control-label col-sm-2" for="valor">valor:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="valor" value="<?php echo $exibir["valor"]; ?>" name="valor">
      </div>
    </div>
	 <div class="form-group">     
      <label class="control-label col-sm-2" for="Porcentagem">Porcentagem (%):</label>
		<div class="col-xs-1">
		<select name="porcentagem" class="form-control" >
		<option><?php echo $exibir["porcentagem"]; ?></option>
			<?php $m = 0;
			while($m<=100){

				echo "<option>$m</option>";
				$m++;
			}
			 ?>
		</select> 
		<input type="hidden" name="salario" value="0">
		</div>
	  </div>
	 <input type="hidden" name="id" value="<?php echo $exibir["id"]; ?>">
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Enviar</button>
      </div>
    </div>
  </form>
</div>
	 </div>
	 </div>