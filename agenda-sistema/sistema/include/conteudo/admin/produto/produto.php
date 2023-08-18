<div class="container">
<div class="row">
<div class="col-sm-12">
<div class="panel panel-danger">
	<div class="panel-heading"><h2>Produtos</h2></div>
<div class="panel-body">
  
   <div class="btn-group">

	<a href="produto_cad.php" class="btn btn-primary">
	  <i class="fa fa-user-plus" aria-hidden="true"></i>
		  Cadastrar</a>
	 
	</div> 
	<div class="btn-group">

	<a href="produto_busca.php" class="btn btn-primary">
	  <i class="fa fa-user-plus" aria-hidden="true"></i>
		  Buscar produtos</a>
	 
	</div> 
	
<?php 
		  require("include/class/retorno.php");
		  $r = new Retorno;
		  $r->cadastro();

?> 
<?php if(isset($_GET["est"])){ ?>
	<div class="alert alert-danger">
	  <strong>Problemas no se Estoque!</strong> O produto <?php echo $_GET["p"]; ?> esta zerado, adicione mais produtos.
	</div>
<?php }else{} ?>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Ações</th>
        <th>Código</th>
        <th>Nome</th>
		<th>Quantidade</th>
        <th>Valor</th>
		<th>Porcentagem</th>
      </tr>
    </thead>
    <tbody>
     
      
        
       <?php 
		
		$pagina = isset($_GET["pagina"]) ? $_GET["pagina"] : 1;
		
		$result_curso = "SELECT * FROM produto";
		$execu = $sql->query($result_curso);
		$resultado_curso = mysqli_fetch_assoc($execu);
		$total_curso = mysqli_num_rows($execu);

		$quantidade_pg = 10;
		$num_pagina = ceil($total_curso/$quantidade_pg);
		$inicio = ($quantidade_pg * $pagina) - $quantidade_pg;
		
		$sqli = "SELECT * FROM produto LIMIT $inicio, $quantidade_pg";
		$exec = $sql->query($sqli);
		  
		while($exibir = mysqli_fetch_assoc($exec)){
			echo "
		<tr>
		<td>
        <a href='produto_edit.php?id=".$exibir["id"]."' data-toggle='tooltip' title='Editar dados'>
			<i class='fa fa-pencil-square-o' aria-hidden='true'></i></a> - 
        <a href='include/exclui/produto.php?id=".$exibir["id"]."' data-toggle='tooltip' title='Excluir'>
			<i class='fa fa-times' aria-hidden='true'></i></a>
		</td>
        <td>".$exibir["codigo"]."</td>
		<td><a href='#' data-toggle='modal' data-target='#".$exibir["id"]."'>".$exibir["nome"]."</a></td>
		<td>".$exibir["quantidade"]."</td>
        <td>R$ ".number_format($exibir["valor"],2,",",".")."</td>
		<td>".$exibir["porcentagem"]."%</td>
		
		</tr>
				<div id='".$exibir["id"]."' class='modal fade' role='dialog'>
				  <div class='modal-dialog'>

					<!-- Modal content-->
					<div class='modal-content'>
					  <div class='modal-header'>
						<button type='button' class='close' data-dismiss='modal'>&times;</button>
						<h4 class='modal-title'>Produto - ".$exibir["codigo"]."</h4>
					  </div>
					  <div class='modal-body'>
						<p><strong>Nome</strong>: ".$exibir["nome"]."</p>
						<p><strong>Quantidade</strong>: ".$exibir["quantidade"]."</p>
						<p><strong>Valor</strong>: R$ ".number_format($exibir["valor"],2,",",".")."</p>
						<p><strong>Porcentagem</strong>: -".$exibir["porcentagem"]."%</p>
						<p><strong>Descrição</strong>: ".$exibir["descricao"]."</p>
					  </div>
					  <div class='modal-footer'>
						<button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
					  </div>
					</div>

				  </div>
				</div>
		";
		}
		?>
      <tr align="center">
      	<td colspan="6">
      		<ul class="pagination">
      		<?php for ($i = 1; $i < $num_pagina + 1; $i++){ ?>
				<li><a href="produto.php?pagina=<?php echo $i; ?>"><?php echo $i; ?></a></li>
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