<div class="container">
<div class="row">
<div class="col-sm-12">
<div class="panel panel-primary">
	<div class="panel-heading"><h2>Administrativo</h2></div>
<div class="panel-body">
  
	<div class="btn-group">

	<a href="empresa.php" class="btn btn-primary">
	  <i class="fa fa-user-plus" aria-hidden="true"></i>
		  Empresa</a>
	<a href="financeiro.php" class="btn btn-primary">
	  <i class="fa fa-user-plus" aria-hidden="true"></i>
		  Financeiro</a>
	<a href="admins.php" class="btn btn-primary">
	  <i class="fa fa-user-plus" aria-hidden="true"></i>
		  Administradores</a>
	<!--<a href="historico.php" class="btn btn-primary">
	  <i class="fa fa-user-plus" aria-hidden="true"></i>
		  Histórico de Caixa</a>-->	
  	<a href="admin_funcoes.php" class="btn btn-primary">
	  <i class="fa fa-user-plus" aria-hidden="true"></i>
		  funções de funcionários</a>
	<a href="almoco.php" class="btn btn-primary">
	  <i class="fa fa-user-plus" aria-hidden="true"></i>
		  Horários de almoço</a>
	<a href="servicos.php" class="btn btn-primary">
	  <i class="fa fa-user-plus" aria-hidden="true"></i>
		  Serviços</a>
	<a href="fidelidade.php" class="btn btn-primary">
	  <i class="fa fa-user-plus" aria-hidden="true"></i>
		  Fidelidade</a>
	<a href="curso.php" class="btn btn-primary">
	  <i class="fa fa-user-plus" aria-hidden="true"></i>
		  Curso</a>
	<?php if($_SESSION["nivel"] == 1){ ?>	
	<a href="historicos.php" class="btn btn-primary">
		  Históricos</a>
	<?php }else{ ?> 
	<?php } ?>
	</div> 
	
<div class="well">
	<div class="row">
		<div class="col-sm-2 text-center" style="margin: 10px 0px 0px 0px;">
			<a href="empresa.php">
				<i class="fa fa-building" aria-hidden="true" style="font-size: 26px;"></i><br/>
				Empresa
			</a>
		</div>
		<div class="col-sm-2 text-center" style="margin: 10px 0px 0px 0px;">
			<a href="financeiro.php">
				<i class="fa fa-bar-chart" aria-hidden="true" style="font-size: 26px;"></i><br/>
				Financeiro
			</a>
		</div>
		<div class="col-sm-2 text-center" style="margin: 10px 0px 0px 0px;">
			<a href="admins.php">
				<i class="fa fa-user-secret" aria-hidden="true" style="font-size: 26px;"></i><br/>
				Administradores
			</a>
		</div>
		<div class="col-sm-2 text-center" style="margin: 10px 0px 0px 0px;">
			<a href="admin_funcoes.php">
				<i class="fa fa-users" aria-hidden="true" style="font-size: 26px;"></i><br/>
				funções de funcionários
			</a>
		</div>
		<div class="col-sm-2 text-center" style="margin: 10px 0px 0px 0px;">
			<a href="almoco.php">
				<i class="fa fa-tachometer" aria-hidden="true" style="font-size: 26px;"></i><br/>
				Horários de almoço
			</a>
		</div>
		<div class="col-sm-2 text-center" style="margin: 10px 0px 0px 0px;">
			<a href="servicos.php">
				<i class="fa fa-cog" aria-hidden="true" style="font-size: 26px;"></i><br/>
				Serviços
			</a>
		</div>
		<div class="col-sm-2 text-center" style="margin: 10px 0px 0px 0px;">
			<a href="fidelidade.php">
				<i class="fa fa-handshake-o" aria-hidden="true" style="font-size: 26px;"></i><br/>
				Fidelidade
			</a>
		</div>
		<div class="col-sm-2 text-center" style="margin: 10px 0px 0px 0px;">
			<a href="curso.php">
				<i class="fa fa-graduation-cap" aria-hidden="true" style="font-size: 26px;"></i><br/>
				Curso
			</a>
		</div>
		<?php if($_SESSION["nivel"] == 1){ ?>	
		<div class="col-sm-2 text-center" style="margin: 10px 0px 0px 0px;">
			<a href="historicos.php">
				<i class="fa fa-database" aria-hidden="true" style="font-size: 26px;"></i><br/>
				Históricos
			</a>
		</div>
		<?php }else{ ?> 
		<?php } ?>
		<div class="col-sm-2 text-center" style="margin: 10px 0px 0px 0px;">
			<a href="#">
				<i class="fa fa-cubes" aria-hidden="true" style="font-size: 26px;"></i><br/>
				Produtos
			</a>
		</div>
	</div>
