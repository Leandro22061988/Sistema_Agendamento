<div class="container">
<div class="row">
<div class="col-sm-12">
<div class="panel panel-primary">
	<div class="panel-heading"><h2>Administrativo</h2></div>
<div class="panel-body">
  
	<div class="btn-group">

	
	</div> 
<div class="well">
  <div class="row">
  
  <div class="col-sm-12">
  
  <div class="panel panel-info">
      <div class="panel-heading"><h2><i class="fa fa-info-circle" aria-hidden="true"></i> Histórico de Impressão</h2></div>
      <div class="panel-body">
      <table class="table table-hover">
		<thead>
		  <tr>
			<th>Cliente</th>
			<th>Pontos Fid.</th>
			<th>Admin</th>
			<th>Data e Hora</th>
		  </tr>
		</thead>
		<tbody>
			<?php 
			$pagina = isset($_GET["pagina"]) ? $_GET["pagina"] : 1;

			$result_curso = "SELECT * FROM historico_print ORDER BY cliente";
			$execu = $sql->query($result_curso);
			$resultado_curso = mysqli_fetch_assoc($execu);
			$total_curso = mysqli_num_rows($execu);

			$quantidade_pg = 10;
			$num_pagina = ceil($total_curso/$quantidade_pg);
			$inicio = ($quantidade_pg * $pagina) - $quantidade_pg;

			$sqli = "SELECT * FROM historico_print ORDER BY cliente LIMIT $inicio, $quantidade_pg";
			$exec = $sql->query($sqli);
			$cont = mysqli_num_rows($exec);

			while($exibir = mysqli_fetch_assoc($exec)){
				$dat = $exibir["datahora"];
				$conv = DateTime::createFromFormat('Y-m-d H:i:s', $dat);
				$rconv = $conv->format('d/m/Y H:i:s');
				echo "
		  <tr>
			<td>".$exibir["cliente"]."</td>
			<td>".$exibir["pontos"]."</td>
			<td>".$exibir["admin"]."</td>
			<td>".$rconv."</td>
		  </tr>
		  ";
			}
		   ?> 
		  <tr align="center">
			<td colspan="4">
				<ul class="pagination">
				<?php for ($i = 1; $i < $num_pagina + 1; $i++){ ?>
					<li><a href="historicos.php?pagina=<?php echo $i; ?>"><?php echo $i; ?></a></li>
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
  
</div>
</div>
</div>
</div>
</div>