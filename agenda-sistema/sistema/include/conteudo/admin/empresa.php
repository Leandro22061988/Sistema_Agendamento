<div class="container">
  
  <div class="row">
   
  <div class="col-sm-12">
  
   
   
  	<div class="panel panel-primary">
      <div class="panel-heading"><h2>Dados da Empresa</h2></div>
      <div class="panel-body">
      
      <div class="col-sm-12">	
      
		 <div class="btn-group">
		<?php 
			$sqli = "SELECT * FROM empresa";
			$exec = $sql->query($sqli);
			$emp = mysqli_fetch_assoc($exec);
		?>
		<?php if($emp["id"] >= 1 ){ ?>
		<a href="empresa_edit.php?id=<?php echo $emp["id"]?>" class="btn btn-primary">
		  <i class="fa fa-user-plus" aria-hidden="true"></i>
			  Editar dados</a>	
		<?php }else{ ?>
	  	<a href="empresa_cad.php" class="btn btn-primary">
		  <i class="fa fa-user-plus" aria-hidden="true"></i>
			  Cadastrar</a>
		<?php } ?>
		<a href="index.php" class="btn btn-primary">
		  <i class="fa fa-user-plus" aria-hidden="true"></i>
			  Ir para Home</a>

		  </div> 
		 </div>
		</div> 	
      	
      	
		  <div class="panel-body">
		  <?php 
			$sqli = "SELECT * FROM empresa";
			$exec = $sql->query($sqli);
			$empresa = mysqli_fetch_assoc($exec);
			  echo "
				  <strong>Nome:</strong> ".$empresa["nome"]." <br/>
				  <strong>CNPJ:</strong> ".$empresa["cpf_cnpj"]."<br/>
				  <strong>Endereço:</strong> ".$empresa["endereco"]."<br/>
				  <strong>Bairro:</strong> ".$empresa["bairro"]."<br/>
				  <strong>Municipio:</strong> ".$empresa["municipio"]."<br/>
				  <strong>Estado:</strong> ".$empresa["estado"]."<br/>
				  <strong>Telefone:</strong> ".$empresa["telefone"]."<br/>
				  ";
			?>
		  </div>
		
      	
      </div>
    </div>
  
  </div>
</div>
  
  <!--<div class="well">Normal Well</div>
  <div class="well">Normal Well</div>
  <div class="well">Normal Well</div>-->
  
</div>