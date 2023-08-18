 <div class="container">
 
 <?php include 'include/buscas/funcionarios.php'; ?>
 
 <div class="panel panel-success">
      <div class="panel-heading"><h2>Funcionário - Edição de login e senha</h2></div>
      <div class="panel-body">


  <form class="form-horizontal" method="post" action="include/edit/funcionario_login.php">
   
        
    <div class="form-group">
      <label class="control-label col-sm-2" for="login">Login:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="login" name="login" placeholder="digite o Login" value="<?php echo $func["login"] ?>" required >
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="senha">Senha:</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="senha" name="senha" placeholder="digite a senha" value="<?php echo $func["senha"] ?>" required>
        <input type="hidden" name="id" value="<?php echo $func["id"] ?>" >
      </div>
    </div>
    
    
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Confirmar</button>
      </div>
    </div>
  </form>
</div>
	 </div>
	 </div>