</div>
	
<div class="well">
  <div class="row">
  
  <div class="col-sm-6">
  
  <div class="panel panel-info">
      <div class="panel-heading"><h2><i class="fa fa-info-circle" aria-hidden="true"></i> Resumo</h2></div>
      <div class="panel-body">
      
      <div class="panel panel-default">
		  <div class="panel-body"><strong>Ganhos do dia:</strong> R$ 
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
		  <div class="panel-body"><strong>Gastos do dia:</strong> R$ 
		  <?php 
			$d = date("d");
			$m = date("m");
			$a = date("Y");
			$cons = "SELECT SUM(valor) as SOMA,dia, mes, ano FROM gastos WHERE dia='$d' and mes='$m' and ano='$a'";
			$gast = $sql->query($cons);
			
			  while($gasto = mysqli_fetch_assoc($gast)){
				  echo number_format($gasto["SOMA"],2,",",".");
			  }
			
		  ?>
		  </div>
	  </div>
      
      <div class="panel panel-default">
		  <div class="panel-body"><strong>Ganhos do mês:</strong> R$ 
		  <?php 
			$m = date("m");
			$a = date("Y");
			$sta = "Atendido";
			$cons = "SELECT SUM(valor) as SOMA, mes, ano FROM agenda WHERE mes='$m' and ano='$a' and status='$sta' ";
			$executa = $sql->query($cons);
			
			  while($most = mysqli_fetch_assoc($executa)){
				  echo number_format($most["SOMA"],2,",",".");
			  }
			
		  ?> - <span class="text-primary" data-toggle="popover" title="Soma dos ganhos no mês." data-placement="top" data-content=" Sem abatimento dos gastos."><i class="fa fa-question-circle" aria-hidden="true"></i></span>
		  </div>
		  <div class="panel-body"><strong>Gastos do mês:</strong> R$ 
		  <?php 
			$m = date("m");
			$a = date("Y");
			$cons = "SELECT SUM(valor) as SOMA, mes, ano FROM gastos WHERE mes='$m' and ano='$a'";
			$gas = $sql->query($cons);
			
			  while($mostrag = mysqli_fetch_assoc($gas)){
				  echo number_format($mostrag["SOMA"],2,",",".");
			  }
			
		  ?>
		  </div>
	  </div>
	  
	  <div class="panel panel-default">
		  <div class="panel-body">
		  <h2>Histórico de caixas - <a href="historico.php" title="Histórico de Caixa"><button type="button" class="btn btn-link">Ver todos</button></a></h2>
		  <?php 
			$m = date("m");
			$a = date("Y");
			$stat = "Fechado";
			$cons = "SELECT * FROM checkout WHERE status='$stat' AND mes='$m' AND ano='$a' ORDER BY id DESC LIMIT 3";
			$exex = $sql->query($cons);
			$chec = mysqli_fetch_assoc($exex);
			  
		  ?>
		  <?php do{ ?>
		  	<h4><strong>Caixa do dia</strong>: <?php echo $chec["data"]; ?> <span class="label label-default">Lucro R$ <?php echo number_format($chec["lucro"],2,",","."); ?></span></h4>
		  <?php }while($chec = mysqli_fetch_assoc($exex)); ?>
		  </div>
	  </div>
	  <div class="panel panel-default">
		  <div class="panel-body">
		  <h2>Horários de almoço - <a href="almoco.php" title="Horários de Almoço"><button type="button" class="btn btn-link">Ver todos</button></a></h2>
		  <?php 
			$cons = "SELECT * FROM almoco ORDER BY horario LIMIT 3";
			$exec = $sql->query($cons);
			$alm = mysqli_fetch_assoc($exec);
			  
		  ?>
		  <?php do{ ?>
			  <h4><span class="label label-default"><?php echo $alm["horario"]; ?></span> <small><?php echo $alm["nome"]; ?></small></h4>
		  <?php }while($alm = mysqli_fetch_assoc($exec)); ?>
		  
		  </div>
	  </div>
   
    </div>
	  </div>
  </div>
  
  <div class="col-sm-6">
  
  	<div class="panel panel-success">
      <div class="panel-heading"><h2><i class="fa fa-info-circle" aria-hidden="true"></i> Detalhes</h2></div>
      <div class="panel-body">
      	
      	<div class="panel panel-default">
		  <div class="panel-body">
		  <p class="text-muted">
  			Total de Clientes <strong>atendidos</strong> hoje <span class="badge">
  			<?php 
				$d = date("d");
				$m = date("n");
				$a = date("Y");	
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
  			Total de Clientes <strong>agendados</strong> hoje <span class="badge">
  			<?php 
				$d = date("d");
				$m = date("n");
				$a = date("Y");	
				$st = "Agendado";
				$com = "SELECT * FROM agenda WHERE dia = '$d' AND mes = '$m' AND ano = '$a' AND status = '$st'";
				$exe = $sql->query($com);
				$conta = mysqli_num_rows($exe);
				$n = mysqli_fetch_assoc($exe);


					echo $conta ;
			?>
  				
  			</span>
  			</p>
  			</div>
		  
		</div>
     	
     	
     	<div class="panel panel-default">
		  <div class="panel-body">
		  <p class="text-muted">
  			Total de Clientes <strong>atendidos</strong> no mês <span class="badge">
  			<?php 
				$m = date("n");
				$a = date("Y");	
				$st = "Atendido";
				$com = "SELECT * FROM agenda WHERE mes = '$m' AND ano = '$a' AND status = '$st'";
				$exe = $sql->query($com);
				$conta = mysqli_num_rows($exe);
				$n = mysqli_fetch_assoc($exe);


					echo $conta ;
			?>
  			</span>
  			</p>
  		  <p class="text-muted">
  			Total de Clientes <strong>agendados</strong> no mês <span class="badge">
  			<?php 
				$m = date("n");
				$a = date("Y");	
				$st = "Agendado";
				$com = "SELECT * FROM agenda WHERE mes = '$m' AND ano = '$a' AND status = '$st'";
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
		  <p class="text-muted">
  			Total de <strong>Clientes</strong> cadastrados <span class="badge">
  			<?php 
				$com = "SELECT * FROM cliente";
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
		  <p class="text-muted">
  			Total de <strong>Funcionários</strong> cadastrados <span class="badge">
  			<?php 
				$com = "SELECT * FROM funcionario";
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
		  <p class="text-muted">
  			Total de <strong>Serviços</strong> cadastrados <span class="badge">
  			<?php 
				$com = "SELECT * FROM servico";
				$exe = $sql->query($com);
				$cont = mysqli_num_rows($exe);
				$n = mysqli_fetch_assoc($exe);


					echo $cont ;
			?>
  			</span>
  			</p>
  			</div>
		</div>
     	
     	
      	
      </div>
    </div>
  
  </div>
</div>
	</div>
  
</div>
</div>
</div>
</div>
</div>