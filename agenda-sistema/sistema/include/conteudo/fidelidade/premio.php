<div class="container">
  <div class="row">
  <div class="col-sm-12">
  <div class="panel panel-success">
      <div class="panel-heading"><h2>Prêmio</h2></div>
      <div class="panel-body">
  
	<div class="btn-group">

	<a href="fid_premiados.php">
	  <button type="button" class="btn btn-primary"><i class="fa fa-user-plus" aria-hidden="true"></i>
		  Premiados</button></a>
	<a href="fid_premio_cad.php">
	  <button type="button" class="btn btn-primary"><i class="fa fa-user-plus" aria-hidden="true"></i>
		  Cadastrar Prêmio</button></a>
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
      <tr >
		<th style='text-align: center;'>Ações</th>
		<th style='text-align: center;'>Prêmio</th>
        <th style='text-align: center;'>Pontos</th>
		<th style='text-align: center;'></th>
      </tr>
    </thead>
    <tbody id="myTable">
    	<?php 
		$pagina = isset($_GET["pagina"]) ? $_GET["pagina"] : 1;
		
		$result_curso = "SELECT * FROM premio ORDER BY pontos";
		$execu = $sql->query($result_curso);
		$resultado_curso = mysqli_fetch_assoc($execu);
		$total_curso = mysqli_num_rows($execu);
		
		$quantidade_pg = 10;
		$num_pagina = ceil($total_curso/$quantidade_pg);
		$inicio = ($quantidade_pg * $pagina) - $quantidade_pg;
		
		$sqli = "SELECT * FROM premio ORDER BY pontos ASC LIMIT $inicio, $quantidade_pg";
		$exec = $sql->query($sqli);
		$cont = mysqli_num_rows($exec);
		
		while($exibir = mysqli_fetch_assoc($exec)){
			
			/*$id = $exibir["id_cliente"];
			
			$sqlib = "SELECT SUM(pontos) as SOMA FROM agenda WHERE id_cliente='$id'";
			$execb = $sql->query($sqlib);
			$contb = mysqli_num_rows($execb);
			$exibi = mysqli_fetch_assoc($execb);*/
			
			echo "
				  <tr style='text-align: center'>
				    <td>
					<a href='fid_premio_edit.php?id=".$exibir["id"]."' data-toggle='tooltip' title='Editar dados'>
					<i class='fa fa-pencil-square-o' aria-hidden='true'></i></a> - 
					<a href='include/exclui/premio.php?id=".$exibir["id"]."' data-toggle='tooltip' title='Excluir'>
					<i class='fa fa-times' aria-hidden='true'></i></a>
					</td>
					<td>".$exibir["premio"]."</td>
					<td>".$exibir["pontos"]."</td>
					<td></td>
				  </tr>
				  ";
		}
	   ?> 
      <tr align="center">
      	<td colspan="5">
      		<ul class="pagination">
      		<?php for ($i = 1; $i < $num_pagina + 1; $i++){ ?>
				<li><a href="fid_premio.php?pagina=<?php echo $i; ?>"><?php echo $i; ?></a></li>
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