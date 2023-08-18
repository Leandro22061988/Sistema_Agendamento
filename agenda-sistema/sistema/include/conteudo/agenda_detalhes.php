<div class="container">
  
  <div class="row">
  
  <div class="col-sm-12">
  
  <div class="panel panel-info">
      <div class="panel-body">
  
	<div class="btn-group">
		<a href="agenda.php">
		<button type="button" class="btn btn-primary"><i class="fa fa-book" aria-hidden="true"></i>
		Agenda do dia</button></a>
		<a href="agenda_mes.php">
		<button type="button" class="btn btn-primary"><i class="fa fa-book" aria-hidden="true"></i>
		Agenda do mês atual</button></a>
		<a href="agenda_data.php">
		<button type="button" class="btn btn-primary"><i class="fa fa-search" aria-hidden="true"></i>
		Pesquisar por data</button></a>
		<a href="index.php">
		<button type="button" class="btn btn-primary"><i class="fa fa-home" aria-hidden="true"></i>
		Voltar para home</button></a>
</div> 
             
  
     <?php 
		
		$id = $_GET["id"];
		$sqli = "SELECT * FROM agenda WHERE id='$id'";
		$exec = $sql->query($sqli);
		$exibi = mysqli_fetch_assoc($exec);
		
	?>
	  <div class="well well-lg">
		<h4><small><strong>Nome: 		</strong></small><br/>
		<?php echo $exibi['nome']; ?></h4>
		<h4><small><strong>Telefone: 	</strong></small><br/>
		<?php echo $exibi['telefone']; ?></h4>
		<h4><small><strong>Celular: 	</strong></small><br/>
		<?php echo $exibi['celular']; ?></h4>
		<h4><small><strong>E-mail: 	</strong></small><br/>
		<?php echo $exibi['email']; ?></h4>
		<h4><small><strong>Serviço: 	</strong></small><br/>
		<?php echo $exibi['servico']; ?></h4>
		<h4><small><strong>Valor: 	</strong></small><br/>
		<?php echo "R$ ". number_format($exibi['valor'],2,",","."); ?></h4>
		<h4><small><strong>Profissional: </strong></small><br/>
		<?php echo $exibi['profissional']; ?></h4>
		<h4><small><strong>Dia: 		</strong></small><br/>
		<?php echo $exibi['dia']; ?></h4>
		<h4><small><strong>Horário: 	</strong></small><br/>
		<?php echo $exibi['horario']; ?></h4>
		<h4><small><strong>Status: 	</strong></small><br/>
		<?php echo $exibi['status']; ?></h4>
	  </div>
		  
 </div>
    </div>
	  
  </div>
  
  
</div>
  
  <!--<div class="well">Normal Well</div>
  <div class="well">Normal Well</div>
  <div class="well">Normal Well</div>-->
  
</div>