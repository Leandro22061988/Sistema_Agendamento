<div class="container">
  
  <div class="row">
  
  <div class="col-sm-12">
  
  <div class="panel panel-info">
      <div class="panel-heading"><h2>Dados de cadastro do cliente</h2></div>
      <div class="panel-body">
  
	<div class="btn-group">
		<a href="cliente.php">
		<button type="button" class="btn btn-primary"><i class="fa fa-book" aria-hidden="true"></i>
		Clientes Cadastrados</button></a>
	</div> 
             
  
     <?php 
		
		$id = $_GET["id"];
		$sqli = "SELECT * FROM cliente WHERE id='$id'";
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
		<h4><small><strong>Endereço: 	</strong></small><br/>
		<?php echo $exibi['endereco']; ?></h4>
		<h4><small><strong>Bairro: 	</strong></small><br/>
		<?php echo $exibi['bairro']; ?></h4>
		<h4><small><strong>Municipio: </strong></small><br/>
		<?php echo $exibi['municipio']; ?></h4>
		<h4><small><strong>Data de Nascimento: 		</strong></small><br/>
		<?php echo $exibi['dia']."/".$exibi['mes']."/".$exibi['ano']; ?></h4>
	  </div>
		  
 </div>
    </div>
	  
  </div>
  
  
</div>
  
  <!--<div class="well">Normal Well</div>
  <div class="well">Normal Well</div>
  <div class="well">Normal Well</div>-->
  
</div>