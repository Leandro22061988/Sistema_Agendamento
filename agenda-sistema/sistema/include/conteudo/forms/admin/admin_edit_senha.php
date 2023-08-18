 <div class="container">
 
 <div class="panel panel-success">
      <div class="panel-heading"><h4>Administrador - Edição de Senha</h4></div>
      <div class="panel-body">

	<div class="btn-group">

	<a href="admins.php" class="btn btn-primary">
	  <i class="fa fa-user-plus" aria-hidden="true"></i>
		  Administradores</a>
	<a href="admin_dados.php" class="btn btn-primary">
	  <i class="fa fa-user-plus" aria-hidden="true"></i>
		  Meus Dados</a>
	</div> 
	 </div>
<div class="panel-body">
  <form class="form-horizontal" method="post" action="include/edit/admin_senha.php">
   
    <?php 
	  	$id = $_GET["id"];
		$busc = "SELECT * FROM master WHERE id='$id'";
	  	$action = $sql->query($busc);
	  	$exibir = mysqli_fetch_assoc($action);
	?>
        
    <div class="panel-heading"><h4>Seu login atual é: <?php echo $exibir["login"]; ?> </h4></div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="estado">Senha:</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="estado" value="<?php echo $exibir["senha"]; ?>" name="senha" >
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