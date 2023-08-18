<div class="container">
 
 <div class="panel panel-success">
      <div class="panel-heading"><h2>Aluno - Buscar Contrato</h2></div>
      <div class="panel-body">
      
		  <!-- Busca na Tabela Serviços -->
		
		
		<!-- Fim da Busca na Tabela Serviços -->
		
		
		<!-- Lista na Tabela Funcioncionários -->
		
		
	  <!-- Fim da Lista na Tabela Funcioncionários -->

  <form class="form-horizontal">
   
    <div class="form-group">
     
      <label class="control-label col-sm-2" for="profissional">Contratos:</label>
		<div class="col-xs-4">
		<select name="p" class="form-control" onchange="showUser(this.value)">
			<option>Selecione o contrato</option>
		<?php
		$sqli = "SELECT * FROM contrato ORDER BY curso";
		$exec = $sql->query($sqli);
		  
		while($exibir = mysqli_fetch_assoc($exec)){
			
			echo "<option>".$exibir["curso"]."</option>";
		}
		?>			
		</select> 
		</div>
		
	  </div>
  </form>
<form class="form-horizontal" action="cliente_contrato.php" method="get">
	<input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">
	<div id="txtHint"></div>
		  
</div>
</div>
</div>