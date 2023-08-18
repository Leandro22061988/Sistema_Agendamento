 <div class="container">
 
 <div class="panel panel-success">
      <div class="panel-heading"><h4>Cadastro da Empresa</h4></div>
      <div class="panel-body">

	<div class="btn-group">

		<a href="empresa.php" class="btn btn-primary">
		  <i class="fa fa-user-plus" aria-hidden="true"></i>
			  Empresa</a>	

    </div> 
	</div>
	
<div class="panel-body">	  
  <form class="form-horizontal" method="post" name="emresa" action="include/insert/empresa.php">
   
	 
	 <div class="form-group">
      <label class="control-label col-sm-2" for="nome">Nome da Empresa:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nome" placeholder="digite o nome da empresa" name="nome" value="" required>
      </div>
    </div>
	 
    <div class="form-group">
      <label class="control-label col-sm-2" for="nome">CNPJ/CPF:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nome" placeholder="digite o CNPJ ou CPF" name="cpf_cnpj" value="" required>
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="endereco">Endereço:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="endereco" placeholder="digite o endereço" name="endereco" value="" required>
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="bairro">Bairro:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="bairro" placeholder="digite o bairro" name="bairro" value="" required>
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="municipio">Municipio:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="municipio" placeholder="digite o municipio" name="municipio" value="" required>
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="estado">Estado:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="estado" placeholder="digite o estado" name="estado" value="" required>
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="telefone">Telefone:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="telefone" placeholder="digite o telefone" name="telefone" value="" required>
      </div>
    </div>
    
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success">Cadastrar</button>
      </div>
    </div>
  </form>
  
</div>
	 </div>
	 </div>