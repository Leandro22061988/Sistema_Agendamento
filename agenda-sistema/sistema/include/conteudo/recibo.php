<div class="container">
  <div class="row">
  <div class="col-sm-12">
  <div class="panel">
  <div class="panel-heading">
	  <h3 style="text-align: center;">
	  	<?php 
			$sqlii = "SELECT * FROM empresa";
			$execc = $sql->query($sqlii);
		  	$emp = mysqli_fetch_assoc($execc);
		 ?>
		 
		 	<?php echo $emp["nome"]; ?><br/>
	  </h3>
	  <h4 style="text-align: center;">
		 	CNPJ: <?php echo $emp["cpf_cnpj"]; ?><br/>
		 	<?php echo $emp["endereco"]; ?> - 
		 	<?php echo $emp["bairro"]; ?> - 
		 	<?php echo $emp["municipio"]; ?> - 
		 	<?php echo $emp["estado"]; ?><br/>
		 	<?php echo $emp["telefone"]; ?>
	  </h4>
	  <h3 style="text-align: center;">
	  	RECIBO NÃO FISCAL
	  </h3>
	  <?php 
	  	$id = $_GET["id"];
		$dia = $_GET["d"];
		$mes = $_GET["m"];
		$ano = $_GET["a"];
		$sqli = "SELECT * FROM agenda WHERE id_cliente='$id' AND dia='$dia' AND mes='$mes' AND ano='$ano' ORDER BY id DESC";
		$exec = $sql->query($sqli);
		$cll = mysqli_fetch_assoc($exec);
	  ?>
	  <h6 style="text-align: center;">
	  	Cliente: <?php echo $cll["nome"]; ?> - ID: <?php echo $cll["id_cliente"]; ?>
	  </h6>
  </div>

<?php 
		  require("include/class/retorno.php");
		  $r = new Retorno;
		  $r->cadastro();

?>
<div class="row">     
<div class="col-sm-10">
  <table class="table table-hover" align="center">
    <thead>
      <tr>
        <th>Serviço</th>
        <th>Valor</th>
        <th>Data</th>
      </tr>
    </thead>
    <tbody>
    	<?php 
		$id = $_GET["id"];
		$dia = $_GET["d"];
		$mes = $_GET["m"];
		$ano = $_GET["a"];
		$sqli = "SELECT * FROM agenda WHERE id_cliente='$id' AND dia='$dia' AND mes='$mes' AND ano='$ano' ORDER BY id DESC";
		$exec = $sql->query($sqli);
		$cont = mysqli_num_rows($exec);
		
		while($exibir = mysqli_fetch_assoc($exec)){
			
			echo "
      <tr>
        <td>".$exibir["servico"]."</td>
		<td>R$ ".number_format($exibir["valor"],2,",",".")."</td>
        <td>".$exibir["dia"]."/".$exibir["mes"]."/".$exibir["ano"]."</td>
        
      </tr>
      ";
		}
	   ?> 
      <tr>
      <?php 
		$id = $_GET["id"];
		$dia = $_GET["d"];
		$mes = $_GET["m"];
		$ano = $_GET["a"];
		$sqli = "SELECT SUM(valor) as TOTAL FROM agenda WHERE id_cliente='$id' AND dia='$dia' AND mes='$mes' AND ano='$ano' ORDER BY id DESC";
		$exec = $sql->query($sqli);
		$val = mysqli_fetch_assoc($exec);
		?>
      	<td colspan="2" align="right">Total</td>
      	<td>R$ <?php echo number_format($val["TOTAL"],2,",","."); ?></td>
      </tr>
    </tbody>
  </table>
</div>
	  </div>
</div>
</div>
	  
</div>
  
  
</div>