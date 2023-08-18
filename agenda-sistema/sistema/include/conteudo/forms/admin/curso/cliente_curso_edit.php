﻿<div class="container">
 
 <div class="panel panel-warning">
      <div class="panel-heading"><h2>Edição de dados do Aluno</h2> <input type="button" class="btn btn-default" value="Voltar" onClick="history.go(-1)"></div>
      <div class="panel-body">


  <form name="cliente_cad" class="form-horizontal" action="include/edit/aluno.php" method="post" enctype='multipart/form-data'>
   <?php 
	  	$id = $_GET["id"];
		$sqli = "SELECT * FROM aluno WHERE id='$id'";
		$exec = $sql->query($sqli);
		$cont = mysqli_num_rows($exec);
		$exibir = mysqli_fetch_assoc($exec);
	  ?>
	<div class="form-group">
      <label class="control-label col-sm-2" for="cpf">*CPF:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="cpf" value="<?php echo $exibir["cpf"] ?>" name="cpf" required>
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="rg">RG:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="rg" value="<?php echo $exibir["rg"] ?>" name="rg" >
      </div>
    </div>
	  
    <div class="form-group">
     
      <label class="control-label col-sm-2" for="Porcentagem">Sexo:</label>
       <div class="col-sm-10">
		<div class="col-xs-4">
		<select name="sexo" class="form-control" >
			<option><?php echo $exibir["sexo"] ?></option>
	  		<option>Masculino</option>
			<option>Feminino</option>
		</select> 
		</div>
		</div>
	  </div> 
	  
    <div class="form-group">
      <label class="control-label col-sm-2" for="nome">*Nome Completo:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nome" value="<?php echo $exibir["nome"] ?>" name="nome" required>
      </div>
    </div>
	  
    <div class="form-group">
      <label class="control-label col-sm-2" for="telefone">Telefone:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="telefone" value="<?php echo $exibir["telefone"] ?>" name="telefone">
      </div>
    </div>
	  
    <div class="form-group">
      <label class="control-label col-sm-2" for="celular">celular:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="celular" value="<?php echo $exibir["celular"] ?>" name="celular">
      </div>
    </div>
	  
     <div class="form-group">
      <label class="control-label col-sm-2" for="email">E-mail:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" value="<?php echo $exibir["email"] ?>" name="email" >
      </div>
    </div>
	<div class="form-group">
     
      <label class="control-label col-sm-2" for="Porcentagem">Nascimento:</label>
       <div class="col-sm-10">
		<div class="col-xs-2">
		<select name="dia" class="form-control" >
	  		<option><?php echo $exibir["dia"] ?></option>
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
	  		<option><?php echo $exibir["mes"] ?></option>
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
	  		<option><?php echo $exibir["ano"] ?></option>
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
      <label class="control-label col-sm-2" for="endereco">Endereço:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="endereco" value="<?php echo $exibir["endereco"] ?>" name="endereco">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="bairro">Bairro:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="bairro" value="<?php echo $exibir["bairro"] ?>" name="bairro">
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="municipio">Município:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="municipio" value="<?php echo $exibir["municipio"] ?>" name="municipio" >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="cep">*CEP:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="cep" value="<?php echo $exibir["cep"] ?>" name="cep" required>
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="uf">Estado:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="uf" value="<?php echo $exibir["uf"] ?>" name="uf" >
      </div>
    </div>
	  
    <!--<div class="form-group">
      <label class="control-label col-sm-2" for="senha">*Senha:</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="senha" name="senha" value="Digite sua senha" required >
      </div>
    </div>-->
	  <input type="hidden" name="id" value="<?php echo $exibir["id"] ?>">
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="cadastrar" class="btn btn-default">Enviar</button>
      </div>
    </div>
  </form>
</div>
	 </div>
	 </div>