<div class="col-sm-6">
  
	  <!-- DETALHES FINANCEIRO DO MÊS -->
	  
	  <div class="panel panel-info">
      <div class="panel-heading"><h4><i class="fa fa-info-circle" aria-hidden="true"></i> DETALHES FINANCEIRO </h4></div>
      <div class="panel-body">
      
      
      
      <div class="panel panel-default">
		  <div class="panel-body"><strong>Ganhos:</strong> R$ 
		  <?php 
			$d = $_POST["d"];
			$m = $_POST["m"];
			$a = $_POST["a"];
			$sta = "Atendido";
			$cons = "SELECT SUM(valor) as SOMA, dia, mes, ano FROM agenda WHERE dia='$d' and mes='$m' and ano='$a' and status='$sta' ";
			$executa = $sql->query($cons);
			
			  while($most = mysqli_fetch_assoc($executa)){
				  echo number_format($most["SOMA"],2,",",".");
			  }
			
		  ?> <span class="text-primary" data-toggle="popover" title="Soma dos ganhos no mês." data-placement="top" data-content=" Com base nos clientes Atendidos."><i class="fa fa-question-circle" aria-hidden="true"></i></span>
		  </div>
		  <div class="panel-body"><strong>Gastos:</strong> R$ 
		  <?php 
			$d = $_POST["d"];
			$m = $_POST["m"];
			$a = $_POST["a"];
			$cons = "SELECT SUM(valor) as SOMA, dia, mes, ano FROM gastos WHERE dia='$d' and mes='$m' and ano='$a'";
			$gas = $sql->query($cons);
			
			  while($mostrag = mysqli_fetch_assoc($gas)){
				  echo number_format($mostrag["SOMA"],2,",",".");
			  }
			
		  ?>
		  </div>
		  <div class="panel-body"><strong>Estoque Compras:</strong> R$ 
		  <?php 
			$d = $_POST["d"];
			$m = $_POST["m"];
			$a = $_POST["a"];
			$cons = "SELECT SUM(valor_compra) as SOMA, dia, mes, ano FROM estoque WHERE dia='$d' and mes='$m' and ano='$a'";
			$gas = $sql->query($cons);
			
			  while($mostrag = mysqli_fetch_assoc($gas)){
				  echo number_format($mostrag["SOMA"],2,",",".");
			  }
			
		  ?>
		  </div>
		  <div class="panel-body"><strong>Cursos:</strong> R$ 
		  <?php 
			$d = $_POST["d"];
			$m = $_POST["m"];
			$a = $_POST["a"];
			$est = "SELECT SUM(valor) as SOMA, parcelas, dia, mes, ano FROM adesao_curso WHERE dia='$d' and mes='$m' and ano='$a' and parcelas = 1";
			$exest = $sql->query($est);
			$pacaixa = 0;
			  while($mest = mysqli_fetch_assoc($exest)){
				  $pacaixa = $mest["SOMA"];
				  echo number_format($pacaixa,2,",",".");
			  }
		
			
		  ?> <span class="text-primary" data-toggle="popover" title="Soma dos ganhos." data-placement="top" data-content=" Com base nos pagamentos a vista."><i class="fa fa-question-circle" aria-hidden="true"></i></span>
		  </div>
		  <div class="panel-body"><strong>Venda de produtos:</strong> R$ 
		  <?php 
			$d = $_POST["d"];
			$m = $_POST["m"];
			$a = $_POST["a"];
			$prod = "SELECT SUM(valor) as SOMA, parcelas, dia, mes, ano FROM produto_venda WHERE dia='$d' and mes='$m' and ano='$a' and parcelas <= 1";
			$expro = $sql->query($prod);
			$exibpro = mysqli_fetch_assoc($expro);
				  echo number_format($exibpro["SOMA"],2,",",".");
			
		  ?> <span class="text-primary" data-toggle="popover" title="Soma dos ganhos." data-placement="top" data-content=" Com base nos pagamentos a vista."><i class="fa fa-question-circle" aria-hidden="true"></i></span>
		  </div>
	  </div>
    </div>
  </div>
	  
	  
	  <div class="panel panel-info">
      <div class="panel-heading"><h4><i class="fa fa-info-circle" aria-hidden="true"></i> Salarios de funcionários a pagar</h4></div>
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
			$sqli = "SELECT * FROM funcionario ORDER BY funcao";
			$exec = $sql->query($sqli);
			$cont = mysqli_num_rows($exec);

			while($exibir = mysqli_fetch_assoc($exec)){

				echo "
			  <tr>
			    <td>".$exibir['nome']."</td>
				<td>R$ ".number_format($exibir['salario'],2,",",".")."</td>
			  </tr>

			  ";
			}
		  ?>
		  <tr>
			<td align="right">
				<h3>
					<span href="#" data-toggle='tooltip' title='Soma apenas de clientes atendidos'>Total:</span>
				</h3>
			</td>
			<td>
			<h3>R$ 
			<a href="#" data-toggle='tooltip' title='Total a pagar'>
				<?php 
				$d = date("d");
				$m = date("m");
				$a = date("Y");
				$sta = "Atendido";
				$cons = "SELECT SUM(salario) as SOMA FROM funcionario";
				$executa = $sql->query($cons);
				$mostra = mysqli_fetch_assoc($executa);
				  /*while($mostra = mysqli_fetch_assoc($executa)){
					  $mm = $mostra["SOMA"];
					  //echo number_format($mostra["SOMA"],2,",",".");
				  }*/

			  ?>
			  <?php echo number_format($mostra["SOMA"],2,",","."); ?>
			</a>
			</h3>
			</td>
		  </tr>
		</tbody>
	  </table>
    </div>
