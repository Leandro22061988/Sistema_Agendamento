<div class="container">
  
  <div class="row">
  
  <div class="col-sm-12">
  
  <div class="panel panel-primary">
     
      <div class="panel-heading"><h2>Gastos - Pesquisa - 
      <?php 
		  if(isset($_POST["dd"]) && isset($_POST["mm"]) && isset($_POST["aa"])){
		  	echo $_POST["dd"]."/".$_POST["mm"]."/".$_POST["aa"]; 
		  }elseif(isset($_POST["mes"]) && isset($_POST["ano"])){
			  echo $_POST["mes"]."/".$_POST["ano"];
		  }
		  
	   ?></h2>
     </div>
<div class="panel-body">
  
	<div class="btn-group">
	<a href="gastos_cad.php">
	  <button type="button" class="btn btn-primary"><i class="fa fa-book" aria-hidden="true"></i>
		  Registrar Gastos</button></a>
	<a href="gastos.php">
	  <button type="button" class="btn btn-primary"><i class="fa fa-search" aria-hidden="true"></i>
		  Gastos</button></a>
	<a href="index.php">
	  <button type="button" class="btn btn-primary"><i class="fa fa-home" aria-hidden="true"></i>
		  Ir para home</button></a>
	</div> 
</div>

<div class="panel-body">


	<div class="col-sm-6">
  
	<form name="dma" method="post">
    <div class="form-group row">
      <div class="col-xs-2">
        <label for="sel1">Dia:</label>
		  <select name="dd" class="form-control" id="sel1">
			
			<?php 
			  $d = 1;
			  while($d<=31){
				  
			  echo "<option>$d</option>";
				  $d++;
			  }
			  ?>
			
		  </select>
      </div>
      <div class="col-xs-2">
        <label for="sel1">Mês:</label>
		  <select name="mm" class="form-control" id="sel1">
			<?php 
			  $m = 1;
			  while($m<=12){
				  
			  echo "<option>$m</option>";
				  $m++;
			  }
			  ?>
		  </select>
      </div>
      <div class="col-xs-3">
        <label for="sel1">Ano:</label>
		  <select name="aa" class="form-control" id="sel1">
			<?php 
			  $a = 2017;
			  while($a<=2036){
				  
			  echo "<option>$a</option>";
				  $a++;
			  }
			  ?>
		  </select>
      </div>
      <div class="col-xs-1">
      <label for="sel1"></label>
      <button type="submit" class="btn btn-default"><i class="fa fa-search" aria-hidden="true"></i> Pesquisar</button>
	</div>
    </div>
 	</form>
	</div>
	
	<div class="col-sm-6">
	<form name="mes_ano" method="post">
    <div class="form-group row">
      
      <div class="col-xs-2">
        <label for="sel1">Mês:</label>
		  <select name="mes" class="form-control" id="sel1">
			<?php 
			  $m = 1;
			  while($m<=12){
				  
			  echo "<option>$m</option>";
				  $m++;
			  }
			  ?>
		  </select>
      </div>
      <div class="col-xs-3">
        <label for="sel1">Ano:</label>
		  <select name="ano" class="form-control" id="sel1">
			<?php 
			  $a = 2017;
			  while($a<=2036){
				  
			  echo "<option>$a</option>";
				  $a++;
			  }
			  ?>
		  </select>
      </div>
      <div class="col-xs-1">
      <label for="sel1"></label>
      <button type="submit" class="btn btn-default"><i class="fa fa-search" aria-hidden="true"></i> Pesquisar</button>
	</div>
    </div>
  </form>
</div>
</div>
<div class="panel-body">             
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Ações</th>
        <th>Descrição</th>
        <th>Valor</th>
        <th>Data</th>
      </tr>
    </thead>
    <tbody>
      <?php 
		if(isset($_POST["dd"]) && isset($_POST["mm"]) && isset($_POST["aa"])){
		$dia = $_POST["dd"];
		$mes = $_POST["mm"];
		$ano = $_POST["aa"];
		$sqli = "SELECT * FROM gastos WHERE dia='$dia' and mes='$mes' and ano='$ano' ";
		$exec = $sql->query($sqli);
		  
		while($exibir = mysqli_fetch_assoc($exec)){
			echo "
		<tr>
		<td>
        <a href='gastos_edit.php?id=".$exibir["id"]."' data-toggle='tooltip' title='Editar dados'><i class='fa fa-pencil-square-o' aria-hidden='true'></i></a> - 
        <a href='include/exclui/gastos.php?id=".$exibir["id"]."' data-toggle='tooltip' title='Excluir'> <i class='fa fa-times' aria-hidden='true'></i></a>
		</td>
		<td>
		".$exibir["descricao"]."
		</td>
        <td>".number_format($exibir["valor"],2,",",".")."</td>
        <td>".$exibir["dia"]."/".$exibir["mes"]."/".$exibir["ano"]."</td>
		</tr>";
		}
		}
		
		
		if(isset($_POST["mes"]) && isset($_POST["ano"])){
			
		$mes = $_POST["mes"];
		$ano = $_POST["ano"];
		$sqli = "SELECT * FROM gastos WHERE mes='$mes' and ano='$ano' ";
		$exec = $sql->query($sqli);
		  
		while($exibir = mysqli_fetch_assoc($exec)){
			echo "
		<tr>
		<td>
        <a href='gastos_edit.php?id=".$exibir["id"]."' data-toggle='tooltip' title='Editar dados'><i class='fa fa-pencil-square-o' aria-hidden='true'></i></a> - 
        <a href='include/exclui/gastos.php?id=".$exibir["id"]."' data-toggle='tooltip' title='Excluir'> <i class='fa fa-times' aria-hidden='true'></i></a>
		</td>
		<td>
		<a href='fornecedor_detalhes.php?id=".$exibir["id"]."' data-toggle='tooltip' title='Dados de cadastro'>".$exibir["descricao"]."</a>
		</td>
        <td>".number_format($exibir["valor"],2,",",".")."</td>
        <td>".$exibir["dia"]."/".$exibir["mes"]."/".$exibir["ano"]."</td>
		</tr>";
		}
		}
		?> 
    </tbody>
  </table>
 </div>
    </div>
	  
  </div>
  
  
</div>
  
  <!--<div class="well">Normal Well</div>
  <div class="well">Normal Well</div>
  <div class="well">Normal Well</div>-->
  
</div>