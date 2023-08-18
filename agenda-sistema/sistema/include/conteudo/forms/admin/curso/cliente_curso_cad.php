<div class="container">
 
 <div class="panel panel-warning">
      <div class="panel-heading"><h2>Cadastro de Aluno</h2> <input type="button" class="btn btn-default" value="Voltar" onClick="history.go(-1)"></div>
      <div class="panel-body">


  <form name="cliente_cad" class="form-horizontal" action="aluno_cad.php" method="post" enctype='multipart/form-data'>
   
	<div class="form-group">
      <label class="control-label col-sm-2" for="cpf">*CPF:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="cpf" placeholder="digite o cpf" name="cpf" required>
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="rg">RG:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="rg" placeholder="digite o rg" name="rg" >
      </div>
    </div>
	  
    <div class="form-group">
     
      <label class="control-label col-sm-2" for="Porcentagem">Sexo:</label>
       <div class="col-sm-10">
		<div class="col-xs-4">
		<select name="sexo" class="form-control" >
	  		<option>Masculino</option>
			<option>Feminino</option>
		</select> 
		</div>
		</div>
	  </div> 
	  
    <div class="form-group">
      <label class="control-label col-sm-2" for="nome">*Nome Completo:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nome" placeholder="digite o nome completo" name="nome" required>
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
      <label class="control-label col-sm-2" for="email">E-mail:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="digite o email" name="email" >
      </div>
    </div>
	<div class="form-group">
     
      <label class="control-label col-sm-2" for="Porcentagem">Nascimento:</label>
       <div class="col-sm-10">
		<div class="col-xs-2">
		<select name="dia" class="form-control" >
	  		<option>0</option>
		  <?php $m = 1;
			while($m<=31){

				echo "<option>$m</option>";
				$m++;
			}
			 ?>				
		</select> 
		</div>
		<div class="col-xs-2">
		<select name="mes" class="form-control" >
	  		<option>0</option>
		  <?php $m = 1;
			while($m<=12){

				echo "<option>$m</option>";
				$m++;
			}
			 ?>				
		</select> 
		</div>
		<div class="col-xs-2">
		<select name="ano" class="form-control" >
	  		<option>0</option>
		  <?php $m = 1930;
			while($m<=2012){

				echo "<option>$m</option>";
				$m++;
			}
			 ?>				
		</select> 
		</div>
		</div>
	  </div> 
	  
	<div class="form-group">
      <label class="control-label col-sm-2" for="endereco">Foto:</label>
      <div class="col-sm-10">
        <input type="file" id="customFile" name="foto" >
		  <label class="custom-file-label" for="customFile">Escolher Arquivo</label>
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
      <label class="control-label col-sm-2" for="cep">*CEP:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="cep" placeholder="digite o cep" name="cep" required>
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="uf">Estado:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="uf" placeholder="digite o Estado" name="uf" >
      </div>
    </div>
	  
    <!--<div class="form-group">
      <label class="control-label col-sm-2" for="senha">*Senha:</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite sua senha" required >
      </div>
    </div>-->
	  
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="cadastrar" class="btn btn-default">Cadastrar</button>
      </div>
    </div>
  </form>
</div>
	 </div>
	 </div>