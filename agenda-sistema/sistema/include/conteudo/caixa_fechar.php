<div class="container">
  
  <div class="row">
  
  
  
  <div class="col-sm-11">
  
  	<div class="panel panel-primary">
      <div class="panel-heading"><h4>Fechamento do caixa</h4></div>
      
     	
      	<div class="panel-body">
      	
      	<div class="panel panel-default">
      	  <div class="panel-body">
      	  
      	  <form name="caixa-edit" method="post" action="include/edit/caixa_fecha.php">
      	  
      	  
      	  <strong>Qt de Clientes Atendidos:</strong> 
      	  
      	  <?php 
			  	$ide = $_GET["id"];
			  	$com = "SELECT * FROM checkout WHERE id='$ide'";
				$exe = $sql->query($com);
				$contax = mysqli_num_rows($exe);
				$caixa = mysqli_fetch_assoc($exe);
			  
			  /*Pesquisa 2*/
			  
				$d = $caixa["dia"];
				$m = $caixa["mes"];
				$a = $caixa["ano"];
			  	$stat = "Atendido";
				$com = "SELECT * FROM agenda WHERE dia='$d' AND mes='$m' AND ano='$a' AND status='$stat'";
				$exe = $sql->query($com);
				$conta = mysqli_num_rows($exe);
				$n = mysqli_fetch_assoc($exe);
			  	

					echo $conta;
			?>
      	  
      	  <br/>
      	  <strong>Data/hora de abertura:</strong> 
      	  	<?php echo $caixa["dia"]."/".$caixa["mes"]."/".$caixa["ano"]." - ".$caixa["hora"]; ?>
      	  <br/><br/>
      	  <br/>
      	  <strong>Valor Inicial:</strong> R$ 
			 <?php 
			  	
				$ide = $_GET["id"]; 
			  	$com = "SELECT * FROM checkout WHERE id='$ide'";
				$exe = $sql->query($com);
				$contacx = mysqli_num_rows($exe);
				$caixav = mysqli_fetch_assoc($exe);

					echo number_format($caixav["valor"],2,",",".");
			?>
      	  
      	  <br/><br/>
      	  
      	  <strong>Ganhos:</strong> R$ 
      	  <?php 
			$ide = $_GET["id"];
			$com = "SELECT * FROM checkout WHERE id='$ide'";
			$exe = $sql->query($com);
			$contax = mysqli_num_rows($exe);
			$caixa = mysqli_fetch_assoc($exe);

		  /*Pesquisa 2*/

			$d = $caixa["dia"];
			$m = $caixa["mes"];
			$a = $caixa["ano"];
			$stat = "Atendido";
			$meio = "Promissória";
			$cons = "SELECT SUM(valor) as SOMA, dia, mes, ano, status FROM agenda WHERE not meio_pg='$meio' and dia='$d' and mes='$m' and ano='$a' and status='$stat' ";
			$executa = $sql->query($cons);
			
			  while($mostra = mysqli_fetch_assoc($executa)){
				  echo number_format($mostra["SOMA"],2,",",".");
			  }
			
		  ?>
      	  <br/>
		  <strong>Acrescimos:</strong> R$ 
      	  <?php 
			$ide = $_GET["id"];
			$com = "SELECT * FROM checkout WHERE id='$ide'";
			$exe = $sql->query($com);
			$contax = mysqli_num_rows($exe);
			$caixa = mysqli_fetch_assoc($exe);

		  /*Pesquisa 2*/

			$d = $caixa["dia"];
			$m = $caixa["mes"];
			$a = $caixa["ano"];
			$stat = "Atendido";
			$meio = "Promissória";
			$cons = "SELECT SUM(acrescimo) as SOMA, dia, mes, ano, status FROM agenda WHERE not meio_pg='$meio' and dia='$d' and mes='$m' and ano='$a' and status='$stat' ";
			$executa = $sql->query($cons);
			
			  while($mostra = mysqli_fetch_assoc($executa)){
				  echo number_format($mostra["SOMA"],2,",",".");
			  }
			
		  ?>
      	  <br/>
		  <strong>Descontos:</strong> R$ 
      	  <?php 
			$ide = $_GET["id"];
			$com = "SELECT * FROM checkout WHERE id='$ide'";
			$exe = $sql->query($com);
			$contax = mysqli_num_rows($exe);
			$caixa = mysqli_fetch_assoc($exe);

		  /*Pesquisa 2*/

			$d = $caixa["dia"];
			$m = $caixa["mes"];
			$a = $caixa["ano"];
			$stat = "Atendido";
			$meio = "Promissória";
			$cons = "SELECT SUM(desconto) as SOMA, dia, mes, ano, status FROM agenda WHERE not meio_pg='$meio' and dia='$d' and mes='$m' and ano='$a' and status='$stat' ";
			$executa = $sql->query($cons);
			
			  while($mostra = mysqli_fetch_assoc($executa)){
				  echo number_format($mostra["SOMA"],2,",",".");
			  }
			
		  ?>
      	  <br/>
			<strong>Promissorias de Serviços:</strong> R$ 
      	  <?php 
			$ide = $_GET["id"];
			$com = "SELECT * FROM checkout WHERE id='$ide'";
			$exe = $sql->query($com);
			$contax = mysqli_num_rows($exe);
			$caixa = mysqli_fetch_assoc($exe);

		  /*Pesquisa 2*/

			$d = $caixa["dia"];
			$m = $caixa["mes"];
			$a = $caixa["ano"];
			$dpg = $d."/".$m."/".$a;
			$dtp = $d."-".$m."-".$a;
			$cons = "SELECT SUM(valor) as SOMA, pagamento FROM promissoria_parcelas WHERE pagamento='$dpg' ";
			$exeprom = $sql->query($cons);
			
			 $promLis = mysqli_fetch_assoc($exeprom);			 
			 $tOtp =  number_format($promLis["SOMA"],2,",",".");
			  
			 include './include/php/parcelas_servicos_caixa.php';
			 
			 $promPg = $tOtp + $soma_s;
			  echo number_format($promPg,2,",",".");
			
		  ?>
      	  <br/>
      	  <strong>Gastos:</strong> R$ 
		  <?php 
			$ide = $_GET["id"];
			$com = "SELECT * FROM checkout WHERE id='$ide'";
			$exe = $sql->query($com);
			$contax = mysqli_num_rows($exe);
			$caixa = mysqli_fetch_assoc($exe);

		  /*Pesquisa 2*/

			$d = $caixa["dia"];
			$m = $caixa["mes"];
			$a = $caixa["ano"];
			$con = "SELECT SUM(valor) as SOMA, dia, mes, ano FROM gastos WHERE dia='$d' and mes='$m' and ano='$a' ";
			$execut = $sql->query($con);
			
			  while($most = mysqli_fetch_assoc($execut)){
				  echo number_format($most["SOMA"],2,",",".");
			  }
			
		  ?>
     	  <br/>
		   <strong>Estoque:</strong> R$ 
		  <?php 
			$ide = $_GET["id"];
			$com = "SELECT * FROM checkout WHERE id='$ide'";
			$exe = $sql->query($com);
			$contax = mysqli_num_rows($exe);
			$caixa = mysqli_fetch_assoc($exe);

		  /*Pesquisa 2*/

			$d = $caixa["dia"];
			$m = $caixa["mes"];
			$a = $caixa["ano"];
			$est = "SELECT SUM(valor_compra) as SOMA, dia, mes, ano FROM estoque WHERE dia='$d' and mes='$m' and ano='$a' ";
			$exest = $sql->query($est);
			
			  while($mest = mysqli_fetch_assoc($exest)){
				  echo number_format($mest["SOMA"],2,",",".");
			  }
			
		  ?>
		  <br/>
		   <strong>Cursos:</strong> R$ 
		  <?php 
			$ide = $_GET["id"];
			$com = "SELECT * FROM checkout WHERE id='$ide'";
			$exe = $sql->query($com);
			$contax = mysqli_num_rows($exe);
			$caixa = mysqli_fetch_assoc($exe);

		  /*Pesquisa 2*/
			include './include/php/parcelas_caixa.php';
			  
			$d = $caixa["dia"];
			$m = $caixa["mes"];
			$a = $caixa["ano"];
			$est = "SELECT SUM(valor) as SOMA, parcelas, dia, mes, ano FROM adesao_curso WHERE dia='$d' and mes='$m' and ano='$a' and parcelas = 1";
			$exest = $sql->query($est);
			
			  while($mest = mysqli_fetch_assoc($exest)){
				  $pacaixa = $mest["SOMA"] + $soma;
				  echo number_format($pacaixa,2,",",".");
			  }
			
		  ?>
     	  <br/>
		   <strong>Produtos:</strong> R$ 
		  <?php 
			$ide = $_GET["id"];
			$com = "SELECT * FROM checkout WHERE id='$ide'";
			$exe = $sql->query($com);
			$contax = mysqli_num_rows($exe);
			$caixa = mysqli_fetch_assoc($exe);

		  /*Pesquisa 2*/
		    $d = $caixa["dia"];
			$m = $caixa["mes"];
			$a = $caixa["ano"];
			$dpg = $d."/".$m."/".$a;
			$dtp = $d."-".$m."-".$a;
			$cons = "SELECT SUM(valor) as SOMA, pagamento FROM promissioria_parcelas WHERE pagamento='$dpg' ";
			$exeprom = $sql->query($cons);
			
			 $promLis = mysqli_fetch_assoc($exeprom);			 
			 $tOtp =  number_format($promLis["SOMA"],2,",",".");
			 
			include './include/php/parcelas_produto_caixa.php';
			  
			$d = $caixa["dia"];
			$m = $caixa["mes"];
			$a = $caixa["ano"];
			$est = "SELECT SUM(valor) as SOMA, parcelas, dia, mes, ano FROM produto_venda WHERE dia='$d' and mes='$m' and ano='$a' and parcelas <= 1 ";
			$exest = $sql->query($est);
			$mest = mysqli_fetch_assoc($exest);
				  $procaixa = $mest["SOMA"] + $soma_p + $promLis["SOMA"];
				  echo number_format($procaixa,2,",",".");
			
		  ?>
     	  <br/>
      	  <strong>Lucro:</strong> R$ 
      	  <?php 
			$ide = $_GET["id"];
			$com = "SELECT * FROM checkout WHERE id='$ide'";
			$exe = $sql->query($com);
			$contax = mysqli_num_rows($exe);
			$caixa = mysqli_fetch_assoc($exe);

		  /*Pesquisa 2*/

			$d = $caixa["dia"];
			$m = $caixa["mes"];
			$a = $caixa["ano"];
			$stat = "Atendido";
			
			$bde = "SELECT SUM(desconto) as SOMA, dia, mes, ano, status FROM agenda WHERE not meio_pg='$meio' and dia='$d' and mes='$m' and ano='$a' and status='$stat' ";
			$exde = $sql->query($bde);
			$desconto = mysqli_fetch_assoc($exde);
				$de = $desconto["SOMA"];
			$bac = "SELECT SUM(acrescimo) as SOMA, dia, mes, ano, status FROM agenda WHERE not meio_pg='$meio' and dia='$d' and mes='$m' and ano='$a' and status='$stat' ";
			$exac = $sql->query($bac);
			$acrescimo = mysqli_fetch_assoc($exac);
				$ac = $acrescimo["SOMA"];			
			$co = "SELECT SUM(valor) as SOMA, dia, mes, ano, status FROM adesao_curso WHERE dia='$d' and mes='$m' and ano='$a' and parcelas = 1";
			$exco = $sql->query($co);
			$mostco = mysqli_fetch_assoc($exco);
			include './include/php/parcelas_caixa.php';
			  $r = $mostco["SOMA"] + $soma;
			$cons = "SELECT SUM(valor) as SOMA, dia, mes, ano, status FROM agenda WHERE not meio_pg='$meio' and dia='$d' and mes='$m' and ano='$a' and status='$stat' ";
			$executa = $sql->query($cons);
			$mostrar = mysqli_fetch_assoc($executa);
			  $r1 = $mostrar["SOMA"];
			$con = "SELECT SUM(valor) as SOMA, dia, mes, ano FROM gastos WHERE dia='$d' and mes='$m' and ano='$a' ";
			$execut = $sql->query($con);
			$most = mysqli_fetch_assoc($execut);
			  $r2 = $most["SOMA"];
			$est = "SELECT SUM(valor_compra) as SOMA, dia, mes, ano FROM estoque WHERE dia='$d' and mes='$m' and ano='$a' ";
			$exest = $sql->query($est);
			$mest = mysqli_fetch_assoc($exest);
			  $r3 = $mest["SOMA"];
			$pro = "SELECT SUM(valor) as SOMA, parcelas, dia, mes, ano FROM produto_venda WHERE dia='$d' and mes='$m' and ano='$a' and parcelas <= 1 ";
			$exepr = $sql->query($pro);
			$prod = mysqli_fetch_assoc($exepr);
			include './include/php/parcelas_produto.php';
			  $r4 = $prod["SOMA"] + $soma_p + $promLis["SOMA"];
			  $r4_5 = $prod["SOMA"] + $soma_p;
			 include './include/php/parcelas_servicos.php';
			  $r5 = $promPg;
			  $r6 = $promLis["SOMA"];
			  
				$s = $r + $r1 + $r4_5 + $r5 + $r6 + $ac;
				$t = $s - $r2 - $r3 - $de;
			  
			  echo number_format($t,2,",",".");
		  ?>
      	  
      	  <!-- inputs -->
      	  <input type="hidden" name="data" value="<?php date_default_timezone_set('America/Sao_Paulo'); echo date('d/m/Y - H:i' ); ?>" >
      	  <input type="hidden" name="clientes" value="<?php echo $conta; ?>" >
      	  <input type="hidden" name="ganhos" value="<?php echo $r1; ?>" >
		  <input type="hidden" name="acrescimo" value="<?php echo $ac; ?>" >
		  <input type="hidden" name="desconto" value="<?php echo $de; ?>" >
		  <input type="hidden" name="curso" value="<?php echo $r; ?>" >
		  <input type="hidden" name="prom" value="<?php echo $r5; ?>" >
      	  <input type="hidden" name="gastos" value="<?php echo $r2; ?>" >
		  <input type="hidden" name="compras" value="<?php echo $r3; ?>" >
		  <input type="hidden" name="produtos" value="<?php echo $r4; ?>" >
      	  <input type="hidden" name="lucros" value="<?php echo $t; ?>" >
      	  <input type="hidden" name="status" value="Fechado" >
      	  <input type="hidden" name="id" value="<?php echo $caixa["id"]; ?>">
      	  <!-- inputs -->
      	  
			<div class="form-group">        
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-primary">Fechar o Caixa</button>
				</div>
			</div>
    	 </form>
     	 
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