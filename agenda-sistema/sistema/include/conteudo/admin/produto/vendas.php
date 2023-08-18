<div class="container">
<div class="row">
<div class="col-sm-12">
<div class="panel panel-danger">
	<div class="panel-heading"><h2>Vendas</h2></div>
<div class="panel-body">
  <script>
			  $( function() {
				var availableTags = [
				  <?php  
						$sqli = "SELECT * FROM produto ORDER BY nome";
						$exec = $sql->query($sqli);

						while($servi = mysqli_fetch_assoc($exec)){
							$bus = $servi["codigo"];
							echo "'".$bus."',";
						}
					?>
				];
				$( "#cod" ).autocomplete({
				  source: availableTags
				});
			  } );
	  		  $( function() {
				var availableTagsC = [
				  <?php  
						$sqli = "SELECT * FROM produto ORDER BY nome";
						$exec = $sql->query($sqli);

						while($servi = mysqli_fetch_assoc($exec)){
							$bus = $servi["nome"];
							echo "'".$bus."',";
						}
					?>
				];
				$( "#tags" ).autocomplete({
				  source: availableTagsC
				});
			  } );
		</script>
  			<form class="form-horizontal" action="produto_venda_busca.php"  method="post">

				<div class="form-group">

				  <label class="control-label col-sm-2" for="Porcentagem">Produto:</label>
					<div class="col-xs-6">
					<input type="text" class="form-control" id="tags" name="prod" placeholder="Digite o nome do produto" >
					</div>
				  </div>
				<label class="control-label col-sm-2" for="Porcentagem">Codigo:</label>
					<div class="col-xs-6">
					<input type="text" class="form-control" id="cod" name="cod" placeholder="Digite o nome do produto" >
					</div>
				  </div>
 
				<div class="form-group">        
				  <div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-default">Enviar</button>
				  </div>
				</div>
			  </form> 
	
				
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Ações</th>
        <th>Produto</th>
        <th>Quantidade</th>
		<th>Valor</th>
        <th>Data</th>
      </tr>
    </thead>
    <tbody>
     
      
        
       <?php 
		
		$pagina = isset($_GET["pagina"]) ? $_GET["pagina"] : 1;
		
		$result_curso = "SELECT * FROM produto_venda";
		$execu = $sql->query($result_curso);
		$resultado_curso = mysqli_fetch_assoc($execu);
		$total_curso = mysqli_num_rows($execu);

		$quantidade_pg = 10;
		$num_pagina = ceil($total_curso/$quantidade_pg);
		$inicio = ($quantidade_pg * $pagina) - $quantidade_pg;
		
		$sqli = "SELECT * FROM produto_venda ORDER BY id DESC LIMIT $inicio, $quantidade_pg";
		$exec = $sql->query($sqli);
		  
		while($exibir = mysqli_fetch_assoc($exec)){
			echo "
		<tr>
		<td>
        <a href='#' data-toggle='modal' data-target='#".$exibir["id"]."'>
			<i class='fa fa-eye' aria-hidden='true' data-toggle='tooltip' title='Ver Detalhes'></i></a> -
        <a href='include/exclui/produto_vendas.php?id=".$exibir["id"]."' data-toggle='tooltip' title='Excluir'>
			<i class='fa fa-times' aria-hidden='true'></i></a>
		</td>
        <td>".$exibir["produto"]."</td>
		<td>".$exibir["quantidade"]."</td>
        <td>R$ ".number_format($exibir["valor"],2,",",".")."</td>
		<td>".$exibir["dia"]."/".$exibir["mes"]."/".$exibir["ano"]."</td>
		
		</tr>
		
				<div id='".$exibir["id"]."' class='modal fade' role='dialog'>
				  <div class='modal-dialog'>

					<!-- Modal content-->
					<div class='modal-content'>
					  <div class='modal-header'>
						<button type='button' class='close' data-dismiss='modal'>&times;</button>
						<h4 class='modal-title'>Venda Realizada - ".$exibir["dia"]."/".$exibir["mes"]."/".$exibir["ano"]."</h4>
					  </div>
					  <div class='modal-body'>
						<p><strong>Cliente</strong>: ".$exibir["cliente"]."</p>
						<p><strong>Vendedor</strong>: ".$exibir["vendedor"]."</p>
						<p><strong>Produto</strong>: ".$exibir["produto"]."</p>
						<p><strong>Valor</strong>: R$ ".number_format($exibir["valor"],2,",",".")."</p>
						<p><strong>Desconto</strong>: R$ ".number_format($exibir["desconto"],2,",",".")."</p>
						<p><strong>Quantidade</strong>: ".$exibir["quantidade"]."</p>
						<p><strong>Pagamento</strong>: ".$exibir["pagamento"]."</p>
						<p><strong>Parcelas</strong>: ".$exibir["parcelas"]."</p>
						<p><strong>Valor das Parcelas</strong>: R$ ".number_format($exibir["val_parcelas"],2,",",".")."</p>
						<p><strong>Juros</strong>: ".$exibir["juros"]."%</p>
						<p><strong>Forma de Pagamento</strong>: ".$exibir["pgforma"]."</p>
						<p><strong>Cartão Usado</strong>: ".$exibir["cardf"]."</p>
						<p><strong>OBS</strong>: ".$exibir["obs"]."</p>
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
      	<td colspan="5">
      		<ul class="pagination">
      		<?php for ($i = 1; $i < $num_pagina + 1; $i++){ ?>
				<li><a href="produto_vendas.php?pagina=<?php echo $i; ?>"><?php echo $i; ?></a></li>
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