<div class="container">
  <div class="row">
  <div class="col-sm-12">
  <div class="panel panel-success">
      <div class="panel-heading"><h2>Histórico de serviços - <?php echo $_GET["n"]; ?></h2></div>

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
        <th>Profissional</th>
        <th>Data</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
    	<?php 
		$id = $_GET["id"];
		$sqli = "SELECT * FROM agenda WHERE id_cliente='$id' ORDER BY id DESC";
		$exec = $sql->query($sqli);
		$cont = mysqli_num_rows($exec);
		
		while($exibir = mysqli_fetch_assoc($exec)){
			
			echo "
      <tr>
        <td>".$exibir["servico"]."</td>
        <td>R$ ".number_format($exibir["valor"],2,",",".")."</td>
        <td>".$exibir["profissional"]."</td>
        <td>".$exibir["dia"]."/".$exibir["mes"]."/".$exibir["ano"]."</td>
        <td>".$exibir["status"]."</td>
      </tr>
      ";
		}
	   ?> 
      
    </tbody>
  </table>
</div>
	  </div>
</div>
</div>
	  
</div>
  
  
</div>