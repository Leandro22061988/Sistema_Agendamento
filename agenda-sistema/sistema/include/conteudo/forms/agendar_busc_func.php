<?php include './include/conteudo/forms/include/verifica.php' ?>
<?php if($dd == $d && $mm == $m && $aa == $a){ ?>
 
  <div class="container">
 
 <div class="panel panel-success">
      <div class="panel-heading"><h2>Agendamento - Buscar Profissional</h2></div>
      <div class="panel-body">
      
		  <!-- Busca na Tabela Serviços -->
		
		
		<!-- Fim da Busca na Tabela Serviços -->
		
		
		<!-- Lista na Tabela Funcioncionários -->
		
		
	  <!-- Fim da Lista na Tabela Funcioncionários -->

  <form class="form-horizontal" action="agendar_busc_data.php" method="post">
   
    <div class="form-group">
     
      <label class="control-label col-sm-2" for="profissional">Profissional:</label>
		<div class="col-xs-4">
		<select name="pro" class="form-control" >
		<?php 

		$nome = $_POST["serv"];
		$sqli = "SELECT * FROM servico WHERE nome='$nome'";
		$exec = $sql->query($sqli);
		$mserv = mysqli_fetch_assoc($exec);

		?>
		<?php 
		$fu = $mserv["funcao"];
		$sqli = "SELECT * FROM funcionario";
		$exec = $sql->query($sqli);
		  
		while($exibir = mysqli_fetch_assoc($exec)){
			
			echo "<option>".$exibir["nome"]."</option>";
		}
		?>			
		</select> 
		</div>
		
		<input type="hidden" name="servico" value="<?php echo $mserv["id"]; ?>">
		<input type="hidden" name="cliente" value="<?php echo $_POST["cliente"]; ?>">
	  </div>
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Enviar</button>
      </div>
    </div>
  </form>
</div>
</div>
</div>

<?php }else{ ?>


	<div class="container">

	 <div class="panel panel-success">
		<div class="panel-heading">
			<h4 style="text-align: center;">Só será possível agendar se o <strong>caixa</strong> com a <strong>data de hoje</strong> estiver <strong>aberto</strong>. </h4>
		</div>
	  </div>
	</div>
	
<?php } ?>