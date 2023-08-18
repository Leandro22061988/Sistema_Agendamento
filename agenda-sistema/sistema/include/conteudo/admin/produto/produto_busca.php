<div class="container">
<div class="row">
<div class="col-sm-12">
<div class="panel panel-danger">
	<div class="panel-heading"><h2>Busca Produtos</h2></div>
<div class="panel-body">
	<script>
			  $( function() {
				var availableTags = [
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
				  source: availableTags
				});
			  } );
		</script>
  			<form class="form-horizontal" action="produto_busca.php"  method="post">

				<div class="form-group">

				  <label class="control-label col-sm-2" for="Porcentagem">Produto:</label>
					<div class="col-xs-6">
					<input type="text" class="form-control" id="tags" name="prod" placeholder="Digite o nome" >
					</div>
				  </div>
 
				<div class="form-group">        
				  <div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-default">Enviar</button>
				  </div>
				</div>
			  </form> 
	  
   <div class="btn-group">

	<a href="produto_cad.php" class="btn btn-primary">
	  <i class="fa fa-user-plus" aria-hidden="true"></i>
		  Cadastrar</a>
	 
	</div> 
	<div class="btn-group">

	<a href="produto.php" class="btn btn-primary">
	  <i class="fa fa-user-plus" aria-hidden="true"></i>
		  Produtos Cadastrados</a>
	 
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
        <th>Código</th>
        <th>Nome</th>
		<th>Quantidade</th>
        <th>Valor</th>
		<th>Porcentagem</th>
      </tr>
    </thead>
    <tbody>
     
      
        
       <?php 
		if(isset($_POST["prod"])){
		$nome = $_POST["prod"];		
		$sqli = "SELECT * FROM produto WHERE nome LIKE '$nome%'";
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
		<td>".$exibir["nome"]."</td>
		<td>".$exibir["quantidade"]."</td>
        <td>R$ ".number_format($exibir["valor"],2,",",".")."</td>
		<td>".$exibir["porcentagem"]."%</td>
		
		</tr>";
		}
			
		}else{
			
			echo "
			<tr align='center'>
				<td colspan='6'>
					Pesquisa ainda não realizada
				</td>
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