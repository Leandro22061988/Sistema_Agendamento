<?php 
	$exp = "SELECT * FROM expira_pontos";
	$vai = $sql->query($exp);
	
	while($res = mysqli_fetch_assoc($vai)){
		
		$data = date('Y/m/d');
		$dat = $res["d"]."/".$res["m"]."/".$res["a"];
		
		//$conv = DateTime::createFromFormat('d/m/Y', $data);
		$convb = DateTime::createFromFormat('d/m/Y', $dat);
		//$dconv = $conv->format('Y-m-d');
		$dconvb = $convb->format('Y/m/d');
		
		$id = $res["id_cliente"];
		$pt = $res["pontos"];
		$z = 0;
		$d = $res["dia"];
		$m = $res["mes"];
		$a = $res["ano"];
		
		$se = $res["servico"];
		
		if(strtotime($dconvb) == strtotime($data)){

			$sqld = "UPDATE agenda SET pontos='$z' WHERE id_cliente='$id' and dia='$d' and mes='$m' and ano='$a' and servico='$se' ";
			if($sql->query($sqld) === true){}
				$so = "INSERT INTO historico_expira_pontos (id_cliente, pontos, data) VALUES ('".$id."', '".$pt."', '".$dconvb."')";
				if($sql->query($so) == true){}
					$delete = "DELETE FROM expira_pontos WHERE id_cliente=$id and dia='$d' and mes='$m' and ano='$a' and servico='$se'";
					if($exc = $sql->query($delete)){}
			
		}elseif(strtotime($data) > strtotime($dconvb)){
			$sqld = "UPDATE agenda SET pontos='$z' WHERE id_cliente='$id' and dia='$d' and mes='$m' and ano='$a' and servico='$se' ";
			if($sql->query($sqld) === true){}
				$so = "INSERT INTO historico_expira_pontos (id_cliente, pontos, data) VALUES ('".$id."', '".$pt."', '".$dconvb."')";
				if($sql->query($so) == true){}
					$delete = "DELETE FROM expira_pontos WHERE id_cliente=$id and dia='$d' and mes='$m' and ano='$a' and servico='$se'";
					if($exc = $sql->query($delete)){}
		}else{
		}
	}


	$qsob = "SELECT * FROM sobra";
	$exsob = $sql->query($qsob);
	
	while($lisob = mysqli_fetch_assoc($exsob)){
		
		$data = date('Y/m/d');
		$dat = $lisob["dia"]."/".$lisob["mes"]."/".$lisob["ano"];
		
		//$conv = DateTime::createFromFormat('d/m/Y', $data);
		$convb = DateTime::createFromFormat('d/m/Y', $dat);
		//$dconv = $conv->format('Y-m-d');
		$dconvb = $convb->format('Y/m/d');
		
		$id = $lisob["id_cliente"];
		$pt = $lisob["pontos"];
		$z = 0;
		$d = $res["dia"];
		$m = $res["mes"];
		$a = $res["ano"];
		
		if(strtotime($dconvb) == strtotime($data) || strtotime($data) > strtotime($dconvb)){

				$so = "INSERT INTO historico_expira_pontos (id_cliente, pontos, data) VALUES ('".$id."', '".$pt."', '".$dconvb."')";
				if($sql->query($so) == true){}
					$delete = "DELETE FROM sobra WHERE id_cliente=$id";
					if($exc = $sql->query($delete)){}
			
		}else{}
	}


?>

<script type="text/javascript">
	
function poup(pagina){
	window.open(pagina, "", "width=1010,height=600,left=" + (document.documentElement.clientWidth - 1010) / 2 + ",top=" + (document.documentElement.clientHeight - 200) / 2);
}
function poupe(pagina){
	window.open(pagina, "", "width=830,height=600,left=" + (document.documentElement.clientWidth - 830) / 2 + ",top=" + (document.documentElement.clientHeight - 200) / 2);
}
function pou(pagina){
	window.open(pagina, "", "width=400,height=600,left=" + (document.documentElement.clientWidth - 830) / 2 + ",top=" + (document.documentElement.clientHeight - 200) / 2);
}
	
</script>
<div class="container">
  <div class="row">
  <div class="col-sm-12">
  <div class="panel panel-success">
      <div class="panel-heading"><h2>Fidelidade - <strong>Ranking</strong></h2></div>
      <div class="panel-body">
  
	<div class="btn-group">

	<a href="fid_cad.php">
	  <button type="button" class="btn btn-primary"><i class="fa fa-user-plus" aria-hidden="true"></i>
		  Cadastrar Serviço</button></a>
	<a href="fidelidade_list.php">
	  <button type="button" class="btn btn-primary"><i class="fa fa-user-plus" aria-hidden="true"></i>
		  Serviços Cadastrados</button></a>
	<a href="fid_premio.php">
	  <button type="button" class="btn btn-primary"><i class="fa fa-user-plus" aria-hidden="true"></i>
		  Premiação</button></a>
	<a href="fid_premiados.php">
	  <button type="button" class="btn btn-primary"><i class="fa fa-user-plus" aria-hidden="true"></i>
		  Resgates</button></a>
	<a href="fid_prazo_expira_cad.php">
	  <button type="button" class="btn btn-primary"><i class="fa fa-user-plus" aria-hidden="true"></i>
		  Prazo dos Pontos</button></a>
	<a href="index.php">
	  <button type="button" class="btn btn-primary"><i class="fa fa-home" aria-hidden="true"></i>
		  Ir para home</button></a>

	</div> 
