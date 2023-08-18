<div class="container">  
  <div class="row">  
  <div class="col-sm-11">  
  	<div class="panel panel-info">
      <div class="panel-heading"><h2>Alerta de agendamento</h2></div>
      <div class="panel-body">
      	
		<div class="btn-group">		
		<!--  -->
		<?php 
			$st = "Aberto";
			$pes = "SELECT * FROM agenda_verifica";
			$act = $sql->query($pes);
			$ver = mysqli_num_rows($act);
			
		?>
		<?php if($ver >= 1){ ?>
		
		<a href="agendar_verifica_edit.php">
		<button type="button" class="btn btn-success"><i class="fa fa-search" aria-hidden="true"></i>
		Editar dados </button></a>
		
		<?php }else{ ?>
		
		<a href="agendar_verifica_cad.php">
		<button type="button" class="btn btn-success"><i class="fa fa-search" aria-hidden="true"></i>
		Configurar Alerta </button></a>
		
		<?php } ?>
		</div> 
		</div>
     	
      	<div class="panel-body">
      	
      	
      	
      	<div class="panel panel-default">
		  <div class="panel-body"><strong>Configuração Atual:</strong></div>
		  <div class="panel-body">
		  	<?php 
			
			$cons = "SELECT * FROM agenda_verifica";
			$executa = $sql->query($cons);
			$mostra = mysqli_fetch_assoc($executa);
			
		  ?>
		  E-mail do servidor: <?php echo $mostra["email_serv"] ?><br/>
		  E-mail para receber: <?php echo $mostra["email_rec"] ?><br/>
		  Tempo para alertar: <?php echo $mostra["tempo"] ?></br>
		  </div>
		</div>
     	
     	
      	
      </div>
    </div>
  
  </div>
</div>
  
  <!--<div class="well">Normal Well</div>
  <div class="well">Normal Well</div>
  <div class="well">Normal Well</div>-->
  
</div>