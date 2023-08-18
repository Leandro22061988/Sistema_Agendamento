<div class="container">
  
  <div class="row">
  
  <?php include './include/dados.php'; ?>
  
  <!-- coluna da esquerda  -->
  <div class="col-sm-6">
  
  <div class="panel panel-primary">
      <div class="panel-heading"><h2>Agenda do dia</h2></div>
      <div class="panel-body">
  
  <p class="text-muted">
  Total de Clientes agendados pra hoje 
   <span class="badge">
	<?php 
	    
		$d = date("d");
		$m = date("m");
		$a = date("Y");	
		$st = "Agendado";
		$com = "SELECT * FROM agenda WHERE dia='$d' AND mes='$m' AND ano='$a' AND status='$st' AND  id_prof='$pid'";
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
		$sqli = "SELECT * FROM agenda WHERE dia='$dia' and mes='$mes' and ano='$ano' and status='$sit' and id_prof='$pid'";
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
  
	  
</div><!-- Fim coluna da esquerda  -->
  
  <div class="col-sm-6">
  
  	<div class="panel panel-primary">
      <div class="panel-heading"><h2>Agenda do mês</h2></div>
      <div class="panel-body">
  
  <p class="text-muted">
  Total de Clientes atendidos no mês 
   <span class="badge">
	<?php 
	    $log = $_SESSION["entrarlogin"];
	    $pes = "SELECT * FROM funcionario WHERE login='$log'";
	    $ac = $sql->query($pes);
	   	$prf = mysqli_fetch_assoc($ac);
	    $pid = $prf["id"];
	   
		$m = date("m");
		$a = date("Y");	
		$st = "Atendido";
		$com = "SELECT * FROM agenda WHERE mes='$m' AND ano='$a' AND status='$st' AND  id_prof='$pid'";
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
        <th>Data</th>
        <th>Horário</th>
      </tr>
    </thead>
    <tbody>
     
     <?php 
		$mes = date("m");
		$ano = date("Y");
		$sit = "Atendido";
		$sqli = "SELECT * FROM agenda WHERE mes='$mes' and ano='$ano' and status='$sit' and id_prof='$pid' ORDER BY dia";
		$exec = $sql->query($sqli);
		$cont = mysqli_num_rows($exec);
		
		while($exibir = mysqli_fetch_assoc($exec)){
			
			echo "
			
				<tr>
					<td>".$exibir['nome']."</td>
					<td>".$exibir['servico']."</td>
					<td>".$exibir['dia']."/".$exibir['mes']."/".$exibir['ano']."</td>
					<td>".$exibir['horario']."</td>
				</tr>
			
			";
		}
	  ?>
     
    </tbody>
  </table>
 </div>
</div><!-- Fim da Agenda -->
    
  </div>
</div>
  
  <!--<div class="well">Normal Well</div>
  <div class="well">Normal Well</div>
  <div class="well">Normal Well</div>-->
  
</div>