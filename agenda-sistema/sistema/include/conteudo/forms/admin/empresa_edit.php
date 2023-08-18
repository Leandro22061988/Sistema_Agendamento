 <div class="container">
 
 <?php include 'include/buscas/empresa.php'; ?>
 
 <div class="panel panel-success">
      <div class="panel-heading"><h4>Empresa - editar dados</h4></div>
      <div class="panel-body">
	<div class="btn-group">

		<a href="empresa.php" class="btn btn-primary">
		  <i class="fa fa-user-plus" aria-hidden="true"></i>
			  Empresa</a>	

    </div> 
	</div>
	
<div class="panel-body">

  <form class="form-horizontal" method="post" name="emresa" action="include/edit/empresa.php">
   
	 
	 <div class="form-group">
      <label class="control-label col-sm-2" for="nome">Nome da Empresa:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $empresa["nome"]; ?>" required>
      </div>
    </div>
	 
    <div class="form-group">
      <label class="control-label col-sm-2" for="cpf_cnpj">CNPJ/CPF:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="cpf_cnpj" name="cpf_cnpj" value="<?php echo $empresa["cpf_cnpj"]; ?>" required>
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="endereco">Endereço:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="endereco" name="endereco" value="<?php echo $empresa["endereco"]; ?>" required>
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="bairro">Bairro:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="bairro" name="bairro" value="<?php echo $empresa["bairro"]; ?>" required>
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="municipio">Municipio:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="municipio" name="municipio" value="<?php echo $empresa["municipio"]; ?>" required>
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="estado">Estado:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="estado" name="estado" value="<?php echo $empresa["estado"]; ?>" required>
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="telefone">Telefone:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="telefone" name="telefone" value="<?php echo $empresa["telefone"]; ?>" required>
      </div>
    </div>
    <input type="hidden" name="id" value="<?php echo $empresa["id"]; ?>">
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success">Enviar</button>
      </div>
    </div>
  </form>
  
</div>
	 </div>
	 </div>