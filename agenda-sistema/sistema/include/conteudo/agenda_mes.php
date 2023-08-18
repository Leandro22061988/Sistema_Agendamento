<div class="container">
  
  <div class="row">
  
  <div class="col-sm-12">
  
  <div class="panel panel-info">
      <div class="panel-heading"><h2>Agenda do mês - <?php date_default_timezone_set('America/Sao_Paulo'); echo date('m/Y' ); ?></h2></div>
      <div class="panel-body">
  
		<div class="btn-group">
		<a href="agenda.php">
		<button type="button" class="btn btn-primary"><i class="fa fa-book" aria-hidden="true"></i>
		  Agenda do dia</button></a>
		<a href="agenda_data.php">
		<button type="button" class="btn btn-primary"><i class="fa fa-search" aria-hidden="true"></i>
		Pesquisar por data</button></a>
		<a href="index.php">
		<button type="button" class="btn btn-primary"><i class="fa fa-home" aria-hidden="true"></i>
		Ir para home</button></a>
		</div> 
             
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Ações</th>
        <th>Nome</th>
        <th>Serviço</th>
        <th>Valor</th>
        <th>Horário</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
     <?php
		$pagina = isset($_GET["pagina"]) ? $_GET["pagina"] : 1;
		
		$mes = date("n");
		$ano = date("Y");
		
		$result_curso = "SELECT * FROM agenda WHERE mes='$mes' and ano='$ano' ORDER BY nome";
		$execu = $sql->query($result_curso);
		$resultado_curso = mysqli_fetch_assoc($execu);
		$total_curso = mysqli_num_rows($execu);
		
		$quantidade_pg = 20;
		$num_pagina = ceil($total_curso/$quantidade_pg);
		$inicio = ($quantidade_pg * $pagina) - $quantidade_pg;
		
		
		$sqli = "SELECT * FROM agenda WHERE mes='$mes' and ano='$ano' ORDER BY horario ASC LIMIT $inicio, $quantidade_pg ";
		$exec = $sql->query($sqli);
		$cont = mysqli_num_rows($exec);
		
		while($exibir = mysqli_fetch_assoc($exec)){
			
			echo "
		  <tr>
			<td>
			  <a href='agendar_busc_servico_edit.php?id=".$exibir["id"]."' data-toggle='tooltip' title='Editar'>
				<i class='fa fa-pencil-square-o' aria-hidden='true'></i></a> - 
			  <a href='include/exclui/agenda.php?id=".$exibir['id']."' data-toggle='tooltip' title='Excluir'>
				<i class='fa fa-times' aria-hidden='true'></i></a>
		   </td>
			<td>
			<a href='agenda_detalhes.php?id=".$exibir['id']."' data-toggle='tooltip' title='Clique para ver detalhes'>
			".$exibir['nome']."
			</a>
			
			</td>
			<td>".$exibir['servico']."</td>
			<td>R$ ".number_format($exibir['valor'],2,",",".")."</td>
			<td>".$exibir['horario']."</td>
			<td>".$exibir['status']."</td>
		  </tr>

		  ";
		}
	  ?>
     <tr>
      	<td></td>
      	<td></td>
      	<td></td>
      	<td></td>
		<td align="right"></td>
      	<td></td>
      </tr>
      <tr align="center">
      	<td colspan="5">
      		<ul class="pagination">
      		<?php for ($i = 1; $i < $num_pagina + 1; $i++){ ?>
				<li><a href="agenda_mes.php?pagina=<?php echo $i; ?>"><?php echo $i; ?></a></li>
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
  
  <!--<div class="well">Normal Well</div>
  <div class="well">Normal Well</div>
  <div class="well">Normal Well</div>-->
  
</div>