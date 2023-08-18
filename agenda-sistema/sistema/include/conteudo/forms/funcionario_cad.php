 <div class="container">
 
 <div class="panel panel-success">
      <div class="panel-heading"><h2>Cadastro de Funcionário</h2></div>
      <div class="panel-body">


  <form name="func" class="form-horizontal" action="include/insert/funcionario.php" method="post">
   
    <div class="form-group">
      <label class="control-label col-sm-2" for="nome">*Nome:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nome" placeholder="digite o nome" name="nome" required>
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">E-mail:</label>
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
     
      <label class="control-label col-sm-2" for="Porcentagem">Data de nascimento:</label>
		<div class="col-xs-1">
		<select name="dia" class="form-control" >
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
		  <?php $m = 1950;
			while($m<=2009){

				echo "<option>$m</option>";
				$m++;
			}
			 ?>				
		</select> 
		</div>
		
	  </div>
		<?php 
			$nome = $_GET["funcao"];
			$sqli = "SELECT * FROM funcao WHERE funcao='$nome'";
			$exec = $sql->query($sqli);
			$func = mysqli_fetch_assoc($exec);
		?>
    <div class="form-group">
      <label class="control-label col-sm-2" for="funcao">Função:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="funcao"  name="funcao" value="<?php echo $func["funcao"]; ?>" readonly >
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="salario">Salário:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="salario" name="salario" value="<?php echo $func["salario"]; ?>" readonly >
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="porcentagem">Porcentagem:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="porcentagem" name="porcentagem" value="<?php echo $func["porcentagem"]; ?>" readonly >
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="login">Login:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="login" name="login" placeholder="digite o Login" value="" required >
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="senha">Senha:</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="senha" name="senha" placeholder="digite a senha" value="" required>
        <input type="hidden" name="nivel" value="1" >
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