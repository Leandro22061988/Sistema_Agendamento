 <div class="container">
 
 <div class="panel panel-success">
      <div class="panel-heading"><h4>Cadastro de Administrador</h4></div>
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
  <form class="form-horizontal" method="post" action="include/insert/admin.php">
   
    <div class="form-group">
      <label class="control-label col-sm-2" for="nome">*Nome:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nome" placeholder="digite o nome" name="nome" required>
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">*E-mail:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="digite o email" name="email" >
      </div>
    </div>
    
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="telefone">Telefone:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="telefone" placeholder="digite o telefone" name="telefone">
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="celular">celular:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="celular" placeholder="digite o celular" name="celular">
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="endereco">Endereço:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="endereco" placeholder="digite o endereço" name="endereco">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="bairro">Bairro:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="bairro" placeholder="digite o bairro" name="bairro">
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="municipio">Município:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="municipio" placeholder="digite o municipio" name="municipio" >
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="estado">Estado:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="estado" placeholder="digite o estado" name="estado" >
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="municipio">Login:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="municipio" placeholder="digite o login" name="login" >
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="estado">Senha:</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="estado" placeholder="digite a senha" name="senha" >
      </div>
    </div>
    
    <div class="form-group">
	  <label class="control-label col-sm-2" for="Porcentagem">Nivel:</label>
		<div class="col-xs-1">
		<select name="nivel" class="form-control" >
		<option>1</option>
		<option>2</option>
		</select> 
		</div>
	 </div>
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Cadastrar</button>
      </div>
    </div>
  </form>
</div>
</div>
</div>