</div>
	 
	<div class="panel panel-warning">
    <div class="panel-heading"><h4><i class="fa fa-info-circle" aria-hidden="true"></i> Porcentagens de Monitores dos cursos</h4></div>
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
			$d = $_POST["d"];
			$m = $_POST["m"];
			$a = $_POST["a"];
			$stt = "Atendido";
			$sqli = "SELECT adesao_curso.curso, adesao_curso.mes, adesao_curso.ano, adesao_curso.profissional as PROF, SUM(adesao_curso.valor) as SOMA, curso.porcentagem as PORC FROM adesao_curso INNER JOIN curso ON curso.nome=adesao_curso.curso WHERE adesao_curso.dia='$d' AND adesao_curso.mes='$m' AND adesao_curso.ano='$a' GROUP BY adesao_curso.curso, adesao_curso.profissional, curso.porcentagem ORDER BY adesao_curso.profissional";
			$exec = $sql->query($sqli);
			//$cont = mysqli_num_rows($exec);

			while($exibir = mysqli_fetch_assoc($exec)){
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
			}
		  ?>
		  <tr>
			<td></td>
			<td align="right">
				<h3>
					<span href="#" data-toggle='tooltip' title='Soma apenas de clientes atendidos'>Total:</span>
				</h3>
			</td>
			<td>
			<h3>R$ 
			<a href="#" data-toggle='tooltip' title='Soma apenas de clientes atendidos'>
				<?php 
				$sqli = "SELECT adesao_curso.curso, adesao_curso.profissional as PROF, SUM(adesao_curso.valor) as SOMA, curso.porcentagem as PORC FROM adesao_curso INNER JOIN curso ON curso.nome=adesao_curso.curso WHERE adesao_curso.dia='$d' AND adesao_curso.mes='$m' AND adesao_curso.ano='$a' GROUP BY adesao_curso.curso, adesao_curso.profissional, curso.porcentagem ORDER BY adesao_curso.profissional";
				$exec = $sql->query($sqli);
				//$cont = mysqli_num_rows($exec);
				$cu = 0;
				while($exibir = mysqli_fetch_assoc($exec)){
					
					$por = $exibir['PORC'] / 100.0;
					$som = $exibir['SOMA'];
					$tt = $som - ($por * $som);
					$cu = $cu + $tt;
					
					 //array_sum($ar);
				}

			  ?>
			  <?php echo number_format($cu,2,",","."); ?>
			</a>
			</h3>
			</td>
		  </tr>
		</tbody>
	  </table>
     
      
   
    </div>
  </div>
