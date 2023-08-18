<div class="container">
<div class="row">
<div class="col-sm-12">
<div class="panel panel-danger">
	<div class="panel-heading"><h2>Promissórias</h2></div>
<div class="panel-body">
  <script>
			  $( function() {
				var availableTags = [
				  <?php  
						$sqli = "SELECT * FROM promissioria ORDER BY codigo";
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
						$sqli = "SELECT * FROM promissioria ORDER BY codigo";
						$exec = $sql->query($sqli);

						while($servi = mysqli_fetch_assoc($exec)){
							$bus = $servi["codigo"];
							echo "'".$bus."',";
						}
					?>
				];
				$( "#tags" ).autocomplete({
				  source: availableTagsC
				});
			  } );
		</script>
  			<form class="form-horizontal" action="produto_vendas_promissorias.php"  method="post">

				<label class="control-label col-sm-2" for="Porcentagem">Codigo:</label>
					<div class="col-xs-6">
					<input type="text" class="form-control" id="cod" name="cod" placeholder="Digite o nome do produto" >
					</div>
				  </div>
 
				<div class="form-group">        
				  <div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-default">Enviar</button>
					<button type="submit" class="btn">Limpar Busca</button>
					 <a href="promissorias.php">
					<button type="button" class="btn btn-info">Voltar</button></a> 
				  </div>
				</div>
			  </form> 
	
				
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Ações</th>
        <th>Código</th>
        <th>Produto</th>
		<th>Valor</th>
        <th>Ultimo Pagamento</th>
      </tr>
    </thead>
    <tbody>
     
      
        
       <?php 
		if(isset($_POST["cod"])){
			$cod = $_POST["cod"];
		}else{
			$cod = "";
		}
		$sqli = "SELECT * FROM promissioria WHERE codigo LIKE '$cod%' and parcela>=1 ORDER BY codigo DESC LIMIT 50";
		$exec = $sql->query($sqli);
		  
		while($exibir = mysqli_fetch_assoc($exec)){
			echo "
		<tr>
		<td>
        <a href='produto_vendas_promissoria_ver.php?cod=".$exibir["codigo"]."&d=".$exibir["vencimento"]."' data-toggle='tooltip' title=' Ver Promissória'>
			<i class='fa fa-eye' aria-hidden='true' ></i></a> - 
		<a href='produto_vendas_promissoria.php?cod=".$exibir["codigo"]."&d=".$exibir["vencimento"]."' data-toggle='tooltip' title='Gerar Promissória'>
			<i class='fa fa-plus-square' aria-hidden='true'></i></a>
		</td>
        <td>".$exibir["codigo"]."</td>
		<td>".$exibir["produto"]."</td>
        <td>R$ ".number_format($exibir["valor"],2,",",".")."</td>
		<td>".$exibir["vencimento"]."</td>
		
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