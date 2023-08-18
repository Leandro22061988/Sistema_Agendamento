<div class="container">
  
  <div class="row">
  
  <!-- coluna da esquerda  -->
  <div class="col-sm-6">
  
  <div class="panel panel-primary">
      <div class="panel-heading"><h2>Agenda</h2></div>
      <div class="panel-body">
  
  
  <p>Alguns dos clientes Agendados para hoje: 
  <a href="agenda.php">
  <button type="button" class="btn btn-link">Ver agenda completa</button></a></p>
  <p class="text-muted">
  Total de Clientes agendados pra hoje 
   <span class="badge">
	<?php 
		$d = date("d");
		$m = date("m");
		$a = date("Y");	
		$st = "Agendado";
		$com = "SELECT * FROM agenda WHERE dia = '$d' AND mes = '$m' AND ano = '$a' AND status = '$st'";
	    $exe = $sql->query($com);
	   	$conta = mysqli_num_rows($exe);
	    $n = mysqli_fetch_assoc($exe);
	   
			
			echo $conta ;
	?>
   </span></p>   
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Cliente</th>
        <th>Serviço</th>
        <th>Horário</th>
      </tr>
    </thead>
    <tbody>
     
     <?php 
		$dia = date("d");
		$mes = date("m");
		$ano = date("Y");
		$sit = "Agendado";
		$sqli = "SELECT * FROM agenda WHERE dia='$dia' and mes='$mes' and ano='$ano' and status='$sit' LIMIT 5 ";
		$exec = $sql->query($sqli);
		$cont = mysqli_num_rows($exec);
		
		while($exibir = mysqli_fetch_assoc($exec)){
			
			echo "
			
				<tr>
					<td>".$exibir['nome']."</td>
					<td>".$exibir['servico']."</td>
					<td>".$exibir['horario']."</td>
				</tr>
			
			";
		}
	  ?>
     
    </tbody>
  </table>
 </div>
</div><!-- Fim da Agenda -->
  
<div class="panel panel-primary">
      <div class="panel-heading"><h2>Aniversariantes do dia</h2></div>
      <div class="panel-body">
  
  
  
  <p class="text-muted">
  Total de aniversariantes do dia
   <span class="badge">
	<?php 
		$d = date("d");
		$m = date("m");
		$a = date("Y");	
		$st = "Agendado";
		$com = "SELECT * FROM cliente WHERE dia = '$d' AND mes = '$m' ";
	    $exe = $sql->query($com);
	   	$conta = mysqli_num_rows($exe);
	    $n = mysqli_fetch_assoc($exe);
	   
			
			echo $conta ;
	?>
   </span></p>   
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Data de nascimento</th>
        <th>Idade</th>
      </tr>
    </thead>
    <tbody>
     
     <?php 
		$dia = date("d");
		$mes = date("m");
		$ano = date("Y");
		$sqli = "SELECT * FROM cliente WHERE dia='$dia' and mes='$mes' LIMIT 5 ";
		$exec = $sql->query($sqli);
		$cont = mysqli_num_rows($exec);
		
		while($exibir = mysqli_fetch_assoc($exec)){
			$idade = $ano - $exibir["ano"];
			echo "
			
				<tr>
					<td>".$exibir['nome']."</td>
					<td>".$exibir['dia']."/".$exibir['mes']."/".$exibir['ano']."</td>
					<td>".$idade." anos"."</td>
				</tr>
			
			";
		}
	  ?>
     
    </tbody>
  </table>
 </div>
</div><!-- Fim Aniversariantes do dia -->
	  
</div><!-- Fim coluna da esquerda  -->
  
  <div class="col-sm-6">
  
  	<div class="panel panel-primary">
      <div class="panel-heading"><h2>Total de Ganhos e Gastos do dia</h2></div>
      <div class="panel-body">
      	
      	<div class="panel panel-default">
		  <div class="panel-body"><strong>Ganhos:</strong></div>
		  <div class="panel-body">R$ 
		  <?php 
			$d = date("d");
			$m = date("m");
			$a = date("Y");
			$sta = "Atendido";
			$cons = "SELECT SUM(valor) as SOMA, dia, mes, ano FROM agenda WHERE dia='$d' and mes='$m' and ano='$a' and status='$sta' ";
			$executa = $sql->query($cons);
			
			  while($mostra = mysqli_fetch_assoc($executa)){
				  echo number_format($mostra["SOMA"],2,",",".");
			  }
			
		  ?>
		  </div>
		</div>
     	
     	<div class="panel panel-default">
		  <div class="panel-body"><strong>Gastos:</strong></div>
		  <div class="panel-body">R$ 
		  <?php 
			$d = date("d");
			$m = date("m");
			$a = date("Y");
			$cons = "SELECT SUM(valor) as SOMA, dia, mes, ano FROM gastos WHERE dia='$d' and mes='$m' and ano='$a'";
			$executa = $sql->query($cons);
			
			  while($mostra = mysqli_fetch_assoc($executa)){
				  echo number_format($mostra["SOMA"],2,",",".");
			  }
			
		  ?>
		  </div>
		</div>
      	
      </div>
    </div>
    
<div class="panel panel-primary">
  <div class="panel-heading"><h2>Aniversariantes do mês</h2></div>
  <div class="panel-body">
  
  
  
  <p class="text-muted">
  Total de aniversariantes do mês
   <span class="badge">
	<?php 
		$d = date("d");
		$m = date("m");
		$a = date("Y");	
		$st = "Agendado";
		$com = "SELECT * FROM cliente WHERE mes = '$m' ";
	    $exe = $sql->query($com);
	   	$conta = mysqli_num_rows($exe);
	    $n = mysqli_fetch_assoc($exe);
	   
			
			echo $conta ;
	?>
   </span></p>   
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Data de nascimento</th>
        <th>Idade</th>
      </tr>
    </thead>
    <tbody>
     
     <?php 
		$dia = date("d");
		$mes = date("m");
		$ano = date("Y");
		$sqli = "SELECT * FROM cliente WHERE mes='$mes' ORDER BY dia LIMIT 5";
		$exec = $sql->query($sqli);
		$cont = mysqli_num_rows($exec);
		
		while($exibir = mysqli_fetch_assoc($exec)){
			$idade = $ano - $exibir["ano"];
			echo "
			
				<tr>
					<td>".$exibir['nome']."</td>
					<td>".$exibir['dia']."/".$exibir['mes']."/".$exibir['ano']."</td>
					<td>".$idade." anos"."</td>
				</tr>
			
			";
		}
	  ?>
     
    </tbody>
  </table>
 </div>
</div><!-- Fim Aniversariantes do mês -->
  
  </div>
</div>
  
  <!--<div class="well">Normal Well</div>
  <div class="well">Normal Well</div>
  <div class="well">Normal Well</div>-->
  
</div>