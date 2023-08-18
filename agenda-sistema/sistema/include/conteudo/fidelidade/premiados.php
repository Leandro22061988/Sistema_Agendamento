<div class="container">
  <div class="row">
  <div class="col-sm-12">
  <div class="panel panel-success">
      <div class="panel-heading"><h2>Prêmiados</h2></div>
      <div class="panel-body">
  
	<div class="btn-group">

	<a href="fid_premio.php">
	  <button type="button" class="btn btn-primary"><i class="fa fa-user-plus" aria-hidden="true"></i>
		  Prêmios</button></a>
	<a href="fidelidade.php">
	  <button type="button" class="btn btn-primary"><i class="fa fa-user-plus" aria-hidden="true"></i>
		  Fidelidade</button></a>
	<a href="index.php">
	  <button type="button" class="btn btn-primary"><i class="fa fa-home" aria-hidden="true"></i>
		  Ir para home</button></a>

	</div> 
</div>

<?php 
		  require("include/class/retorno.php");
		  $r = new Retorno;
		  $r->cadastro();

?>  
<div class="col-xs-5">
	<input class="form-control" id="myInput" type="text" placeholder="Digite o nome"></div>
  <br>
  <table class="table table-hover">
    <thead>
      <tr>
		<th>Data</th>
		<th>Nome</th>
        <th>Prêmio</th>
		<th>Pontos</th>
      </tr>
    </thead>
    <tbody id="myTable">
    	<?php 
		$pagina = isset($_GET["pagina"]) ? $_GET["pagina"] : 1;
		
		$result_curso = "SELECT * FROM resgate ORDER BY pontos";
		$execu = $sql->query($result_curso);
		$resultado_curso = mysqli_fetch_assoc($execu);
		$total_curso = mysqli_num_rows($execu);
		
		$quantidade_pg = 10;
		$num_pagina = ceil($total_curso/$quantidade_pg);
		$inicio = ($quantidade_pg * $pagina) - $quantidade_pg;
		
		$sqli = "SELECT * FROM resgate ORDER BY pontos ASC LIMIT $inicio, $quantidade_pg";
		$exec = $sql->query($sqli);
		$cont = mysqli_num_rows($exec);
		
		while($exibir = mysqli_fetch_assoc($exec)){
			
			/*$id = $exibir["id_cliente"];
			
			$sqlib = "SELECT SUM(pontos) as SOMA FROM agenda WHERE id_cliente='$id'";
			$execb = $sql->query($sqlib);
			$contb = mysqli_num_rows($execb);
			$exibi = mysqli_fetch_assoc($execb);*/
			
			echo "
				  <tr>
				    <td>".$exibir["dia"]."/".$exibir["mes"]."/".$exibir["ano"]."</td>
					<td>".$exibir["nome"]."</td>
					<td>".$exibir["premio"]."</td>
					<td>".$exibir["pontos"]."</td>
				  </tr>
				  ";
		}
	   ?> 
      <tr align="center">
      	<td colspan="5">
      		<ul class="pagination">
      		<?php for ($i = 1; $i < $num_pagina + 1; $i++){ ?>
				<li><a href="fid_premiados.php?pagina=<?php echo $i; ?>"><?php echo $i; ?></a></li>
			<?php }?>
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