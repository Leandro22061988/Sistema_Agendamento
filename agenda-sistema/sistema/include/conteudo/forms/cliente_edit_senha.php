 <div class="container">
 
 <?php include 'include/buscas/clientes.php'; ?>
 
 <div class="panel panel-success">
      <div class="panel-heading"><h2>Edição de senha do Cliente: <?php echo $cliente["nome"] ?></h2></div>
      <div class="panel-body">


  <form class="form-horizontal" method="post" action="include/edit/cliente_senha.php">
   
    <div class="form-group">
      <label class="control-label col-sm-2" for="senha">*Senha:</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="senha" name="senha" value="<?php echo $cliente["senha"] ?>" required >
      </div>
    </div>
    <input type="hidden" name="id" value="<?php echo $cliente["id"] ?>" >
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Confirmar</button>
      </div>
    </div>
  </form>
</div>
	 </div>
	 </div>