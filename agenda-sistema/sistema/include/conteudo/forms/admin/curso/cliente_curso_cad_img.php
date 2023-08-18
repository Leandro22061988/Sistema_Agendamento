<div class="container">
 
 <div class="panel panel-warning">
      <div class="panel-heading"><h2>Cadastro de foto do Aluno</h2> <input type="button" class="btn btn-default" value="Voltar" onClick="history.go(-1)"></div>
      <div class="panel-body">


  <form name="cliente_cad" class="form-horizontal" action="aluno_cad_img.php" method="post" enctype='multipart/form-data'>
   
	<?php 
	  $id = $_GET["id"];
	
		$sqli = "SELECT * FROM aluno WHERE id='$id'";
		$exec = $sql->query($sqli);
		$exibir = mysqli_fetch_assoc($exec);	
	  ?>
	  
	<div class="form-group">
      <label class="control-label col-sm-2" for="endereco">Foto:</label>
      <div class="col-sm-10">
        <input type="file" id="customFile" name="foto" >
		  <label class="custom-file-label" for="customFile">Escolher Arquivo</label>
      </div>
    </div>  
	  
    <input type="hidden" name="id" value="<?php echo $exibir["id"]; ?>">
	  
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="cadastrar" class="btn btn-default">Cadastrar</button>
      </div>
    </div>
  </form>
</div>
</div>
</div>