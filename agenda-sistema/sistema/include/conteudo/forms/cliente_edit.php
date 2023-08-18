 <div class="container">
 
 <?php include 'include/buscas/clientes.php'; ?>
 
 <div class="panel panel-success">
      <div class="panel-heading"><h2>Edição de dados do Cliente: <?php echo $cliente["nome"] ?></h2></div>
      <div class="panel-body">


  <form class="form-horizontal" method="post" action="include/edit/cliente.php">
   
    <div class="form-group">
      <label class="control-label col-sm-2" for="nome">*Nome:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $cliente["nome"] ?>" required>
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">E-mail:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="digite o email" name="email" value="<?php echo $cliente["email"] ?>" >
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="telefone">Telefone:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="telefone" placeholder="digite o telefone" name="telefone" value="<?php echo $cliente["telefone"] ?>">
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="celular">celular:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="celular" placeholder="digite o celular" name="celular" value="<?php echo $cliente["celular"] ?>">
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="endereco">Endereço:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="endereco" placeholder="digite o endereço" name="endereco" value="<?php echo $cliente["endereco"] ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="bairro">Bairro:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="bairro" placeholder="digite o bairro" name="bairro" value="<?php echo $cliente["bairro"] ?>">
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="municipio">Município:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="municipio" placeholder="digite o municipio" name="municipio" value="<?php echo $cliente["municipio"] ?>" >
      </div>
    </div>
    
    <div class="form-group">
     
      <label class="control-label col-sm-2" for="Porcentagem">Data de nascimento:</label>
		<div class="col-xs-1">
		<select name="dia" class="form-control" >
	  	<option><?php echo $cliente["dia"] ?></option>
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
	  	<option><?php echo $cliente["mes"] ?></option>
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
	  	<option><?php echo $cliente["ano"] ?></option>
		  <?php $m = 1950;
			while($m<=2030){

				echo "<option>$m</option>";
				$m++;
			}
			 ?>				
		</select> 
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