</div>

<?php 
		  require("include/class/retorno.php");
		  $r = new Retorno;
		  $r->cadastro();
	  	  $r->status();
	  	  $r->editaerro();

?>  
<div class="col-xs-5">
	<input class="form-control" id="myInput" type="text" placeholder="Digite o nome">
</div>
	  
  <br>
  <table class="table table-hover">
    <thead>
      <tr>
		<th style='text-align: center;'>Opção</th>
		<th style='text-align: center;'>Clientes</th>
        <th style='text-align: center;'>Pontos</th>
		<th style='text-align: center;'>Pontos p/ Expirar</th>
		<th></th>
      </tr>
    </thead>
    <tbody id="myTable">
    	<?php 
		$pagina = isset($_GET["pagina"]) ? $_GET["pagina"] : 1;
		
		$result_curso = "SELECT * FROM agenda ORDER BY pontos DESC";
		$execu = $sql->query($result_curso);
		$resultado_curso = mysqli_fetch_assoc($execu);
		$total_curso = mysqli_num_rows($execu);
		
		$quantidade_pg = 10;
		$num_pagina = ceil($total_curso/$quantidade_pg);
		$inicio = ($quantidade_pg * $pagina) - $quantidade_pg;
		
		$sqli = "SELECT SUM(pontos) as SOMA, nome, id_cliente FROM agenda GROUP BY nome, id_cliente ORDER BY SOMA DESC LIMIT $inicio, $quantidade_pg";
		$exec = $sql->query($sqli);
		$cont = mysqli_num_rows($exec);
		
		while($exibir = mysqli_fetch_assoc($exec)){
			
			$id = $exibir["id_cliente"];
			$st = "Cancelado";
			
			$sb = "SELECT SUM(pontos) as SOMA, id_cliente FROM sobra WHERE id_cliente='$id'";
			$exsb = $sql->query($sb);
			$vsb = mysqli_fetch_assoc($exsb);
			
			$sobra = $vsb["SOMA"];
			$junta = $exibir["SOMA"] + $sobra;
			
			$sqlib = "SELECT SUM(pontos) as SOMA, id_cliente, status FROM agenda WHERE id_cliente='$id' and status='$st'";
			$execb = $sql->query($sqlib);
			$contb = mysqli_num_rows($execb);
			$exibi = mysqli_fetch_assoc($execb);
			if($exibi["SOMA"] == 0){
				$soma = 0;
				
			}else{
				$soma = $exibi["SOMA"];
			}
			
			$sqlid = "SELECT SUM(pontos) as SOMA, id_cliente FROM expira_pontos WHERE id_cliente='$id'";
			$execd = $sql->query($sqlid);
			$contd = mysqli_num_rows($execd);
			$exib = mysqli_fetch_assoc($execd);
			
			if($exib["SOMA"] == 0){
				$expira = 0;
			}else{
				$expira = $exib["SOMA"];
			}
			
			?>			
			
				  <tr style='text-align: center;'>
				    <td>
					<a href='fid_resgate.php?id=<?php echo $exibir["id_cliente"]; ?>&p=<?php echo $junta; ?>' data-toggle='tooltip' title='Resgatar Prémio'>
						Resgatar</a>
						
					</td>
					<td><?php echo $exibir["nome"]; ?></td>
					<td><?php echo $junta; ?></td>
					<td><a href='#' onclick='poupe("fid_list_expira_pts.php?idc=<?php echo $exibir["id_cliente"]; ?>")' data-toggle='tooltip' title='Consultar'>Consultar</a></td>
					
				  </tr>
		<?php }?>
		
      <tr align="center" >
      	<td colspan="5">
      		<ul class="pagination">
            <?php $max_pg = 3; ?>
                <li><a href="fidelidade.php?pagina=1">Primeira Página</a></li>
            <?php for ($i = $pagina - $max_pg; $i <= $pagina - 1; $i++){ ?>
                <?php if($i >= 1){ ?>
				<li><a href="fidelidade.php?pagina=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                <?php } ?>
			<?php }?>			
				<li><a href="fidelidade.php?pagina=<?php echo $pagina; ?>"><?php echo $pagina; ?></a></li>
			<?php for ($p = $pagina + 1; $p <= $pagina + $max_pg; $p++){ ?>
                <?php if($p <= $num_pagina){ ?>
				<li><a href="fidelidade.php?pagina=<?php echo $p; ?>"><?php echo $p; ?></a></li>
                <?php } ?>
			<?php }?>
                <li><a href="fidelidade.php?pagina=<?php echo $num_pagina; ?>">Ultima Página</a></li>
			</ul>
      	</td>
      </tr>
    </tbody>
  </table>
 </div>
    </div>
	  
  </div>
  
  
</div>
    
</div>