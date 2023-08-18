 <div class="container">
 
 <div class="panel panel-success">
      <div class="panel-heading"><h4>Administrador - Edição de dados</h4></div>
      <div class="panel-body">

	<div class="btn-group">

	<a href="admins.php" class="btn btn-primary">
	  <i class="fa fa-user-plus" aria-hidden="true"></i>
		  Administradores</a>
	<a href="admin_dados.php?id=<?php echo $_GET["id"] ?>" class="btn btn-primary">
	  <i class="fa fa-user-plus" aria-hidden="true"></i>
		  Meus Dados</a>
	</div> 
	 </div>
<div class="panel-body">
  <form class="form-horizontal" method="post" action="include/edit/admin.php">
   <?php 
	  	$id = $_GET["id"];
		$busc = "SELECT * FROM master WHERE id='$id'";
	  	$action = $sql->query($busc);
	  	$exibir = mysqli_fetch_assoc($action);
	?>
    <div class="form-group">
      <label class="control-label col-sm-2" for="nome">*Nome:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $exibir["nome"]; ?>" required>
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">*E-mail:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" value="<?php echo $exibir["email"]; ?>" name="email" >
      </div>
    </div>
    
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="telefone">Telefone:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="telefone" value="<?php echo $exibir["telefone"]; ?>" name="telefone">
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="celular">celular:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="celular" value="<?php echo $exibir["celular"]; ?>" name="celular">
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="endereco">Endereço:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="endereco" value="<?php echo $exibir["endereco"]; ?>" name="endereco">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="bairro">Bairro:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="bairro" value="<?php echo $exibir["bairro"]; ?>" name="bairro">
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="municipio">Município:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="municipio" value="<?php echo $exibir["municipio"]; ?>" name="municipio" >
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="estado">Estado:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="estado" value="<?php echo $exibir["estado"]; ?>" name="estado" >
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="estado">Login:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="estado" value="<?php echo $exibir["login"]; ?>" name="login" >
      </div>
    </div>
    
    <div class="form-group">
	  <label class="control-label col-sm-2" for="Porcentagem">Nivel:</label>
		<div class="col-xs-1">
		<select name="nivel" class="form-control" >
		<option><?php echo $exibir["nivel"]; ?></option>
		<option>1</option>
		<option>2</option>
		</select> 
		</div>
	 </div>
    <input type="hidden" name="id" value="<?php echo $exibir["id"]; ?>" >
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Confirmar</button>
      </div>
    </div>
  </form>
</div>
	 </div>
	 </div>