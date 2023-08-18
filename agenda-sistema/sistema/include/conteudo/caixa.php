<div class="container">
  
  <div class="row">
  
  
  
  <div class="col-sm-11">
  
 
  
  	<div class="panel panel-primary">
      <div class="panel-heading"><h2>Caixa</h2></div>
      <div class="panel-body">
      	
		<div class="btn-group">

		<a href="gastos.php">
		<button type="button" class="btn btn-primary"><i class="fa fa-user-plus" aria-hidden="true"></i>
		Gastos</button></a>
		<a href="historico_caixa.php">
		<button type="button" class="btn btn-primary"><i class="fa fa-search" aria-hidden="true"></i>
		Caixas</button></a>
		<a href="index.php">
		<button type="button" class="btn btn-primary"><i class="fa fa-home" aria-hidden="true"></i>
		Voltar para home</button></a>
		
		<!--  -->
		<?php 
			$st = "Aberto";
			$pes = "SELECT * FROM checkout WHERE status='$st'";
			$act = $sql->query($pes);
			$ver = mysqli_fetch_assoc($act);
			
		?>
		<?php if($ver["status"]){ ?>
		
		<a href="historico_caixa.php">
		<button type="button" class="btn btn-success"><i class="fa fa-search" aria-hidden="true"></i>
		Fechar caixa </button></a>
		
		<?php }else{ ?>
		
		<a href="caixa_abrir.php">
		<button type="button" class="btn btn-success"><i class="fa fa-search" aria-hidden="true"></i>
		Abrir Caixa </button></a>
		
		<?php } ?>
		</div> 
		</div>
		
		
 <div class="panel-body">    	
 <div class="col-sm-6">
  <h4>Buscar Caixa</h4>
  <form name="mes_ano" method="get" action="historico_caixa_pesquisa.php">
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
</div>
     	
      	<div class="panel-body">
      	
      	
      	
      	<div class="panel panel-default">
		  <div class="panel-body"><strong>Ganhos do dia:</strong></div>
		  <div class="panel-body">R$ 
		  	<?php 
			
			$d = date("d");
			$m = date("m");
			$a = date("Y");
			$sta = "Atendido";
			$meio = "Promissória";
			$cons = "SELECT SUM(valor) as SOMA, dia, mes, ano FROM agenda WHERE not meio_pg='$meio' and dia='$d' and mes='$m' and ano='$a' and status='$sta' ";
			$executa = $sql->query($cons);
			$mostra = mysqli_fetch_assoc($executa);
			
			  
			$dpg = $d."/".$m."/".$a;
			$dtp = $d."-".$m."-".$a;
			
			include './include/php/parcelas_produto_caixa.php';
			
			$cons = "SELECT SUM(valor) as SOMA, pagamento FROM promissoria_parcelas WHERE pagamento='$dpg' ";
			$exeprom = $sql->query($cons);			
			$promLis = mysqli_fetch_assoc($exeprom);
			
			$pPp = "SELECT SUM(valor) as SOMA, pagamento FROM promissioria_parcelas WHERE pagamento='$dpg' ";
			$exepPp = $sql->query($pPp);			
			$rSult = mysqli_fetch_assoc($exepPp);
			
			$est = "SELECT SUM(valor) as SOMA, pagamento, parcelas, pgforma, cardf, dia, mes, ano FROM produto_venda WHERE parcelas='0' and pgforma='a vista' and dia='$d' and mes='$m' and ano='$a' ";
			$exest = $sql->query($est);
			$mest = mysqli_fetch_assoc($exest);
			
			include './include/php/parcelas_servicos_caixa.php';
			 
			 $cal = $mostra["SOMA"] + $soma_s + $soma_p + $promLis["SOMA"] + $rSult["SOMA"] + $mest["SOMA"];
			 
			 echo number_format($cal,2,",",".")." ";
			 /*echo number_format($soma_s,2,",",".")." - Promissória Serv<br/>";
			 echo number_format($soma_p,2,",",".")." - Promissória Prod<br/>";
			 echo number_format($promLis["SOMA"],2,",",".")." - Ad Parcelas Serv<br/>";
			 echo number_format($rSult["SOMA"],2,",",".")." - Ad Parcelas Prod<br/>";
			 echo number_format($mest["SOMA"],2,",",".")." - Venda de Produtos<br/>";*/
		  ?>
		  </div>
		</div>
     	
     	<div class="panel panel-default">
		  <div class="panel-body"><strong>Gastos do dia:</strong></div>
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
		  <?php 
			  
			  	/*$d = $_POST['dia'];
				$m = $_POST['mes'];
				$a = $_POST['ano'];
				$h = $_POST['hora_a'];
				$v = str_replace(",",".",$_POST['valor']);
				$df = $_POST['dia_f'];
				$mf = $_POST['mes_f'];
				$af = $_POST['ano_f'];
				$ho = $_POST['hora'];
				$c = $_POST['clientes_at'];
				$g = $_POST['ganhos'];
				$ga = $_POST['gastos'];
				$l = $_POST['lucros'];
				$s = $_POST['status'];
			  
			  echo $d." ".$m." ".$a." ".$h." ".$v." ".$df." ".$mf." ".$af." ".$ho." ".$c." ".$g." ".$ga." ".$l." ".$s;*/
		  ?>
		 </div>
		</div>
      	
      </div>
    </div>
  
  </div>
</div>
  
  <!--<div class="well">Normal Well</div>
  <div class="well">Normal Well</div>
  <div class="well">Normal Well</div>-->
  
</div>