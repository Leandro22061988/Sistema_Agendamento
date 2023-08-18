 <div class="container">
 
 <?php include 'include/buscas/fornecedor.php'; ?>
 
 <div class="panel panel-success">
      <div class="panel-heading"><h4>Fornecedor - Edição de dados</h4></div>
      <div class="panel-body">


  <form class="form-horizontal" method="post" action="include/edit/fornecedor.php">
   
    <div class="form-group">
      <label class="control-label col-sm-2" for="nome">*Nome:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $forn["nome"] ?>" required>
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="cpf_cnpj">*CPF/CNPJ:</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="cpf_cnpj" name="cpf_cnpj" value="<?php echo $forn["cpf_cnpj"] ?>" required>
      </div>
    </div>
    
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="telefone">Telefone:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="telefone" name="telefone" value="<?php echo $forn["telefone"] ?>">
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="celular">celular:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="celular" name="celular" value="<?php echo $forn["celular"] ?>">
      </div>
    </div>
    
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">E-mail:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" name="email" value="<?php echo $forn["email"] ?>" >
      </div>
    </div>
    
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="site">Site:</label>
      <div class="col-sm-10">
        <input type="url" class="form-control" id="site" name="site" value="<?php echo $forn["site"] ?>" >
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="endereco">Endereço:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="endereco" name="endereco" value="<?php echo $forn["endereco"] ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="bairro">Bairro:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="bairro" name="bairro" value="<?php echo $forn["bairro"] ?>">
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="municipio">Município:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="municipio" name="municipio" value="<?php echo $forn["municipio"] ?>" >
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="estado">Estado:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="estado" name="estado" value="<?php echo $forn["estado"] ?>" >
      </div>
    </div>
    <input type="hidden" name="id" value="<?php echo $forn["id"] ?>">
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Enviar</button>
      </div>
    </div>
  </form>
</div>
	 </div>
	 </div>