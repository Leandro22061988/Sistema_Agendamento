<div class="container">
  
  <div class="row">
   
  <div class="col-sm-12">
  
   
   
  	<div class="panel panel-primary">
      <div class="panel-heading"><h2>Meus Dados</h2></div>
      <div class="panel-body">
      
      <div class="col-sm-12">	
      
		 <div class="btn-group">

	  	<a href="admins.php" class="btn btn-primary">
		  <i class="fa fa-user-plus" aria-hidden="true"></i>
			  Administradores</a>
		<a href="index.php" class="btn btn-primary">
		  <i class="fa fa-user-plus" aria-hidden="true"></i>
			  Ir para Home</a>

		  </div> 
		 </div>
		</div> 	
      	<?php 
			$id = $_GET["id"];
			$busc = "SELECT * FROM master WHERE id='$id'";
			$action = $sql->query($busc);
			$exibir = mysqli_fetch_assoc($action);
		?>
      	
		  <div class="panel-body">
		  <strong>Nome:</strong> <?php echo $exibir["nome"]; ?> <br/>
		  <strong>E-mail:</strong> <?php echo $exibir["email"]; ?><br/>
		  <strong>Telefone:</strong> <?php echo $exibir["telefone"]; ?><br/>
		  <strong>Celular:</strong> <?php echo $exibir["celular"]; ?><br/>
		  <strong>Endereço:</strong> <?php echo $exibir["endereco"] ?><br/>
		  <strong>Bairro:</strong> <?php echo $exibir["bairro"] ?><br/>
		  <strong>Municipio:</strong> <?php echo $exibir["municipio"] ?><br/>
		  <strong>Estado:</strong> <?php echo $exibir["estado"] ?><br/>
		  <strong>Login:</strong> <?php echo $exibir["login"] ?><br/>
		  <strong>Nível:</strong> <?php echo $exibir["nivel"] ?><br/>
		  </div>
		
      	
      	<div class="panel-body">
      	 <div class="col-sm-12">	
		  <div class="btn-group">

			<a href="admin_edit.php?id=<?php echo $exibir["id"] ?>" class="btn btn-primary">
			  <i class="fa fa-user-plus" aria-hidden="true"></i>
				  Editar dados</a>
			<a href="admin_edit_senha.php?id=<?php echo $exibir["id"] ?>" class="btn btn-primary">
			  <i class="fa fa-user-plus" aria-hidden="true"></i>
				  Editar senha</a>
		  </div> 
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