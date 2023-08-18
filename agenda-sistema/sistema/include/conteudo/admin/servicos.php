<div class="container">
<div class="row">
<div class="col-sm-12">
<div class="panel panel-danger">
	<div class="panel-heading"><h2>Serviços</h2></div>
<div class="panel-body">
  
   <div class="btn-group">

	<a href="servicos_cad.php" class="btn btn-primary">
	  <i class="fa fa-user-plus" aria-hidden="true"></i>
		  Cadastrar</a>
	 
	</div> 
	<div class="btn-group">

	<a href="servicos_busca.php" class="btn btn-primary">
	  <i class="fa fa-user-plus" aria-hidden="true"></i>
		  Buscar Serviços</a>
	 
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
        <th>Valor</th>
        <th>Tempo <a href="#" data-toggle="popover" title="Tempo que leva o serviço" data-placement="top" data-content="20 e 30min 1h ou mais 1 ou 2..."><i class="fa fa-question-circle" aria-hidden="true"></i></a></th>
      </tr>
    </thead>
    <tbody>
     
      
        
       <?php 
		
		$pagina = isset($_GET["pagina"]) ? $_GET["pagina"] : 1;
		
		$result_curso = "SELECT * FROM servico";
		$execu = $sql->query($result_curso);
		$resultado_curso = mysqli_fetch_assoc($execu);
		$total_curso = mysqli_num_rows($execu);

		$quantidade_pg = 10;
		$num_pagina = ceil($total_curso/$quantidade_pg);
		$inicio = ($quantidade_pg * $pagina) - $quantidade_pg;
		
		$sqli = "SELECT * FROM servico LIMIT $inicio, $quantidade_pg";
		$exec = $sql->query($sqli);
		  
		while($exibir = mysqli_fetch_assoc($exec)){
			echo "
		<tr>
		<td>
        <a href='servico_edit.php?id=".$exibir["id"]."' data-toggle='tooltip' title='Editar dados'>
			<i class='fa fa-pencil-square-o' aria-hidden='true'></i></a> - 
        <a href='include/exclui/servico.php?id=".$exibir["id"]."' data-toggle='tooltip' title='Excluir'>
			<i class='fa fa-times' aria-hidden='true'></i></a>
		</td>
        <td>".$exibir["nome"]."</td>
        <td>R$ ".number_format($exibir["valor"],2,",",".")."</td>
		<td>".$exibir["tempo"]."</td>
		</tr>";
		}
		?>
      <tr align="center">
      	<td colspan="5">
      		<ul class="pagination">
      		<?php for ($i = 1; $i < $num_pagina + 1; $i++){ ?>
				<li><a href="servicos.php?pagina=<?php echo $i; ?>"><?php echo $i; ?></a></li>
			<?php } ?>
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