<div class="panel panel-primary">
    <div class="panel-heading"><h4><i class="fa fa-info-circle" aria-hidden="true"></i> Porcentagens de Vendedores dos produtoss</h4></div>
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
			$d = $_POST["d"];
			$m = $_POST["m"];
			$a = $_POST["a"];
			$stt = "Atendido";
			$sqli = "SELECT produto_venda.produto, produto_venda.vendedor as PROF, SUM(produto_venda.valor) as SOMA,  produto_venda.mes, produto_venda.ano, produto.porcentagem as PORC FROM produto_venda INNER JOIN produto ON produto.nome=produto_venda.produto WHERE produto_venda.dia='$d' AND produto_venda.mes='$m' AND produto_venda.ano='$a' GROUP BY produto_venda.produto, produto_venda.vendedor, produto.porcentagem ORDER BY produto_venda.vendedor";
			$exec = $sql->query($sqli);
			//$cont = mysqli_num_rows($exec);

			while($exibir = mysqli_fetch_assoc($exec)){
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
			}
		  ?>
		  <tr>
			<td></td>
			<td align="right">
				<h3>
					<span href="#" data-toggle='tooltip' title='Soma apenas de clientes atendidos'>Total:</span>
				</h3>
			</td>
			<td>
			<h3>R$ 
			<a href="#" data-toggle='tooltip' title='Soma apenas de clientes atendidos'>
				<?php 
				$m = date("m");
				$a = date("Y");
				$sqlpr = "SELECT produto_venda.produto, produto_venda.vendedor as PROF, SUM(produto_venda.valor) as SOMA, produto_venda.mes, produto_venda.ano, produto.porcentagem as PORC FROM produto_venda INNER JOIN produto ON produto.nome=produto_venda.produto WHERE produto_venda.dia='$d' AND produto_venda.mes='$m' AND produto_venda.ano='$a' GROUP BY produto_venda.produto, produto_venda.vendedor, produto.porcentagem";
				$expr = $sql->query($sqlpr);
				//$cont = mysqli_num_rows($exec);
				$pr = 0;
				while($exibo = mysqli_fetch_assoc($expr)){
					
					$po = $exibo['PORC'] / 100.0;
					$somaa = $exibo['SOMA'];
					$ttt = $somaa - ($po * $somaa);
					$pr = $pr + $ttt;
				}

			  ?>
			  <?php echo number_format($pr,2,",","."); ?>
			</a>
			</h3>
			</td>
		  </tr>
		</tbody>
	  </table>
     
      
   
    </div>
  </div>
	  
	  <div class="panel panel-info">
      <div class="panel-heading"><h4><i class="fa fa-info-circle" aria-hidden="true"></i> Porcentagens de funcionários a pagar</h4></div>
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
			$d = $_POST["d"];
			$m = $_POST["m"];
			$a = $_POST["a"];
			$stt = "Atendido";
			$sqli = "SELECT agenda.id_prof, agenda.status, agenda.profissional as PROF, SUM(agenda.valor) as SOMA, funcionario.porcentagem as PORC FROM agenda INNER JOIN funcionario ON funcionario.id=agenda.id_prof WHERE agenda.dia='$d' AND agenda.mes='$m' AND agenda.ano='$a' AND agenda.status='$stt' GROUP BY agenda.id_prof, agenda.profissional, funcionario.porcentagem, funcionario.nome ORDER BY funcionario.nome";
			$exec = $sql->query($sqli);
			//$cont = mysqli_num_rows($exec);

			while($exibir = mysqli_fetch_assoc($exec)){
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
			}
		  ?>
		  <tr>
			<td></td>
			<td align="right">
				<h3>
					<span href="#" data-toggle='tooltip' title='Soma apenas de clientes atendidos'>Total:</span>
				</h3>
			</td>
			<td>
			<h3>R$ 
			<a href="#" data-toggle='tooltip' title='Soma apenas de clientes atendidos'>
				<?php
				$d = $_POST["d"];
				$m = $_POST["m"];
				$a = $_POST["a"];
				$stt = "Atendido";
				$sqli = "SELECT agenda.id_prof, agenda.status, agenda.profissional as PROF, SUM(agenda.valor) as SOMA, funcionario.porcentagem as PORC FROM agenda INNER JOIN funcionario ON funcionario.id=agenda.id_prof WHERE agenda.dia='$d' AND agenda.mes='$m' AND agenda.ano='$a' AND agenda.status='$stt' GROUP BY agenda.id_prof, agenda.profissional, funcionario.porcentagem, funcionario.nome ORDER BY funcionario.nome";
				$exec = $sql->query($sqli);
				//$cont = mysqli_num_rows($exec);
				$ar = 0;
				while($exibir = mysqli_fetch_assoc($exec)){
					
					$por = $exibir['PORC'] / 100.0;
					$som = $exibir['SOMA'];
					$tt = $som - ($por * $som);
					$ar = $ar + $tt;
					
					 //array_sum($ar);
				}

			  ?>
			  <?php echo number_format($ar,2,",","."); ?>
			</a>
			</h3>
			</td>
		  </tr>
		</tbody>
	  </table>
     
      <div class="panel panel-default">
		  <div class="panel-body"><strong>Gastos do mês com funcionários </strong><span class="text-primary" data-toggle="popover" title="Soma do total de salários a pagar." data-placement="top" data-content=" Mais(+) o total das porcentagens a pagar."><i class="fa fa-question-circle" aria-hidden="true"></i></span> 
		  <h3>
					Total: R$ 
					<?php 
						$sal = $mostra["SOMA"];
						$porc = $ar;
						$sp = $sal + $porc + $cu + $pr;
						echo number_format($sp,2,",",".")
			
		  			?> 
					
		  </h3>
		  
		  </div>
		  
		  <div class="panel-body"><strong>Lucro do mês:</strong> <span class="text-primary" data-toggle="popover" title="Soma dos lucros." data-placement="top" data-content=" com base no fechamento dos caixas do mês."><i class="fa fa-question-circle" aria-hidden="true"></i></span> 
		  <h3>Total: R$ 
		  <?php 
			$d = $_POST["d"];
			$m = $_POST["m"];
			$a = $_POST["a"];
			$cons = "SELECT SUM(lucro) as SOMA, dia, mes, ano FROM checkout WHERE dia='$d' and mes='$m' and ano='$a'";
			$gas = $sql->query($cons);
			$mostrag = mysqli_fetch_assoc($gas);
				  echo number_format($mostrag["SOMA"],2,",",".");
			
		  ?>
		  </h3> 
		  
		  </div>
		  
		  <div class="panel-body"><strong>Lucro real do mês:</strong> <span class="text-primary" data-toggle="popover" title="Soma dos lucros com base no fechamento dos caixas do mês." data-placement="top" data-content=" Menos(-) os salários e porcentagens a pagar."><i class="fa fa-question-circle" aria-hidden="true"></i></span> 
		  <h3>Total: R$ 
		  <?php 
			$d = $_POST["d"];
			$m = $_POST["m"];
			$a = $_POST["a"];
			$cons = "SELECT SUM(lucro) as SOMA, dia, mes, ano FROM checkout WHERE dia='$d' and mes='$m' and ano='$a'";
			$gas = $sql->query($cons);
			$mostrag = mysqli_fetch_assoc($gas);
			$lcr = $mostrag["SOMA"] - $sp; 
				  echo number_format($lcr,2,",",".");
			
		  ?>
		  </h3> 
		  
		  </div>
		  
	  </div>
   
    </div>
  </div>
	  
