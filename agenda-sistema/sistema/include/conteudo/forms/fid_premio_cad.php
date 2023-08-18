 <div class="container">
 
 <div class="panel panel-success">
      <div class="panel-heading"><h2>Cadastro de Premio com Serviço</h2></div>
      <div class="panel-body">


  <form name="cliente_cad" class="form-horizontal" action="include/insert/premio.php" method="post">
   
    <div class="form-group">
	  <label class="control-label col-sm-2" for="Porcentagem">Serviços:</label>
		<div class="col-xs-4">
		<select name="serv" class="form-control" >
		<?php 
			$sqli = "SELECT * FROM servico";
			$exec = $sql->query($sqli);

			while($exibir = mysqli_fetch_assoc($exec)){

				echo "<option>".$exibir["nome"]."</option>";
			}
			?>
		</select> 
		</div>
	  </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="ponto">*Pontos:</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="ponto" placeholder="digite a pontuação" name="ponto" required>
      </div>
    </div>
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Cadastrar</button>&nbsp;
		<input type="button" class="btn" value="Voltar" onClick="history.go(-1)">
      </div>
    </div>
  </form>
</div>
</div>
<p></p>
<div class="panel panel-success">
      <div class="panel-heading"><h2>Cadastro de Premio personalizado</h2></div>
      <div class="panel-body">


  <form name="cliente_cad" class="form-horizontal" action="include/insert/premio.php" method="post">
   
    <div class="form-group">
      <label class="control-label col-sm-2" for="serv">*Premio:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="serv" placeholder="digite o nome do premio" name="serv" required>
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="ponto">*Pontos:</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="ponto" placeholder="digite a pontuação" name="ponto" required>
      </div>
    </div>
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Cadastrar</button>&nbsp;
		<input type="button" class="btn" value="Voltar" onClick="history.go(-1)"> 
      </div>
    </div>
  </form>
</div>
</div>

	 
	 
</div>