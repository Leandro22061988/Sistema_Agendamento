<div class="container">
<div class="row">

	<?php include './include/dados.php'; ?>

<div class="col-sm-12">
<div class="panel panel-info">
	<div class="panel-heading"><h2>Financeiro</h2></div>
<div class="panel-body">
<div class="well">
  <div class="row">
  
  <div class="col-sm-6">
  
  <div class="panel panel-info">
      <div class="panel-heading"><h4><i class="fa fa-info-circle" aria-hidden="true"></i> DETALHES FINANCEIRO DO DIA</h4></div>
      <div class="panel-body">
      
      <div class="panel panel-default">
		  <div class="panel-body"><strong>Ganhos do dia:</strong> R$ 
		  <?php 		
			$d = date("d");
			$m = date("m");
			$a = date("Y");
			$sta = "Atendido";
			$cons = "SELECT SUM(valor) as SOMA, dia, mes, ano FROM agenda WHERE dia='$d' and mes='$m' and ano='$a' and id_prof='$pid' and status='$sta'";
			$executa = $sql->query($cons);
			$mostra = mysqli_fetch_assoc($executa);
				  echo number_format($mostra["SOMA"],2,",",".");
		  ?>
		  </div>
		  
		  <div class="panel-body"><strong>Lucro do dia:</strong> R$ 
		  <?php 
			$gd = $mostra["SOMA"];
			$lc = $gd - ($p * $gd);
				  echo number_format($lc,2,",",".");
			
		  ?>
		  </div>
	  </div>
      
    </div>
</div>
	  
	  <!-- DETALHES FINANCEIRO DO MÊS -->
	  
	  
	  <div class="panel panel-info">
      <div class="panel-heading"><h4><i class="fa fa-info-circle" aria-hidden="true"></i> Salario a receber</h4></div>
      <div class="panel-body">
      
	   <table class="table table-hover">
		<thead>
		  <tr>
			<th>Nome</th>
			<th>Salario</th>
		  </tr>
		</thead>
		<tbody>
		 <?php 
			$sqli = "SELECT * FROM funcionario WHERE id='$pid'";
			$exec = $sql->query($sqli);
			$cont = mysqli_num_rows($exec);

			$exibi = mysqli_fetch_assoc($exec);

				echo "
			  <tr>
			    <td>".$exibi['nome']."</td>
				<td>R$ ".number_format($exibi['salario'],2,",",".")."</td>
			  </tr>

			  ";
			
		  ?>
		  
		</tbody>
	  </table>
    </div>
</div>
	  
	  
	  
	  
</div>
  
  <!--  Lado direito -->
  <div class="col-sm-6">
  
  	<div class="panel panel-info">
      <div class="panel-heading"><h4><i class="fa fa-info-circle" aria-hidden="true"></i> DETALHES FINANCEIRO DO MÊS</h4></div>
      <div class="panel-body">
      
      
      
      <div class="panel panel-default">
		  <div class="panel-body"><strong>Ganhos do mês:</strong> R$ 
		  <?php 
			$m = date("m");
			$a = date("Y");
			$sta = "Atendido";
			$cons = "SELECT SUM(valor) as SOMA, mes, ano FROM agenda WHERE mes='$m' and ano='$a' and id_prof='$pid' and status='$sta'";
			$executa = $sql->query($cons);
			$mostrar = mysqli_fetch_assoc($executa);
			 
			   echo number_format($mostrar["SOMA"],2,",",".");
		  ?> 
		  <span class="text-primary" data-toggle="popover" title="Soma dos ganhos no mês, com o desconto da porcentagem." data-placement="top" data-content=" Com base nos clientes Atendidos."><i class="fa fa-question-circle" aria-hidden="true"></i></span>
		  </div>
		  <div class="panel-body"><strong>Lucro do mês:</strong> R$ 
		  	<?php 
			  $gda = $mostrar["SOMA"];
			  $lca = $gda - ($p * $gda);
			   echo number_format($lca,2,",",".");
			  ?>
		  </div>
	  </div>
    </div>
  </div>
	  
<div class="panel panel-info">
      <div class="panel-heading"><h4><i class="fa fa-info-circle" aria-hidden="true"></i> Porcentagem a receber</h4></div>
      <div class="panel-body">
      
	   <table class="table table-hover">
		<thead>
		  <tr>
			<th>Nome</th>
			<th>Ganhos</th>
			<th>Porcentagem</th>
		  </tr>
		</thead>
		<tbody>
		 <?php
			$m = date("m");
			$a = date("Y");
			$stt = "Atendido";
			$sqli = "SELECT agenda.id_prof, agenda.status, agenda.mes, agenda.ano, agenda.profissional as PROF, SUM(agenda.valor) as SOMA, funcionario.porcentagem as PORC FROM agenda INNER JOIN funcionario ON funcionario.id=agenda.id_prof WHERE agenda.status='$stt' AND agenda.mes='$m' AND agenda.ano='$a' AND agenda.id_prof='$pid' GROUP BY agenda.id_prof, agenda.profissional, funcionario.porcentagem, funcionario.nome ORDER BY funcionario.nome";
			$exec = $sql->query($sqli);
			//$cont = mysqli_num_rows($exec);
				$exibir = mysqli_fetch_assoc($exec);
				$por = $exibir['PORC'] / 100.0;
				$som = $exibir['SOMA'];
				$tt = $som - ($por * $som);
				echo "
			  <tr>
			    <td>".$exibir['PROF']."</td>
				<td>R$ ".number_format($tt,2,",",".")."</td>
				<td>-".$exibir['PORC']."%</td>
			  </tr>

			  ";
			;
		  ?>
		  
		</tbody>
	  </table>
     
      
   
    </div>
  </div>  
  
</div>

<div class="panel panel-default">
		  <div class="panel-body"><strong>Total a receber </strong><span class="text-primary" data-toggle="popover" title="Soma do total de salários a receber." data-placement="top" data-content=" Mais(+) o total da porcentagem a receber."><i class="fa fa-question-circle" aria-hidden="true"></i></span> 
		  <h3>
					Total: R$ 
					<?php 
						$sal = $exibi['salario'];
						$sp = $sal + $tt;
						echo number_format($sp,2,",",".")
			
		  			?> 
					
		  </h3>
		  
		  </div>
		  
	  </div>

</div>
</div>
  
</div>
</div>
</div>
</div>
</div>