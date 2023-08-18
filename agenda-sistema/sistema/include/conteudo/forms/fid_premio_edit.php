 <div class="container">
 
 
<div class="panel panel-success">
      <div class="panel-heading"><h2>Edição de Premio</h2></div>
      <div class="panel-body">
	<?php 
				$id = $_GET["id"];
				$sqlib = "SELECT * FROM premio WHERE id='$id'";
				$execb = $sql->query($sqlib);
				$exibi = mysqli_fetch_assoc($execb);
		?>

  <form name="cliente_cad" class="form-horizontal" action="include/edit/premio.php" method="post">
   
    <div class="form-group">
      <label class="control-label col-sm-2" for="serv">*Premio:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="serv" value="<?php echo $exibi["premio"]; ?>" name="serv" required readonly>
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="ponto">*Pontos:</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="ponto" value="<?php echo $exibi["pontos"]; ?>" name="ponto" required>
      </div>
    </div>
    <input type="hidden" name="id" value="<?php echo $exibi["id"]; ?>">
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Enviar</button>&nbsp;
		<input type="button" class="btn" value="Voltar" onClick="history.go(-1)"> 
      </div>
    </div>
  </form>
</div>
</div>

	 
	 
</div>