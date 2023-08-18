<div class="container">
  <div class="row">
  <div class="col-sm-12">
  <div class="panel panel-success">
      <div class="panel-heading"><h3>Fidelidade - <strong>Edição de prazo para expirar pontos</strong></h3></div>
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

		<h4>Escolha em quanto tempo os <strong>Pontos de Fidelidade</strong> devem expirar.</h4>

			<form class="form-horizontal" action="include/edit/fid_prazo_expira.php" method="post">

				<div class="form-group">

				  <label class="control-label col-sm-2" for="Porcentagem">Prazo:</label>
					<div class="col-xs-4">
					<select name="prazo" class="form-control" >
					 <?php 
							$id = $_GET["id"];
							$sqli = "SELECT * FROM prazo_pontos WHERE id='$id'";
							$exec = $sql->query($sqli);
							$exibir = mysqli_fetch_assoc($exec);
					?>
						<option><?php echo $exibir["prazo"] ?></option>
					<?php $m = 1;
						while($m<=365){

							echo "<option>$m</option>";
							$m++;
						}
					?>	
					<input type="hidden" name="id" value="<?php echo $exibir["id"]; ?>">

					</select> 
					</div>
				  </div>
				
		
				<div class="form-group">        
				  <div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-default">Registrar</button>
				  </div>
				</div>
				</form>
	
	</div>  
  </div>
  
  
</div>
    
</div>