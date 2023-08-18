<div class="container">
  
  <div class="row">
  
  <div class="col-sm-12">
  
  <div class="panel panel-warning">
     
      <div class="panel-heading"><h2>Agenda - Pesquisa - 
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
		<a href="agenda.php">
		<button type="button" class="btn btn-primary"><i class="fa fa-book" aria-hidden="true"></i>
			Agenda do dia</button></a>
		<a href="agenda_mes.php">
		<button type="button" class="btn btn-primary"><i class="fa fa-search" aria-hidden="true"></i>
			Agenda do mês</button></a>
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
			  $a = 2018;
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
			  $a = 2018;
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


 
  <table class="table table-hover">
    <thead>
      <tr>
		<th>Ações</th>
        <th>Nome</th>
        <th>Serviço</th>
        <th>Valor</th>
        <th>Horário</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      <?php 
		
		if(isset($_POST["dd"]) && isset($_POST["mm"]) && isset($_POST["aa"])){
		$dia = $_POST["dd"];
		$mes = $_POST["mm"];
		$ano = $_POST["aa"];
		$sqli = "SELECT * FROM agenda WHERE dia='$dia' and mes='$mes' and ano='$ano' ";
		$exec = $sql->query($sqli);
		$cont = mysqli_num_rows($exec);
		
		while($exibir = mysqli_fetch_assoc($exec)){
			
			echo "
		  <tr>
		  	<td>
			  <a href='agendar_busc_servico_edit.php?id=".$exibir["id"]."' data-toggle='tooltip' title='Editar'>
				<i class='fa fa-pencil-square-o' aria-hidden='true'></i></a> - 
			  <a href='include/exclui/agenda.php?id=".$exibir['id']."' data-toggle='tooltip' title='Excluir cliente'>
				<i class='fa fa-times' aria-hidden='true'></i></a>
		   </td>
			<td>
			<a href='agenda_detalhes.php?id=".$exibir['id']."' data-toggle='tooltip' title='Clique para ver detalhes'>
			".$exibir['nome']."
			</a>
			</td>
			<td>".$exibir['servico']."</td>
			<td>R$ ".number_format($exibir['valor'],2,",",".")."</td>
			<td>".$exibir['horario']."</td>
			<td>".$exibir['status']."</td>
		  </tr>

		  ";
		}
		}
		
		if(isset($_POST["mes"]) && isset($_POST["ano"])){
			
		
		$mes = $_POST["mes"];
		$ano = $_POST["ano"];
		$sqli = "SELECT * FROM agenda WHERE mes='$mes' and ano='$ano' ";
		$exec = $sql->query($sqli);
		$cont = mysqli_num_rows($exec);
		
		while($exibir = mysqli_fetch_assoc($exec)){
			
			echo "
		  <tr>
		  	<td>
			  <a href='agendar_busc_servico_edit.php?id=".$exibir["id"]."' data-toggle='tooltip' title='Editar'>
				<i class='fa fa-pencil-square-o' aria-hidden='true'></i></a> - 
			  <a href='include/exclui/agenda.php?id=".$exibir['id']."' data-toggle='tooltip' title='Excluir cliente'>
				<i class='fa fa-times' aria-hidden='true'></i></a>
		   </td>
			<td>
			<a href='agenda_detalhes.php?id=".$exibir['id']."' data-toggle='tooltip' title='Clique para ver detalhes'>
			".$exibir['nome']."
			</a>
			</td>
			<td>".$exibir['servico']."</td>
			<td>R$ ".number_format($exibir['valor'],2,",",".")."</td>
			<td>".$exibir['horario']."</td>
			<td>".$exibir['status']."</td>
		  </tr>

		  ";
		}
		}
	  ?>
	  
	  <tr>
      	<td></td>
      	<td></td>
      	<td></td>
      	<td></td>
		<td align="right"></td>
      	<td></td>
      </tr>
      
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