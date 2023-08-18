<div class="container">
  <div class="row">
  <div class="col-sm-12">
  <div class="panel panel-info">
      <div class="panel-heading"><h2>Adesão de Contratos </h2> </div>
      <div class="panel-body">
  
	<div class="btn-group">

	<a href="contrato_cad.php">
	  <button type="button" class="btn btn-primary"><i class="fa fa-user-plus" aria-hidden="true"></i>
		  Cadastrar Contratos</button></a>
	<a href="contratos.php">
	  <button type="button" class="btn btn-primary"><i class="fa fa-user-plus" aria-hidden="true"></i>
		  Contratos</button></a>
	<a href="curso.php">
	  <button type="button" class="btn btn-primary"><i class="fa fa-home" aria-hidden="true"></i>
		  Voltar</button></a>

	</div> 
</div>

<?php 
		  require("include/class/retorno.php");
		  $r = new Retorno;
		  $r->cadastro();

?>     

  <table class="table table-hover">
    <thead>
      <tr>
        <th>Ações</th>
        <th>Nome</th>
        <th>Monitor</th>
		<th>Curso</th>
		<th>Valor</th>
      </tr>
    </thead>
    <tbody>
    	<?php 
		$pagina = isset($_GET["pagina"]) ? $_GET["pagina"] : 1;
		
		$result_curso = "SELECT * FROM adesao_curso ORDER BY nome";
		$execu = $sql->query($result_curso);
		$resultado_curso = mysqli_fetch_assoc($execu);
		$total_curso = mysqli_num_rows($execu);
		
		$quantidade_pg = 10;
		$num_pagina = ceil($total_curso/$quantidade_pg);
		$inicio = ($quantidade_pg * $pagina) - $quantidade_pg;
		
		$sqli = "SELECT * FROM adesao_curso ORDER BY nome LIMIT $inicio, $quantidade_pg";
		$exec = $sql->query($sqli);
		$cont = mysqli_num_rows($exec);
		
		while($exibir = mysqli_fetch_assoc($exec)){
			
			echo "
			  <tr>
				<td>
				<a href='include/exclui/adesao_curso.php?id=".$exibir["id"]."' data-toggle='tooltip' title='Excluir'>
					<i class='fa fa-times' aria-hidden='true'></i></a>
			   </td>
				<td><a href='cliente_c_detalhes_curso.php?id=".$exibir["id"]."' data-toggle='tooltip' title='Contrato' target='_blank'>".$exibir["nome"]."</a></td>
				<td>".$exibir["profissional"]."</td>
				<td>".$exibir["curso"]."</td>
				<td>R$ ".number_format($exibir["valor"],2,",",".")."</td>
			  </tr>
			  ";
		}
	   ?> 
      <tr align="center">
      	<td colspan="5">
      		<ul class="pagination">
      		<?php  for ($i = 1; $i < $num_pagina + 1; $i++){ ?>
				<li><a href="contratos_adesao.php?pagina=<?php  echo $i; ?>"><?php echo  $i; ?></a></li>
			<?php  }?>
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