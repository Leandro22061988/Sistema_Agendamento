 <div class="container">
 
 <div class="panel panel-success">
      <div class="panel-heading"><h4>Cadastro de Função para funcionários</h4></div>
      <div class="panel-body">


  <form name="funccao" class="form-horizontal" action="include/insert/funcao.php" method="post">
   
   <div class="form-group row">
      <div class="col-xs-6">
       
        <label for="sel1"><h4>Formas de Pagamento:   
        <?php if(isset($_GET["pg"])){ ?>
        
			<?php if($_GET["pg"] == "s" ){ ?>
			<strong>Apenas Salário</strong>
			<?php }else{}?>
			<?php if($_GET["pg"] == "p" ){ ?>
			<strong>Apenas porcentagem</strong>
			<?php }else{}?>
			<?php if($_GET["pg"] == "sep" ){ ?>
			<strong>Sálario + Porcentagem</strong>
			<?php }else{}?>   
            
        <?php }else{}?>
        </h4>
        </label>
        
		  <div class="dropdown">
		 <!-- <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
		  Selecionar <span class="caret"></span></button>
		  <ul class="dropdown-menu">
			<li><a href="admin_funcoes_cad.php?pg=sep">Salário e Porcentagem</a></li>
			<li><a href="admin_funcoes_cad.php?pg=s">Salário</a></li>
			<li><a href="admin_funcoes_cad.php?pg=p">Porcentagem</a></li>
		  </ul>-->
		 <div class="col-xs-4">
		 <select onchange="location = this.value;" class="form-control">
		   <option value="" selected>Selecionar</option>
		   <option value="admin_funcoes_cad.php?pg=sep">Salário e Porcentagem</option>
		   <option value="admin_funcoes_cad.php?pg=s">Salário</option>
		   <option value="admin_funcoes_cad.php?pg=p">Porcentagem</option>
		  </select>
		 </div>
		</div>
      </div>
	 </div>
	 
   
    <?php if(isset($_GET["pg"])){ ?>
    
    
    <?php if($_GET["pg"] == "s" ){ ?>
    <div class="form-group">
      <label class="control-label col-sm-2" for="nome">*Função:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nome" placeholder="digite o nome da função" name="nome" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="salario">Salário:</label>
      <div class="col-sm-10">
        <input type="salario" class="form-control" id="email" placeholder="digite o salário" name="salario" required>
        <input type="hidden" name="porcentagem" value="0">
      </div>
    </div>
    <?php }else{} ?>
    
    <?php if($_GET["pg"] == "p"){ ?>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="nome">*Função:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nome" placeholder="digite o nome da função" name="nome" required>
      </div>
    </div>
    <div class="form-group">     
      <label class="control-label col-sm-2" for="Porcentagem">Porcentagem (%):</label>
		<div class="col-xs-1">
		<select name="porcentagem" class="form-control" >
		<option>0</option>
			<?php $m = 0;
			while($m<=100){

				echo "<option>$m</option>";
				$m++;
			}
			 ?>
		</select> 
		<input type="hidden" name="salario" value="0">
		</div>
	  </div>
      <?php }else{} ?>  
      
      <?php if($_GET["pg"] == "sep"){ ?>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="nome">*Função:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nome" placeholder="digite o nome da função" name="nome" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="salario">Salário:</label>
      <div class="col-sm-10">
        <input type="salario" class="form-control" id="email" placeholder="digite o salário" name="salario" required>
      </div>
    </div>
    <div class="form-group">     
      <label class="control-label col-sm-2" for="Porcentagem">Porcentagem (%):</label>
		<div class="col-xs-1">
		<select name="porcentagem" class="form-control" >
		<option>0</option>
			<?php $m = 0;
			while($m<=100){

				echo "<option>$m</option>";
				$m++;
			}
			 ?>
		</select> 
		</div>
	  </div>
      <?php }else{} ?>  
      
      <?php if($_GET["pg"]){ ?>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Cadastrar</button>
      </div>
    </div>
    <?php }else{} ?>
    
    <?php }else{} ?>
  </form>
  
</div>
	 </div>
	 </div>