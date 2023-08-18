<div class="container">
  <div class="row">
  <div class="col-sm-12">
  <div class="panel panel-success">
      <div class="panel-heading"><h3>Fidelidade - <strong>Cadastro de prazo para expirar pontos</strong></h3></div>
      <div class="panel-body">
  
	<div class="btn-group">

	<a href="fidelidade.php">
	  <button type="button" class="btn btn-primary"><i class="fa fa-user-plus" aria-hidden="true"></i>
		  Fidelidade</button></a>
	<a href="fid_premio.php">
	  <button type="button" class="btn btn-primary"><i class="fa fa-user-plus" aria-hidden="true"></i>
		  Premiação</button></a>
	<a href="index.php">
	  <button type="button" class="btn btn-primary"><i class="fa fa-home" aria-hidden="true"></i>
		  Ir para home</button></a>

	</div> 
</div>
<div class="well well-lg">		
		<?php 
				$sqli = "SELECT * FROM prazo_pontos";
				$exec = $sql->query($sqli);
				$exibir = mysqli_fetch_assoc($exec);
	
			if($exibir["id"] < 1){
		?>
		
		<h4>Escolha em quanto tempo os <strong>Pontos de Fidelidade</strong> devem expirar.</h4>

			<form class="form-horizontal" action="include/insert/fid_prazo_expira.php" method="post">

				<div class="form-group">

				  <label class="control-label col-sm-2" for="Porcentagem">Prazo:</label>
					<div class="col-xs-4">
					<select name="prazo" class="form-control" >
					<?php $m = 1;
						while($m<=365){

							echo "<option>$m</option>";
							$m++;
						}
					?>	


					</select> 
					</div>
				  </div>
				
		
				<div class="form-group">        
				  <div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-default">Registrar</button>
				  </div>
				</div>
				</form>
	<?php }else{ ?>
	
		<h4>Já existe um prazo <strong>Registrado</strong> para expirar os <strong>Pontos de Fidelidade</strong>.</h4>
		<h3><?php echo $exibir["prazo"]; ?> dias - <a href="fid_prazo_expira_edit.php?id=<?php echo $exibir["id"]; ?>">Editar</a></h3>
		
	
	<?php } ?>
	</div>  
  </div>
  
  
</div>
    
</div>