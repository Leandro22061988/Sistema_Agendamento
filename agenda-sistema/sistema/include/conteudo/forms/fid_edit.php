 <div class="container">
 
 <div class="panel panel-success">
      <div class="panel-heading"><h2>Edição de Pontuação Fidelidade</h2></div>
      <div class="panel-body">


  <form name="cliente_cad" class="form-horizontal" action="include/edit/fidelidade.php" method="post">
   <?php 
	  		$id = $_GET["id"];
			$sqli = "SELECT * FROM fidelidade WHERE id='$id'";
			$exec = $sql->query($sqli);
			$exibir = mysqli_fetch_assoc($exec);
	?>
    <div class="form-group">
      <label class="control-label col-sm-2" for="serv">*Serviço:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="serv" value="<?php echo $exibir["servico"] ?>" name="serv" required readonly>
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="ponto">*Ponto(s):</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="ponto" value="<?php echo $exibir["pontos"] ?>" name="pontos" required>
      </div>
    </div>
    <input type="hidden" name="id" value="<?php echo $exibir["id"]; ?>">
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