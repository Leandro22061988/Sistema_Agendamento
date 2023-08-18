 <div class="container">
 
  <?php include 'include/buscas/funcionarios.php'; ?>
  
 <div class="panel panel-success">
      <div class="panel-heading"><h2>Edição de dados de Funcionário</h2></div>
      <div class="panel-body">


  <form class="form-horizontal" method="post" action="include/edit/funcionario.php">
   
    <div class="form-group">
      <label class="control-label col-sm-2" for="nome">*Nome:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nome" placeholder="digite o nome" name="nome" value="<?php echo $func["nome"] ?>" required>
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">E-mail:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="digite o email" name="email" value="<?php echo $func["email"] ?>" >
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="telefone">Telefone:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="telefone" placeholder="digite o telefone" name="telefone" value="<?php echo $func["telefone"] ?>" >
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="celular">celular:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="celular" placeholder="digite o celular" name="celular" value="<?php echo $func["celular"] ?>">
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="endereco">Endereço:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="endereco" placeholder="digite o endereço" name="endereco" value="<?php echo $func["endereco"] ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="bairro">Bairro:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="bairro" placeholder="digite o bairro" name="bairro" value="<?php echo $func["bairro"] ?>">
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="municipio">Município:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="municipio" placeholder="digite o municipio" name="municipio" value="<?php echo $func["municipio"] ?>" >
      </div>
    </div>
    
    <div class="form-group">
     
      <label class="control-label col-sm-2" for="Porcentagem">Data de nascimento:</label>
		<div class="col-xs-1">
		<select name="dia" class="form-control" >
	     <option><?php echo $func["dia"] ?></option>
		  <?php $m = 1;
			while($m<=31){

				echo "<option>$m</option>";
				$m++;
			}
			 ?>				
		</select> 
		</div>
		<div class="col-xs-1">
		<select name="mes" class="form-control" >
	  	 <option><?php echo $func["mes"] ?></option>
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
	     <option><?php echo $func["ano"] ?></option>
		  <?php $m = 1950;
			while($m<=2030){

				echo "<option>$m</option>";
				$m++;
			}
			 ?>				
		</select> 
		</div>
		
	  </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="funcao">Função:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="funcao"  name="funcao" value="<?php echo $func["funcao"] ?>" >
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="salario">Salário:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="salario" name="salario" value="<?php echo $func["salario"] ?>" >
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="porcentagem">Porcentagem:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="porcentagem" name="porcentagem" value="<?php echo $func["porcentagem"] ?>" >
      </div>
    </div>
    
    <input type="hidden" name="id" value="<?php echo $func["id"] ?>">
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Confirmar</button>
      </div>
    </div>
  </form>
</div>
	 </div>
	 </div>