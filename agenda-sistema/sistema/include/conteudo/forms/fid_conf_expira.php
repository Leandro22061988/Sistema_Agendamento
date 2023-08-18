<?php include './include/conteudo/forms/include/verifica.php' ?>
<?php if($dd == $d && $mm == $m && $aa == $a){ ?>
 
  <div class="container">
 
 <div class="panel panel-success">
      <div class="panel-heading"><h2>Agendamento - Pontos de Fidelidade</h2></div>
      <div class="panel-body">
      
		  <!-- Busca na Tabela Serviços -->
		
		
		<!-- Fim da Busca na Tabela Serviços -->
		
		
		<!-- Lista na Tabela Funcioncionários -->
		
		
	  <!-- Fim da Lista na Tabela Funcioncionários -->
	<?php 
	
	$cl = $_POST["cliente"];
	
			$bsob = "SELECT * FROM sobra WHERE id_cliente='$cl'";
			$exsob = $sql->query($bsob);
			$fsob = mysqli_fetch_assoc($exsob);
			$psob = $fsob["pontos"];
	
			$sqlib = "SELECT SUM(pontos) as SOMA FROM agenda WHERE id_cliente='$cl'";
			$execb = $sql->query($sqlib);
			$contb = mysqli_num_rows($execb);
			$exibi = mysqli_fetch_assoc($execb);
	
			if($exibi["SOMA"] < 1 && $psob < 1){
				$exibi["SOMA"] = 0;
				$s = $exibi["SOMA"];
			}else{
				$s = $exibi["SOMA"] + $psob;
			}
			
			$sqlid = "SELECT * FROM cliente WHERE id='$cl'";
			$execd = $sql->query($sqlid);
			$olha = mysqli_fetch_assoc($execd);
	
	$id = $_POST["servico"];
		$sqli = "SELECT * FROM servico WHERE id='$id'";
		$exec = $sql->query($sqli);
		$mserv = mysqli_fetch_assoc($exec);
	
	$ser = $mserv["nome"];
		$sqlia = "SELECT * FROM fidelidade WHERE servico='$ser'";
		$execa = $sql->query($sqlia);
		$fi = mysqli_fetch_assoc($execa);
	
		$sqlid = "SELECT SUM(pontos) as SOMA, id_cliente FROM expira_pontos WHERE id_cliente='$cl'";
		$execd = $sql->query($sqlid);
		$contd = mysqli_num_rows($execd);
		$exib = mysqli_fetch_assoc($execd);
	
		if($exib["id_cliente"]){
            
			$va = $exibi["SOMA"];
            
		}else{
			$va = 0;
		}
	?>
	<?php if($fi["servico"]){ ?>	  
		<h3>Deseja que os pontos do serviço atual expirem </h3>
		<h5>Cliente <strong><?php echo $olha["nome"]; ?></strong> tem <strong><?php echo $s; ?> pontos</strong> de fidelidade. </h5>
		<h5>O serviço que esta preste a agendar somará para o cliente <strong>+ <?php echo $fi["pontos"]; ?> pontos</strong>.</h5>
		<h5>Total de pontos para expirar: <strong><?php echo $va; ?> pontos</strong></h5>	
		  
		<form class="form-horizontal" action="agendar.php" method="post">
   
			<div class="form-group">

			  <label class="control-label col-sm-2" for="Porcentagem">Opções:</label>

				<div class="col-xs-2">

				<select name="prazo" class="form-control" >
					<option>Sim</option>
					<option>Não</option>
				</select> 
				</div>

			  </div>
			<input type="hidden" name="dia" value="<?php echo $_POST["dia"] ?>">
			<input type="hidden" name="mes" value="<?php echo $_POST["mes"]; ?>">
			<input type="hidden" name="ano" value="<?php echo $_POST["ano"]; ?>">
			<input type="hidden" name="pro" value="<?php echo $_POST["pro"] ?>">
			<input type="hidden" name="servico" value="<?php echo $_POST["servico"]; ?>">
			<input type="hidden" name="cliente" value="<?php echo $_POST["cliente"]; ?>">

			<div class="form-group">        
			  <div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-default">Enviar</button>
			  </div>
			</div>
		  </form>
		  
	<?php }else{ ?>
		<h3>Esse serviço não esta registrado no programa de fidelidade.</h3>
		<h5>O cliente não receberá pontos. </h5>  
	
		  
  	<form class="form-horizontal" action="agendar.php" method="post">
   
	<input type="hidden" name="prazo" value="Não">
	<input type="hidden" name="dia" value="<?php echo $_POST["dia"] ?>">
    <input type="hidden" name="mes" value="<?php echo $_POST["mes"]; ?>">
	<input type="hidden" name="ano" value="<?php echo $_POST["ano"]; ?>">
    <input type="hidden" name="pro" value="<?php echo $_POST["pro"] ?>">
    <input type="hidden" name="servico" value="<?php echo $_POST["servico"]; ?>">
	<input type="hidden" name="cliente" value="<?php echo $_POST["cliente"]; ?>">
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Continuar</button>
      </div>
    </div>
  </form>
<?php } ?>
</div>
</div>
</div>

<?php }else{ ?>


	<div class="container">

	 <div class="panel panel-success">
		<div class="panel-heading">
			<h4 style="text-align: center;">Só será possível agendar se o <strong>caixa</strong> com a <strong>data de hoje</strong> estiver <strong>aberto</strong>. </h4>
		</div>
	  </div>
	</div>
	
<?php } ?>