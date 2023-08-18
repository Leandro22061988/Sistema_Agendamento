<div class="container">
  
  <div class="row">
  
  <div class="col-sm-12">
  
  <div class="panel panel-info">
      <div class="panel-heading"><h2>Dados de cadastro do Fornecedor</h2></div>
      <div class="panel-body">
  
	<div class="btn-group">
		<a href="fornecedores.php">
		<button type="button" class="btn btn-primary"><i class="fa fa-book" aria-hidden="true"></i>
		Fornecedores Cadastrados</button></a>
	</div> 
             
  
     <?php 
		
		$id = $_GET["id"];
		$sqli = "SELECT * FROM fornecedor WHERE id='$id'";
		$exec = $sql->query($sqli);
		$exibi = mysqli_fetch_assoc($exec);
		
	?>
	  <div class="well well-lg">
		<h4><small><strong>Nome: 		</strong></small><br/>
		<?php echo $exibi['nome']; ?></h4>
		<h4><small><strong>CPF/CNPJ: 		</strong></small><br/>
		<?php echo $exibi['cpf_cnpj']; ?></h4>
		<h4><small><strong>Telefone: 	</strong></small><br/>
		<?php echo $exibi['telefone']; ?></h4>
		<h4><small><strong>Celular: 	</strong></small><br/>
		<?php echo $exibi['celular']; ?></h4>
		<h4><small><strong>E-mail: 	</strong></small><br/>
		<?php echo $exibi['email']; ?></h4>
		<h4><small><strong>Site: 	</strong></small><br/>
		<a href="<?php echo $exibi['site']; ?>" title="<?php echo $exibi['nome']; ?>" target="_blank">
		<?php echo $exibi['site']; ?></a></h4>
		<h4><small><strong>Endereço: 	</strong></small><br/>
		<?php echo $exibi['endereco']; ?></h4>
		<h4><small><strong>Bairro: 	</strong></small><br/>
		<?php echo $exibi['bairro']; ?></h4>
		<h4><small><strong>Municipio: </strong></small><br/>
		<?php echo $exibi['municipio']; ?></h4>
		<h4><small><strong>Estado: 		</strong></small><br/>
		<?php echo $exibi['estado']; ?></h4>
	  </div>
		  
 </div>
    </div>
	  
  </div>
  
  
</div>
  
  <!--<div class="well">Normal Well</div>
  <div class="well">Normal Well</div>
  <div class="well">Normal Well</div>-->
  
</div>