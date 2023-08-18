<div class="container">
 
 <div class="panel panel-warning">
      <div class="panel-heading"><h2>Cadastro de Contrato</h2> <input type="button" class="btn btn-default" value="Voltar" onClick="history.go(-1)"></div>
      <div class="panel-body">


  <form name="contrato" class="form-horizontal" action="include/edit/contrato.php" method="post" > 
	  <?php 
	  	$id = $_GET["id"];
		$sqli = "SELECT * FROM contrato WHERE id='$id'";
		$exec = $sql->query($sqli);
		$cont = mysqli_num_rows($exec);
		$exibir = mysqli_fetch_assoc($exec);
	  ?>
    <div class="form-group">
      <label class="control-label col-sm-2" for="nome">*Contrato:</label>
      <div class="col-sm-10">
        <textarea class="ckeditor" cols="80" id="editor1" name="contrato" rows="10"><?php echo $exibir["contrato"]; ?></textarea>
      </div>
    </div>
	  
    <div class="form-group">
     
      <label class="control-label col-sm-2" for="Porcentagem">Cursos:</label>
       <div class="col-sm-10">
		<div class="col-xs-4">
		<select name="curso" class="form-control" >
			<option><?php echo $exibir["curso"]; ?></option>
			<?php 
				$sqla = "SELECT * FROM curso ORDER BY nome";
				$exa = $sql->query($sqla);
				$conta = mysqli_num_rows($exa);
				while($exiba = mysqli_fetch_assoc($exa)){
					
					echo "<option>".$exiba["nome"]."</option>";
				}
			  ?>
		</select> 
		</div>
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