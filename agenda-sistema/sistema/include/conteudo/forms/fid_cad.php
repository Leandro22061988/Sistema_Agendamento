 <div class="container">
 
 <div class="panel panel-success">
      <div class="panel-heading"><h2>Cadastro de Pontuação Fidelidade</h2></div>
      <div class="panel-body">


  <form name="cliente_cad" class="form-horizontal" action="include/insert/fidelidade.php" method="post">
   
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
      <label class="control-label col-sm-2" for="ponto">*Ponto(s):</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="ponto" placeholder="digite o(s) Ponto(s)" name="pontos" required>
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