</div>


<div class="col-sm-6">
  
  	<div class="panel panel-success">
      <div class="panel-heading"><h2><i class="fa fa-info-circle" aria-hidden="true"></i> Resumos</h2></div>
      <div class="panel-body">
     	
     	<div class="panel panel-default">
		  <div class="panel-body">
		  <p class="text-muted">
  			Total de Clientes <strong>atendidos</strong><span class="badge">
  			<?php 
				$d = $_POST["d"];
				$m = $_POST["m"];
				$a = $_POST["a"];	
				$st = "Atendido";
				$com = "SELECT * FROM agenda WHERE dia = '$d' AND mes = '$m' AND ano = '$a' AND status = '$st'";
				$exe = $sql->query($com);
				$conta = mysqli_num_rows($exe);
				$n = mysqli_fetch_assoc($exe);


					echo $conta ;
			?>
  			</span>
  			</p>
  		  <p class="text-muted">
  			Total de Clientes <strong>agendados</strong><span class="badge">
  			<?php 
				$d = $_POST["d"];
				$m = $_POST["m"];
				$a = $_POST["a"];	
				$st = "Agendado";
				$com = "SELECT * FROM agenda WHERE dia = '$d' AND mes = '$m' AND ano = '$a' AND status = '$st'";
				$exe = $sql->query($com);
				$cont = mysqli_num_rows($exe);
				$n = mysqli_fetch_assoc($exe);


					echo $cont ;
			?>
  				
  			</span>
  			</p>
  			</div>
		  
		</div>
     	
     	
     	<div class="panel panel-default">
		  <div class="panel-body">
		  <h2>Últimos caixas - <a href="historico.php" title="Histórico de Caixa"><button type="button" class="btn btn-link">Ver todos</button></a></h2>
		  <?php 
			$d = $_POST["d"];
			$m = $_POST["m"];
			$a = $_POST["a"];	
			$stat = "Fechado";
			$cons = "SELECT * FROM checkout WHERE status='$stat' AND dia='$d' AND mes='$m' AND ano='$a' ORDER BY id DESC LIMIT 3";
			$exex = $sql->query($cons);
			$chec = mysqli_fetch_assoc($exex);
			  
		  ?>
		  <?php do{ ?>
		  	<h4><strong>Caixa do dia</strong>: <?php echo $chec["data"]; ?> <span class="label label-default">Lucro R$ <?php echo number_format($chec["lucro"],2,",","."); ?></span></h4>
		  <?php }while($chec = mysqli_fetch_assoc($exex)); ?>
		  </div>
	  </div>
     	
      	
      </div>
    </div>
  
  </div>