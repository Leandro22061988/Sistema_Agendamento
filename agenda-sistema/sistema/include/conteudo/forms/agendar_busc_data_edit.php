<?php include './include/conteudo/forms/include/verifica.php' ?>
<?php if($dd == $d && $mm == $m && $aa == $a){ ?>
 
  <div class="container">
 
 <div class="panel panel-success">
      <div class="panel-heading"><h2>Agendamento - Escolher Data</h2></div>
      <div class="panel-body">
      
		  <!-- Busca na Tabela Serviços -->
		
		
		<!-- Fim da Busca na Tabela Serviços -->
		
		
		<!-- Lista na Tabela Funcioncionários -->
		
		
	  <!-- Fim da Lista na Tabela Funcioncionários -->

  <form class="form-horizontal" action="fid_conf_expira_edit.php" method="post">
   
    <div class="form-group">
     
      <label class="control-label col-sm-2" for="Porcentagem">Data:</label>
		<div class="col-xs-1">
		<select name="dia" class="form-control" >
	    <option><?php date_default_timezone_set('America/Sao_Paulo'); echo date('d'); ?></option>
		  <?php 
		  $id = $_POST["agid"];
			$age = "SELECT * FROM agenda WHERE id='$id'";
			$exag = $sql->query($age);
			$mostra = mysqli_fetch_assoc($exag);
				echo "<option>".$mostra["dia"]."</option>";
		  $m = 1;
			while($m<=31){

				echo "<option>$m</option>";
				$m++;
			}
			 ?>				
		</select> 
		</div>
		<div class="col-xs-1">
		<select name="mes" class="form-control" >
	  	<option><?php date_default_timezone_set('America/Sao_Paulo'); echo date('m'); ?></option>
		  <?php 
			$id = $_POST["agid"];
			$age = "SELECT * FROM agenda WHERE id='$id'";
			$exag = $sql->query($age);
			$mostra = mysqli_fetch_assoc($exag);
				echo "<option>".$mostra["mes"]."</option>";								  
		  $m = 1;
			while($m<=12){

				echo "<option>$m</option>";
				$m++;
			}
			 ?>				
		</select> 
		</div>
		<div class="col-xs-2">
		
		<select name="ano" class="form-control" >
	  	<option><?php date_default_timezone_set('America/Sao_Paulo'); echo date('Y'); ?></option>
		  <?php 
		$id = $_POST["agid"];
			$age = "SELECT * FROM agenda WHERE id='$id'";
			$exag = $sql->query($age);
			$mostra = mysqli_fetch_assoc($exag);
				echo "<option>".$mostra["ano"]."</option>";									  
		$m = 2017;
			while($m<=2030){

				echo "<option>$m</option>";
				$m++;
			}
			 ?>				
		</select> 
		</div>
		
	  </div>
    <input type="hidden" name="pro" value="<?php echo $_POST["pro"] ?>">
    <input type="hidden" name="servico" value="<?php echo $_POST["servico"]; ?>">
	<input type="hidden" name="agid" value="<?php echo $_POST["agid"]; ?>">
	<input type="hidden" name="cliente" value="<?php echo $_POST["cliente"]; ?>">
    
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