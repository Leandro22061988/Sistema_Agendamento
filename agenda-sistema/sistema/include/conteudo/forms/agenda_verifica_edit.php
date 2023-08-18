 <div class="container">
 
  <?php include 'include/buscas/agenda_verifica.php'; ?>
 
	<div class="panel panel-success">
		<div class="panel-heading"><h4>Agenda - Configuração de Alerta</h4></div>
		<div class="panel-body">

			<form class="form-horizontal" name="estoque" method="post" action="include/edit/agenda_verifica.php">
			   
				<div class="form-group">
				  <label class="control-label col-sm-2" for="nome">*E-mail do servidor: (Responsável por enviar)</label>
				  <div class="col-sm-10">
					<input type="email" class="form-control" id="nome" value="<?php echo $agenda["email_serv"] ?>" name="emailm" required >
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="nome">*E-mail para receber:</label>
				  <div class="col-sm-10">
					<input type="email" class="form-control" id="quant" value="<?php echo $agenda["email_rec"] ?>" name="email" required >
				  </div>
				</div>
				
				<div class="form-group">
				  <label class="control-label col-sm-2" for="nome">*Tempo:(em minutos)</label>
				  <div class="col-sm-10">
					<input type="number" class="form-control" id="nome" value="<?php echo $agenda["tempo"] ?>" name="tempo" required >
				  </div>
				</div>
				<input type="hidden" name="id" value="<?php echo $agenda["id"] ?>">
				<div class="form-group">        
				  <div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-default">Enviar</button>
				  </div>
				</div>
			</form>
		</div>
	</div>
</div>